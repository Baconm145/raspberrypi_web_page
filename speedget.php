<?php
	$speed = $_REQUEST["speed"];
	file_put_contents( 'speed.txt', $speed );
?>