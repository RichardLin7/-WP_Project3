<!DOCTYPE html>
<html lang="en">
	<head><meta charset="UTF-8">
		<title>Login</title>
		<link href="stylesheet.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
        <?php 
        setcookie('directlogin',false,time() + (86400 * 30), "/");
        directlogin();?>

		<br>
        <br>
     <div id = 'box'>
		<form action="login-submit.php" method="post" enctype="multipart/form-data">
			<fieldset>
			<legend>Login:</legend>
			<div id = 'line'>
			<strong> <label for="name">UserName: </label></strong>
			 <input type="text" id="name" name="name" size="12" required>
			</div><br><br>
			<div id = 'line'>
             <strong>
             <label for="pw">Password:</label></strong>
			 <input type="password" id="pw" name="pw" maxlength="12" size="12" required>
	          </div><br><br>
	    	<input type="submit" value="Login"/>
			</fieldset>
		</form>
	</body>

	<?php
	function directlogin(){
		if(!isset($_POST['logintype'])){return;}
			elseif(empty($_POST['logintype'])){return;}
              elseif($_POST['logintype'] == "login2"){
              	return;
              }
		setcookie('directlogin',true,time() + (86400 * 30), "/");	
       	setcookie('user',  $_COOKIE['name'], time() + (86400 * 30), "/");
      	header("Location: login-submit.php");
        exit();
	}
	?>
</html>