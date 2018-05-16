<?php
	system( 'gpio mode 1 out' );
	system( 'gpio mode 4 out' );
	system( 'gpio mode 5 out' );
	system( 'gpio mode 7 out' );
	system( 'gpio mode 0 out' );
	system( 'gpio mode 3 out' );
	system( 'gpio write 7 1' );
	system( 'gpio write 1 1' );	
	$q = $_REQUEST["name"];
	if ( $q == rfs ) {
		system( 'gpio write 4 1' );
		system( 'gpio write 5 0' );
	}
	if ( $q == lfs ) {
		system( 'gpio write 0 0' );
		system( 'gpio write 3 1' );
	}
	if ( $q == rbs ) {
		system( 'gpio write 4 0' );
		system( 'gpio write 5 1' );
	}
	if ( $q == lbs ) {
		system( 'gpio write 0 1' );
		system( 'gpio write 3 0' );
	}
	if ( $q == lfe ) {
		system( 'gpio write 4 0' );
		system( 'gpio write 5 0' );
		system( 'gpio write 0 0' );
		system( 'gpio write 3 0' );
	}
	if ( $q == rfe ) {
		system( 'gpio write 4 0' );
		system( 'gpio write 5 0' );
		system( 'gpio write 0 0' );
		system( 'gpio write 3 0' );
	}
	if ( $q == lbe ) {
		system( 'gpio write 4 0' );
		system( 'gpio write 5 0' );
		system( 'gpio write 0 0' );
		system( 'gpio write 3 0' );
	}
	if ( $q == rbe ) {
		system( 'gpio write 4 0' );
		system( 'gpio write 5 0' );
		system( 'gpio write 0 0' );
		system( 'gpio write 3 0' );
	}
?>