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
<a href ='#' onclick='ToggleTheBox();'> Toggle the box </a>
<div class = 'TheBox' style=background-color:#ccc>
	This is the box.
</div>

<!--FADE IN STUFF-->
<a href = '#' onclick='Fade();'>Click Me </a>

<div class="FadeMeIn" style= "display:none;">
  FADE ME IN
</div>
