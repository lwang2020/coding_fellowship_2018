<script src="/include/jquery.js"></script>
<link rel='stylesheet' href='maindesign.css' />

<script type = 'text/javascript'>


function ToggleTheBox(){
	$('.TheBox').toggle();
}

function Fade(){
	$('.FadeMeIn').fadeIn();
}


</script>

<!--TOGGLE BOX BUTTONS-->

	<a href ='#' onclick='ToggleTheBox();'> Toooooooggle the box </a>
	<div class = 'TheBox' style=background-color:#ccc>
		This is the box.
	</div>

<br><br>

	<!--FADE IN STUFF-->
	<a href = '#' onclick='Fade();'>Click Me 4 a surprise </a>
	<div class="FadeMeIn" style= "display:none;">
	  FADE ME IN
	</div>

<br><br>
	<!--STOPWATCH-->
	<div class='stopwatch'>
		<p>Stopwatch</p>
		<h1 class = "timer"> 00 : 00 . 000</h1>
		<button class="toggle">Start</button>
		<button class="reset">Reset</button>
	</div>
