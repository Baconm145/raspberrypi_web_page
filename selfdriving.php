<?php
	$action = $_REQUEST["action"];
	if ( $action == start ) {
		$command =  '/home/pi/selfdriving/selfdriving/selfdriving' . ' > /dev/null 2>&1 & echo $!; ';
		$pid = exec( $command, $output );
		var_dump($pid);
	}
	if ( $action == stop ) {
		exec( 'kill $pid' );
	}
?>