<?php	
	$speed = 0.5;
	$q = $_REQUEST["name"];
	if ( $q == rfs ) {
		system( 'echo "23=' . $speed . '" > /dev/pi-blaster' );
		system( 'echo "24=0" > /dev/pi-blaster' );
	}
	if ( $q == lfs ) {
		system( 'echo "17=0" > /dev/pi-blaster' );
		system( 'echo "22=' . $speed . '" > /dev/pi-blaster' );
	}
	if ( $q == rbs ) {
		system( 'echo "23=0" > /dev/pi-blaster' );
		system( 'echo "24=' . $speed . '" > /dev/pi-blaster' );
	}
	if ( $q == lbs ) {
		system( 'echo "17=' . $speed . '" > /dev/pi-blaster' );
		system( 'echo "22=0" > /dev/pi-blaster' );
	}
	if ( $q == lfe ) {
		system( 'echo "23=0" > /dev/pi-blaster' );
		system( 'echo "24=0" > /dev/pi-blaster' );
		system( 'echo "17=0" > /dev/pi-blaster' );
		system( 'echo "22=0" > /dev/pi-blaster' );
	}
	if ( $q == rfe ) {
		system( 'echo "23=0" > /dev/pi-blaster' );
		system( 'echo "24=0" > /dev/pi-blaster' );
		system( 'echo "17=0" > /dev/pi-blaster' );
		system( 'echo "22=0" > /dev/pi-blaster' );
	}
	if ( $q == lbe ) {
		system( 'echo "23=0" > /dev/pi-blaster' );
		system( 'echo "24=0" > /dev/pi-blaster' );
		system( 'echo "17=0" > /dev/pi-blaster' );
		system( 'echo "22=0" > /dev/pi-blaster' );
	}
	if ( $q == rbe ) {
		system( 'echo "23=0" > /dev/pi-blaster' );
		system( 'echo "24=0" > /dev/pi-blaster' );
		system( 'echo "17=0" > /dev/pi-blaster' );
		system( 'echo "22=0" > /dev/pi-blaster' );
	}
?>