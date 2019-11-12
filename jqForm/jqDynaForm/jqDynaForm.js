/*
    jqDynaForm

    Author      : (c) 2012 Andrey Tushev (http://tushev.com)
    License     : LGPL (GNU Lesser General Public License http://www.gnu.org/copyleft/lesser.html)
    URL         : http://code.google.com/p/jq-dyna-form/
    Version     : 0.1 alpha
*/
(function($) {
    $.fn.jqDynaForm = function(method ) {
        // Settings
        var settings = {
            messages: {                
                addItem                 : "Add new",
                deleteItem              : "Delete item",
                deleleItemConfirmation  : "Delete selected item?",
            }
        };
        
        var building = false;
        
        function getSourceItem(itemName) {            
            return  $("[data-name='"+itemName+"']").not(".jqDynaForm [data-name='"+itemName+"']").first();
        }
        
        function setFieldValue(field, value) {            
            if(value === undefined) {
                return false;
            }
            
            if(field.attr('type') == 'checkbox') {
                if(value === null || value === undefined || value === '') {
                    field.removeAttr('checked');
                }
                else {
                    field.attr('checked', 'checked');
                }                                
            }
            else if(field.get(0).tagName == 'select') {
            }
            else {
                return field.val(value);
            }
        }        
        
        function setValues(context, json) {
            if(!json) {
                return false;
            }

            // Scan all inputs
            $(':input', context).each(function(){
                // Skip other levels
                if(context.parents('[data-holder-for]').length != $(this).parents('[data-holder-for]').length) {
                    return;
                }
                
                // Set field value
                var name = $(this).attr('name');
                if(name) {
                    setFieldValue($(this), json[name]);
                }
            });           
        }        
        
        function addItem(list, itemName, values) {    
            var item = getSourceItem(itemName);
            var newItem = $("<div class='item'></div>").append( item.clone() );
            setValues(newItem, values);
            
            // Delete button
            $("<div class='delete' title='"+settings.messages.deleteItem+"'></div>")
                .prependTo(newItem)
                .click(function(){
                    var item = $(this).parents().filter(':first');
                    item.addClass('deleting');
                    if(confirm(settings.messages.deleleItemConfirmation)) {
                        item.slideUp(function(){
                            item.remove();
                        });
                    }
                    else {
                        item.removeClass('deleting');
                    }
                });
            
            if(building) {
                list.append( newItem );
            }
            else {
                newItem.hide();
                list.append( newItem );
                newItem.slideDown();                  
            }
            
            // Init nested holders
            var holders = $("[data-holder-for]", newItem);              
            holders.each(function(){
                var nestedName = $(this).attr('data-holder-for');
                initHolder($(this), values[nestedName+'Array']);
            });            
        }        
        
        function initHolder(holder, array) { 
            var itemName = holder.attr('data-holder-for');            
            var item = getSourceItem(itemName);
            
            var header = $("<div class='header'></div>").appendTo(holder);
            var list   = $("<div class='list'></div>")  .appendTo(holder);
            var footer = $("<div class='footer'></div>").appendTo(holder);
            
  
            
            var addButton = $("<div class='add' title='"+settings.messages.addItem+" &quot;" + item.attr('data-label') + "&quot;'></div>").appendTo(footer);
            addButton.click(function(){
                addItem(list, itemName, {});
            });
            
            if(array && array.length>0) {
                for(var n in array) {
                    addItem(list, itemName, array[n]);
                }                
            }
            
            
            // Moving
            if($.fn.sortable) {
                $(list).sortable({
                    connectWith : "*[data-holder-for='"+holder.attr('data-holder-for')+"'] > .list",
                    start: function(event, ui) { 
                        ui.item.addClass('moving');
                    },
                    stop: function(event, ui) { 
                        ui.item.removeClass('moving');
                    }                
                });
            }
        }
        

        
        function setup(doc, json) {     
            building = true;
        
            setValues($(doc), json);            
        
            if(!json) {
                json = {};
            }
        
            // Init root holders
            var holders = $("[data-holder-for]", doc);            
            holders.empty();
            holders.each(function(){
                var name = $(this).attr('data-holder-for') + 'Array';                                
                initHolder($(this), json[name]);                
            });
            
            // Hovers
            $(".item, .itemsBlock")
                .live('mouseover', function(e){
                    $(this).addClass('hover');
                    e.stopPropagation();
                })
                .live('mouseout', function(e){
                    $(this).removeClass('hover');
                    e.stopPropagation();
                });
                
            building = false;
        }
        
        
        // Methods
        var methods = {
            //
            // Init
            //
            init: function(options) {
                this.addClass('jqDynaForm');
                settings = $.extend(settings, options);
                this.each(function(){
                    setup(this);
                });
            },
            
            //
            // Get
            //
            get: function() {
                function getFieldValue(field) {
                    if(field.attr('type') == 'checkbox') {
                        return (field.attr('checked') == undefined) ? null : field.attr('value');
                    }
                    else if(field.get(0).tagName == 'select') {
                        return field.val();
                    }
                    else {
                        return field.val();
                    }
                }
                                
                function getItem(context) {
                    var json = {};
                    // Scan all inputs
                    $(':input', context).each(function(){
                        // Skip other levels
                        if(context.parents('[data-holder-for]').length != $(this).parents('[data-holder-for]').length) {
                            return;
                        }
                        
                        var name = $(this).attr('name');
                        if(name) {
                            json[name] = getFieldValue($(this));
                        }
                    });
                    
                    // Scan nested blocks
                    $('[data-holder-for]', context).each(function(){
                        var listName = $(this).attr('data-holder-for') + 'Array';
                        
                        // Scan items within block
                        $('[data-name]', this).each(function(){
                            // Skip other levels
                            if(context.parents('[data-holder-for]').length+1 != $(this).parents('[data-holder-for]').length) {
                                return;
                            }
                            if(!json[listName]) {
                                json[listName] = [];
                            }
                            json[listName].push( getItem($(this)) );
                        });
                    });
                    return json;
                }
                return getItem($(this));
            },
            
            //
            // Set
            // 
            set: function(json) {
                setup(this, json);
            }
        };
        
        
        // Method calling logic
        if(methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        }
        else if(typeof method === 'object' || !method) {
            return methods.init.apply( this, arguments );
        }
        else {
            $.error('Method '+method+' does not exist');
        }
    };

})(jQuery);



