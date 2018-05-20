var speed = document.getElementById("speedstr").value;

function sendControlRequest( pkg ) {
	var xhr = new XMLHttpRequest();
    var params = 'name=' + encodeURIComponent( pkg );
    xhr.open("GET", 'control.php?' + params, true);
    xhr.send();
}

function sys_setspeed() {
	speed = document.getElementById("speedstr").value
	console.log( speed );
}

document.onkeydown = function( event ) {	
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
			sendControlRequest( "rbs" );e
		}
		if ( event.key == "c" ) {
			sendControlRequest( "lbs" );
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
