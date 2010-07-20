$(function() {
	$('#Image6')
		.mouseover(function() {
			$('#rightselection').css("background-image", 'url("../images/featured_falls.png")');
		})
		.mouseout(function() {
			$('#rightselection').css("background-image", 'url("../images/featuredbts.png")');
		});
	$('#Image7')
		.mouseover(function() {
			$('#rightselection').css("background-image", 'url("../images/rightcol.png")');
		});
	$('#Image8')
		.mouseover(function() {
			$('#rightselection').css("background-image", 'url("../images/cbt_falls.png")');
		});
	$('#Image9')
		.mouseover(function() {
			$('#rightselection').css("background-image", 'url("../images/cbt_tbellab.png")');
		});
});
