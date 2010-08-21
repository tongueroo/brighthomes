$(document).ready(function () {
	
	// find the elements to be eased and hook the hover event
	$('div.menu ul li a').hover(function() {
  
	  // if the element is currently being animated (to a easeOut)...
	  if ($(this).is(':animated')) {
	    $(this).stop().animate({width: "670px"}, {duration: 450, easing:"easeOutQuad"});
	  } else {
	    // ease in quickly
	    $(this).stop().animate({width: "670px"}, {duration: 400, easing:"easeOutQuad"});
	  }
	}, function () {
	  // on hovering out, ease the element out
	  if ($(this).is(':animated')) {
	    $(this).stop().animate({width: "99px"}, {duration: 400, easing:"easeInOutQuad"})
	  } else {
	    // ease out slowly
	    $(this).stop('animated:').animate({width: "99px"}, {duration: 450, easing:"easeInOutQuad"});
	  }
	});
	
	
	// EASING CODE
	// function callback(hovering) {
	// 	return function() {
	// 		console.log("%%% hovering1 %o", hovering);
	// 		var img_url;
	// 		$('.ease').each(function(idx, el) {
	// 			if (hovering.href == el.href) {
	// 				// brighten current element
	// 				$(this).removeClass('dark').addClass('bright');
	// 				// img_url = $(this).css('background-image').replace('-dark.jpg', '-bright.jpg');
	// 				// $(this).css("background-image", img_url);
	// 			} else {
	// 				// darken other elements
	// 				$(this).removeClass('light').addClass('dark');
	// 				// img_url = $(this).css('background-image').replace('-bright.jpg', '-dark.jpg');
	// 				// $(this).css("background-image", img_url);
	// 			}
	// 		});
	// 		console.log("%%% hovering %o", hovering);
	// 	}
	// }
	// 
	// // find the elements to be eased and hook the hover event
	// $('div.menu ul li a').hover(function() {
	//   // ease in quickly
	// 	var hovering = this; // hovering element
	// 	$('.ease').each(function(idx, el) {
	// 		if (hovering.href == el.href) {
	// 			// reveal the current hovering element
	// 		  $(this).stop().animate(
	// 				{width: "670px"}, 
	// 				{duration: 450, easing:"easeOutQuad", complete: callback(hovering)}
	// 			);
	// 		} else {
	// 			// conceal the other elements
	// 		  $(this).stop().animate(
	// 				{width: "99px"}, 
	// 				{duration: 450, easing:"easeInOutQuad", complete: callback(hovering)}
	// 			);
	// 		}
	// 	});
	// });
	
	
	
	// starting 
	// $('.news a').animate({width: "670px"}, {duration: 450, easing:"easeOutQuad"});
	console.log("test2");
	
	// FADE EFFECT CODE
	// $('.news a').css("background-image", "url(images/menu_ourworkb.jpg)");
});
