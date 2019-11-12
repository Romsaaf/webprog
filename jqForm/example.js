$(document).ready(function(){
    function showFormJson(json) {
        var jsonText = JSON.stringify(json, null, "    ");
        $('#popup')
            .empty()
            .append( "<h3>Result of <code>$(<THE_FORM>).jqDynaForm('get')</code></h3>" )
            .append( $('<pre></pre>').append(jsonText) )
            .dialog({
                title: "JSON representation of the form",
                width: 600,
                height: 500
            });
    }
    function sendJSON(json) {
            $.ajax({
                type: "POST",
                url: "https://ppp.spb.ru:1488/addCommand",
                data: json,
                success: function(res) {
                    alert("Данные успешно отправлены на сервер");
                    window.location.replace('index.php');
                },

            });
            console.log(json);
    }
    // Simple form demo
    $('#smallForm').jqDynaForm();
    $('#saveSmallForm').click(function(){    
        var data = $('#smallForm').jqDynaForm('get');
        var jsText = JSON.stringify(data);

            if (data.team_memberArray)
            {
                if (data.team_memberArray.length < 3)
                {
                    alert("В команде должно быть больше четырёх человек");
                }
                else{
                    if (data.team_memberArray.length > 5)
                    {
                        alert("В команде должно быть не более шести человек")
                    }
                    else {
                        sendJSON(jsText);
                        window.location.replace('index.php')
                    }
                }
            }
            else{
                alert("В команде должно быть больше четырёх человек");
            }
    });
});
		 