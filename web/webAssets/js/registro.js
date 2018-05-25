$(document).ready(function(){

	var myVar;

	function animationAvion() {
		myVar = setTimeout(animActive, 3000);
	}
	
	function animActive() {
		$(".avion").addClass("avion-anim");
	}

	animationAvion();

});
$( document ).ready(function() {
    console.log( "ready!" );
});