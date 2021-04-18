<!DOCTYPE html>
<html lang="en">
	<head><meta charset="UTF-8">
		<title>Logout</title>
		<link href="stylesheet.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
        <div id = 'box'>
        <fieldset>
            <legend>Log out <?=logout();?></legend>
            <form action= 'home.php' method="post" enctype="multipart/form-data">
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