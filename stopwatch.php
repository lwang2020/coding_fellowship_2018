<script src="/include/jquery.js"></script>
<link rel='stylesheet' href='maindesign.css' />

<script type = 'text/javascript'>

	clear = setTimeout( "stopWatch( )", 1000 ); }



var clearState;


//This function just organizes the clock to make it add up the seconds in the right way.
var seconds = 0, minutes = 0, hours = 0;
var secs, mins, gethours ;
function startWatch( ) {
	/* check if seconds is equal to 60 and add a +1 to minutes, and set seconds to 0 */
	if ( seconds === 60 ) { seconds = 0; minutes = minutes + 1; }
	/* you use the javascript tenary operator to format how the minutes should look and add 0 to minutes if less than 10*/
	/* This says, "In the minutes column, if the minute is a single digit, then put a 0 in front of it (like 06) and it'll look like 06:...
	otherwise just write the minutes, and have it look like this example( 11: )"*/
	mins = ( minutes < 10 ) ? ( '0' + minutes + ': ' ) : ( minutes + ': ' );
	/* check if minutes is equal to 60 and add a +1 to hours set minutes to 0 */
	if ( minutes === 60 ) { minutes = 0; hours = hours + 1; }
	gethours = ( hours < 10 ) ? ( '0' + hours + ': ' ) : ( hours + ': ' );
	secs = ( seconds < 10 ) ? ( '0' + seconds ) : ( seconds );
}

// Display the Stopwatch!
var clearTime;

var x = document.getElementById("timer");
x.innerHTML = 'Time: ' + gethours + mins + secs;
	/* call the seconds counter after displaying the stop watch and increment seconds by +1 to keep it counting */
seconds++;
	/* call the setTimeout( ) to keep the stop watch alive ! */
clearTime = setTimeout( "startWatch( )", 1000 );
	//

 //create a function to start the stop watch
startTime(){
/* check if seconds, minutes, and hours are equal to zero and start the stop watch */
 if ( seconds === 0 && minutes === 0 && hours === 0 ) {
	  /* hide the fulltime when the stop watch is running */
		var fulltime = document.getElementById( "fulltime" );
		fulltime.style.display = "none";
		/* hide the start button if the stop watch is running */
		this.style.display = "none";
		startWatch();
	}
	/*	if (startTime()){  // startTime() /* you need to bind the startTime( ) function to any event type to keep the stop watch alive !
			window.addEventListener( 'load', function () {
			var start = document .getElementById("start");
			start.addEventListener( 'click', startTime );
			}
		}
	*/
}





//create a function to stop the time
function stopTime(){
/* check if seconds, minutes and hours are not equal to 0 */
	if ( seconds !== 0 || minutes !== 0 || hours !== 0 ) {
/* display the full time before reseting the stop watch */
		var fulltime = document .getElementById( "fulltime" );
//display the full time
		fulltime.style.display = "block";
		var time = gethours + mins + secs;
		fulltime.innerHTML = 'Fulltime: ' + time;
// reset the stop watch
		seconds = 0; minutes = 0; hours = 0;
		secs = '0' + seconds; mins = '0' + minutes + ': '; gethours = '0' + hours + ': ';
/* display the stopwatch after it's been stopped */
		var x = document.getElementById ("timer");
		var stopTime = gethours + mins + secs;
		x.innerHTML = stopTime;
/* display all stop watch control buttons */
		var showStart = document.getElementById ('start');
		showStart.style.display = "inline-block";
		var showStop = document.getElementById ("stop");
		showStop.style.display = "inline-block";
	}
}

/* clear the stop watch using the setTimeout( ) return value 'clearTime' as ID
clearTimeout('clearTime'){
/* you need to call the stopTime( ) function to terminate the stop watch
	window.addEventListener(
		'load',
		function Reset(){ var stop = document.getElementById ("stop");
stop.addEventListener( 'click', stopTime ); // stopwatch.js end
}
*/
</script>








<html lang="en">
	<head>
		<title> Stop Watch </title>
		<style text="text/css"> </style>
		<script type="text/javascript"> </script>
	</head>
	<body>
		<section id="stopWatch">
			<p id="timer"> Time : 00:00:00 </p>
			<button id="start"> Start </button>
			<button id="stop"> Stop </button>
			<p id="fulltime"> </p>
		</section>
	</body>
</html>
