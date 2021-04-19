<!DOCTYPE html>
<html lang="en">
	<head><meta charset="UTF-8">
		<title>Logout</title>
		<link href="stylesheet.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
        <div class="header">
			<h1>Conway's Game of Life - Game</h1>
			<h3>Web Programing - Project 3</h3>
		</div>
        <div id = 'box'>
        <fieldset>
            <legend>Log out <?=logout();?></legend>
            <form action= 'test.php' method="post" enctype="multipart/form-data">
            <input type="submit" value="Back"/>
	    </fieldset>	
        </div>
	</body>

    <?php function logout() {
        setcookie("user", "", time() - 3600,'/');
        return "successful";
        }
    ?>
</html>