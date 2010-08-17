$(document).ready(function(){

	$('.idealist.captionidea').hover(function(){
		$(".coveridea", this).stop().animate({left:'146px'},{queue:false,duration:200});
	}, function() {
		$(".coveridea", this).stop().animate({left:'0px'},{queue:false,duration:200});
	});
	
});

