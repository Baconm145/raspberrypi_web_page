function sendControlRequest( pkg ) {
	var xhr = new XMLHttpRequest();
    var params = 'name=' + encodeURIComponent( pkg );
    xhr.open("GET", 'control.php?' + params, true);
    xhr.send();
}

document.onkeydown = function( event ) {
	console.log( event.key );
	//lfs = left side forward start
	//rfs = right side forward start
	//lbs = left side backward start
	//rbs = right side backward start
	if ( !event.repeat ) {
		if ( event.key == "w" ) {
			sendControlRequest( "lfs" );
			sendControlRequest( "rfs" );
		}
		if ( event.key == "s" ) {
			sendControlRequest( "lbs" );
			sendControlRequest( "rbs" );
		}
		if ( event.key == "a" ) {
			sendControlRequest( "rfs" );
		}
		if ( event.key == "d" ) {
			sendControlRequest( "lfs" );
		}
		if ( event.key == "z" ) {
			sendControlRequest( "rbs" );
		}
		if ( event.key == "c" ) {
			sendControlRequest( "lbs" );
		}
	}
}

document.onkeyup = function( event ) {
	console.log( event );
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
