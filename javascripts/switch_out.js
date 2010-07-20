$(function() {
	$('#Image6')
		.mouseover(function() {
			$('#rightselection').css("background-image", 'url("http://www.emm2.com/client/brt/images/featured_falls.png")');
		})
		.mouseout(function() {
			$('#rightselection').css("background-image", 'url("http://www.emm2.com/client/brt/images/featuredbts.png")');
		});
});
