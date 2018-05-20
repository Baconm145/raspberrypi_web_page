function sendControlRequest( pkg, speed ) {
	var xhr = new XMLHttpRequest();
    var params = 'name=' + encodeURIComponent( pkg ) + '&speed' + encodeURIComponent( pkg );
    xhr.open("GET", 'control.php?' + params, true);
    xhr.send();
}

var speed = document.getElementById('speedstr').value

function setspeed( inputSpeed ) {
	speed = inputSpeed;
	sendSpeedRequest( speed );
}

document.onkeydown = function( event ) {	
	//lfs = left side forward start
	//rfs = right side forward start
	//lbs = left side backward start
	//rbs = right side backward start
	if ( !event.repeat ) {
		if ( event.key == "w" ) {
			sendControlRequest( "lfs", speed );
			sendControlRequest( "rfs", speed );
			setspeed( 30 );
		}
		if ( event.key == "s" ) {
			sendControlRequest( "lbs" , speed );
			sendControlRequest( "rbs" , speed );
		}
		if ( event.key == "a" ) {
			sendControlRequest( "rfs" , speed );
		}
		if ( event.key == "d" ) {
			sendControlRequest( "lfs", speed );
		}
		if ( event.key == "z" ) {
			sendControlRequest( "rbs", speed );
		}
		if ( event.key == "c" ) {
			sendControlRequest( "lbs" , speed );
		}
	}
}

document.onkeyup = function( event ) {
	//lfe = left side forward end
	//rfe = right side forward end
	//lbe = left side backward end
	//rbe = right side backward end
	if ( event.key == "w" ) {
		sendControlRequest( "lfe" );
		sendControlRequest( "rfe" );
	}
	if ( event.key == "s" ) {
		sendControlRequest( "lbe" );
		sendControlRequest( "rbe" );
	}
	if ( event.key == "a" ) {
		sendControlRequest( "rfe" );
	}
	if ( event.key == "d" ) {
		sendControlRequest( "lfe" );
	}
	if ( event.key == "z" ) {
		sendControlRequest( "rbe" );
	}
	if ( event.key == "c" ) {
		sendControlRequest( "lbe" );
	}
}
