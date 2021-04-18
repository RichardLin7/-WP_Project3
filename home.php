<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CSS Website Layout</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
	</head>
	<body>
		<?php $ret = loginstate();?>
		<div class="header">
			<h1>Conway's Game of Life - Game</h1>
			<h3>Web Programing - Project 3</h3>
		</div>

		<div class="websitelinks">
			<a href="#">Link To Our Websites</a>
			<a href="#">Link To Our Websites</a>
			<a href="#">Link To Our Websites</a>
			<a href="#">Link To Our Websites</a>
			<a href="#">Link To Our Websites</a>
		</div>

		<div class="row">
			<div class="column side">
				<h2><?=$ret[4]?></h2>
				<p>
					<a href="<?=$ret[3]?>"><?=$ret[1]?></a></br>
					<a href="<?=$ret[2]?>"><?=$ret[0]?></a></br>
				</p>
			</div>

			<div class="column middle">
				<h2>Main Game</h2>

				<!--Row 1-->
				<section>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
				</section>
				<!--Row 2-->
				<section>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
				</section>
				<!--Row 3-->
				<section>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
				</section>
				<!--Row 4-->
				<section>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
				</section>
				<!--Row 5-->
				<section>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
				</section>
				<!--Row 6-->
				<section>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
				</section>
				<!--Row 7-->
				<section>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
				</section>
				<!--Row 9-->
				<section>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
				</section>
				<!--Row 9-->
				<section>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
				</section>
				<!--Row 10-->
				<section>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
					<div class="grid"></div>
				</section>
			</div>

			<div class="column side">
				<!--<h2>Play Controls</h2>
    <p><select name = "pattern" id = "pattern">
        <option value = "block">Block</option>
        <option value = "boat">Boat</option>
        <option value = "loaf">Loaf</option>
        <option value = "beehive">Beehive</option>
        <option value = "blinker">Blinker</option>
        <option value = "beacon">Beacon</option>
        <option value = "toad">Toad</option>
        <option value = "pulsar">Pulsar</option>
        <option value = "glider">Glider</option>
        <option value = "lwss">Lightweight Spaceship</option>
        <option value = "ggg">Gosper Glider Gun</option>
    </select><br />
    <button id = 'start'>START</button><br />
    <button id = "stop">STOP</button><br />
    <button id = "next">INCREMENT 1 GENERATION</button><br />
    <button id = "nextall">INCREMENT 23 GENERATIONS</button><br />
    <button id = "reset">RESET GAME</button><br /></p> -->
			</div>
		</div>

		<div class="footer">
			<h2>Play Controls</h2>
			<p>
				<select name="pattern" id="pattern">
					<option value="block">Block</option>
					<option value="boat">Boat</option>
					<option value="loaf">Loaf</option>
					<option value="beehive">Beehive</option>
					<option value="blinker">Blinker</option>
					<option value="beacon">Beacon</option>
					<option value="toad">Toad</option>
					<option value="pulsar">Pulsar</option>
					<option value="glider">Glider</option>
					<option value="lwss">Lightweight Spaceship</option>
					<option value="ggg">Gosper Glider Gun</option></select
				><br />
				<button id="start">START</button><br />
				<button id="stop">STOP</button><br />
				<button id="next">INCREMENT 1 GENERATION</button><br />
				<button id="nextall">INCREMENT 23 GENERATIONS</button><br />
				<button id="reset">RESET GAME</button><br />
			</p>
		</div>
	</body>

	<?php
    function loginstate(){
    $logins = false;
	$user = $_COOKIE['user'];
    if(isset($_COOKIE['user']))
      if(!empty($_COOKIE['user']))
        $logins = true;
		$user = $_COOKIE['user'];
     if(!$logins){
           $array = array("Sign Up", "Login","signup.php","login.php","Please Log in");
     }else{
           $array = array("Play", "Log out", "home.php", "logout.php","Welcome Back");
     } 
     return $array;
    }
	?>
</html>
