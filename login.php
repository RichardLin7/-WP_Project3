<!DOCTYPE html>
<html lang="en">
	<head><meta charset="UTF-8">
		<title>Login</title>
		<link href="stylesheet.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div class="header">
			<h1>Conway's Game of Life - Game</h1>
			<h3>Web Programing - Project 3</h3>
		</div>
     	<div id = 'box'>
			<form action="login-submit.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Login:</legend>
					<div id = 'line'>
						<strong> <label for="name">UserName: </label> </strong>
			 			<input type="text" id="name" name="name" size="12" required>
					</div><br><br>
					<div id = 'line'>
             			<strong> <label for="pw">Password: </label> </strong>
			 			<input type="text" id="pw" name="pw" maxlength="12" size="12" required>
	          		</div><br><br>
	    			<input type="submit" value="Login"/>
				</fieldset>
			</form>
		</div>
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