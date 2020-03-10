<!DOCTYPE html>
<html>
<head>
	<title>and i-OOP</title>
</head>
<body>
	<?php

	require 'Superhero.php';
	require 'Avenger.php';


	$spiderman =  new Superhero('Spider-Man', 'Male', 'Spiderfriends', 'With great power comes great responsibility!');
	$spiderman->sayOneliner();
	print_r('<pre>'. $spiderman . '</pre>');


	$thor = new Avenger('Thor', 'Male', 'For Asgard!');
	$thor->sayOneliner();

	print_r('<pre>' . $thor . '</pre>');

	?>
</body>
</html>