function sendControlRequest( dir, speed ) {
	var xhr = new XMLHttpRequest();
    var params = 'name=' + encodeURIComponent( dir ) + '&speed=' + encodeURIComponent( speed );
    xhr.open("GET", 'control.php?' + params, true);
    xhr.send();
}

function sendSelfDrivingRequest( action ) {
	var xhr = new XMLHttpRequest();
	var params = 'action=' + encodeURIComponent( action ) ;
    xhr.open("GET", 'selfdriving.php?' + params, true);
    xhr.send();
}

var speed = 1.0;

function setspeed() {
	speed = document.getElementById('speedstr').value;
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
			sendControlRequest( "lbs", speed  );
			sendControlRequest( "rbs", speed  );
		}
		if ( event.key == "a" ) {
			sendControlRequest( "rfs", speed  );
		}
		if ( event.key == "d" ) {
			sendControlRequest( "lfs", speed  );
		}
		if ( event.key == "z" ) {
			sendControlRequest( "rbs", speed  );
		}
		if ( event.key == "c" ) {
			sendControlRequest( "lbs", speed  );
		}
	}
	if ( event.key == "r" ) {
		if ( speed < 1 ) {
			speed = speed + 0.1;
		}
	}
	if ( event.key == "f" ) {
		if ( speed > 0 ) {
			speed = speed - 0.1;
		}
	}
}

document.onkeyup = function( event ) {
	//lfe = left side forward end
	//rfe = right side forward end
	//lbe = left side backward end
	//rbe = right side backward end
	if ( event.key == "w" ) {
		sendControlRequest( "lfe", speed   );
		sendControlRequest( "rfe", speed   );
	}
	if ( event.key == "s" ) {
		sendControlRequest( "lbe", speed   );
		sendControlRequest( "rbe", speed   );
	}
	if ( event.key == "a" ) {
		sendControlRequest( "rfe", speed   );
	}
	if ( event.key == "d" ) {
		sendControlRequest( "lfe", speed   );
	}
	if ( event.key == "z" ) {
		sendControlRequest( "rbe", speed   );
	}
	if ( event.key == "c" ) {
		sendControlRequest( "lbe", speed   );
	}
}
