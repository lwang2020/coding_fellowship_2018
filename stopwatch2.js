function Stopwatch(elem) {
	//Make a function to keep updating the time.
	var time = 0; //current time on the stopwatch (in milliseconds)
	var interval; //an interval, where at each interval it will keep running the "update" function
	var offset; //calculates how much time as passed
	function update(){
		if (this.isOn){
			time += delta(); //adds the "delta" value to the "time" value
		}
		var formattedTime = timeFormatter(time);
		elem.textContent = formattedTime;
	} 
	function delta(){
		var now = Date.now();
		var timePassed = now - offset;
		offset = now;
		return timePassed;
	} //calc how much time has passes

	function timeFormatter(timeInMilliseconds){
		var time = new Date(timeInMilliseconds);
		var minutes = time.getMinutes().toString();
		var seconds = time.getSeconds().toString();
		var milliseconds = time.getMilliseconds().toString();


if (minutes.length < 2){
	minutes = '0' + minutes;
}

if (seconds.length < 2){
	seconds = '0' + seconds;
}

while (milliseconds.length < 3) {
	milliseconds = '0' + milliseconds;
}

return minutes + ' : ' + seconds + ' . ' + milliseconds;

} //makes time look nice, not just in milliseconds

	this.isOn = false; //checks if timer is running

	this.start = function(){
		if (!this.isOn){
			interval = setInterval(update.bind(this), 10);
			offset = Date.now(); //this represents the time right NOW
			this.isOn = true;
		}
	};

	this.stop = function(){
		if (this.isOn){
			clearInterval(interval);
			interval = null;
			this.isOn = false;
		}
	};

	this.reset = function(){
		if (!time.isOn) {
			time = 0;
			update();
		}
	};

	}
