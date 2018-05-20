<?php
	system( 'gpio mode 1 out' );
	system( 'gpio mode 4 out' );
	system( 'gpio mode 5 out' );
	system( 'gpio mode 7 out' );
	system( 'gpio mode 0 out' );
	system( 'gpio mode 3 out' );
	system( 'gpio write 7 1' );
	system( 'gpio write 1 1' );
	if ( file_get_contents( './speed.txt' ) >= 0 and file_get_contents( './speed.txt' ) >= 1 ) {
		system( 'echo everything_good' );
	} else {
		file_put_contents( 'speed.txt', 1 );
	}
?>