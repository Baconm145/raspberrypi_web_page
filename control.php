<?php
	$q = $_REQUEST["name"];
	if ( $q >= 0 and $q <= 1 ) {
		$speed = $q;
	}
	if ( $q == rfs ) {
		system( 'echo "4='$speed'" > /dev/pi-blaster' );
		system( 'echo "5=0" > /dev/pi-blaster' );
	}
	if ( $q == lfs ) {
		system( 'echo "0=0" > /dev/pi-blaster' );
		system( 'echo "3='$speed'" > /dev/pi-blaster' );
	}
	if ( $q == rbs ) {
		system( 'echo "4=0" > /dev/pi-blaster' );
		system( 'echo "5='$speed'" > /dev/pi-blaster' );
	}
	if ( $q == lbs ) {
		system( 'echo "0='$speed'" > /dev/pi-blaster' );
		system( 'echo "3=0" > /dev/pi-blaster' );
	}
	if ( $q == lfe ) {
		system( 'echo "4=0" > /dev/pi-blaster' );
		system( 'echo "5=0" > /dev/pi-blaster' );
		system( 'echo "0=0" > /dev/pi-blaster' );
		system( 'echo "3=0" > /dev/pi-blaster' );
	}
	if ( $q == rfe ) {
		system( 'echo "4=0" > /dev/pi-blaster' );
		system( 'echo "5=0" > /dev/pi-blaster' );
		system( 'echo "0=0" > /dev/pi-blaster' );
		system( 'echo "3=0" > /dev/pi-blaster' );
	}
	if ( $q == lbe ) {
		system( 'echo "4=0" > /dev/pi-blaster' );
		system( 'echo "5=0" > /dev/pi-blaster' );
		system( 'echo "0=0" > /dev/pi-blaster' );
		system( 'echo "3=0" > /dev/pi-blaster' );
	}
	if ( $q == rbe ) {
		system( 'echo "4=0" > /dev/pi-blaster' );
		system( 'echo "5=0" > /dev/pi-blaster' );
		system( 'echo "0=0" > /dev/pi-blaster' );
		system( 'echo "3=0" > /dev/pi-blaster' );
	}
?>