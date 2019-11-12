<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Динамическое добавление поля в форму (для записи в массив и обработки на стороне сервера).</title>
<script src="http://code.jquery.com/jquery-1.11.0.js"></script>
<script type="text/javascript">

function addField () {
	var telnum = parseInt($('#add_field_area').find('div.add:last').attr('id').slice(3))+1;
	$('div#add_field_area').append('<div id="add'+telnum+'" class="add"><label> Поле №'+telnum+'</label><input type="text" width="120" name="val[]" id="val"  value=""/><div class="deletebutton" onclick="deleteField('+telnum+');"></div></div>');
}

function deleteField (id) {
	$('div#add'+id).remove();
}

</script>
<style>
input {
	height: 20px;
	margin: 5px;
	width:400px;
}
.addbutton {
	text-align: center;
	vertical-align:middle;
	font-size: 13px;
	width: 283px;
	border: 1px solid #70A9FD;
	-webkit-border-radius: 7px;
	-moz-border-radius: 7px;
	border-radius: 7px;
	cursor: pointer;
	margin: 2px 0 0 110px;
	color: #326DC5;
	padding: 4px;
	background-color:#BED6FF;
}

.deletebutton {
	width: 20px;
	height: 22px;
	cursor: pointer;
	margin: 5px;
	display:inline-block;
	background: url(delete.png) repeat;
	background-position: center center;
	background-repeat: no-repeat;
	position:absolute;
	top: 1px;
	left: 480px;
}

.add {
	position:relative;
}
</style>
</head>

<body>


        <div id="add_field_area">
			<?  
            $array = 'ватрушка|эклер|сочник|пирожок с яблоком';
            $values = explode("|",$array);
            $n = 0;
            foreach ($values as $value) {
            $n++;
                if ($n == 1) {
            ?><div id="add1" class="add">
                    <label> Поле №1</label>
                    <input type="text" width="120" name="val[]" id="val"  value="<?=$value?>"/>
              </div>
                 <?
                } else {			
                ?>
                <div id="add<?=$n?>" class="add">
                    <label> Поле №<?=$n?></label>
                    <input type="text" width="120" name="val[]" id="val"  value="<?=$value?>"/>
                    <div class="deletebutton" onclick="deleteField(<?=$n?>);"></div>
                    
                </div>
                
                <?	
                
                }
            }
             
                ?>
        </div>
        <div onclick="addField();" class="addbutton">Добавить новое поле</div>
        

</body>
</html>
