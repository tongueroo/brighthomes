$(document).ready(function(){
	$('.serviceslist.caption').hover(function(){
		$(".cover", this).stop().animate({top:'95px'},{queue:false,duration:160});
	}, function() {
		$(".cover", this).stop().animate({top:'255px'},{queue:false,duration:160});
	});
	
	$('.work.caption2').hover(function(){
		$(".coverall", this).stop().animate({top:'0px'},{queue:false,duration:160});
	}, function() {
		$(".coverall", this).stop().animate({top:'200px'},{queue:false,duration:160});
	});
});



