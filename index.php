<?php

		
?>

<html>
<head>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
<form name ="bank" method="post" id="bank-form">
<label>Номинал в наличии</label>
</br>
<input type="text" name="n" placeholder="5,10,20,50,100,200,500">
</br>
</br>
<input type="text" name="val" placeholder="Ваша сумма">
</br>
</br>
<input  type="submit" name="send" style='cursor: pointer;' value="Отправить">
</form>
<script type="text/javascript">
	
		$("#bank-form").submit(function(event){
			event.preventDefault();
			$.ajax({
    type : 'POST',
    url : '3.php',
    data : $('#bank-form').serialize(),
    success : function(data) {
        alert(data)
    }
});
		});
		
	
</script>
</body>
</html>