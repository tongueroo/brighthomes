// note that this uses the .bind('load') on the window object, rather than $(document).ready() 
// because .ready() fires before the images have loaded, but we need to fire *after* because
// our code relies on the dimensions of the images already in place.
$(window).bind('load', function () {
  $('img.fade').cross();

  // highlight the news as the starting element
  var starting = $('div.menu ul li.news a');
  crossfade(starting, true);

  // What we want:
	// on hover
	// 1. swap a background for img
	// 2. reveal crossfade
	// on unhover
	// 3. conceal crossfade
	// 4. swap img for background
  // NOTE: all logic is handle by the on hover, it's simplier.  step 3 and 4 get called on the none hovered
  // elements.
  //
  // the markup created by the cross plugin:
  // <span style="position: relative;">
  // 	<img src="images/menu_ourwork-bright.jpg" style="display: inline;"/>
  // 	<img alt="About" style="position: absolute; left: 0px; top: -738px; opacity: 1; display: block;" src="images/menu_ourwork-dark.jpg" class="fade"/>
  // </span>
	var SLIDE_DURATION = 1000;
	var FADE_DURATION = 2000;
	
	function crossfade(target, snap) {
	  var link = $(target);
    link.css({'margin-right': '-2000px'}).hide();
    
    console.log("link %o", link);

	  var slider_span = link.next();
    var dark = slider_span.children().eq(1);
    var bright = slider_span.children().eq(0);
    
    console.log("slider_span %o", slider_span);
    console.log("dark %o", dark);
    console.log("bright %o", bright);
	  
    // wrap_div.css({'width': '680px'});
    dark.css({'margin-left': '0'}); // position crossfade element in view
    bright.css({'margin-left': '0'}); // position crossfade element in view
    dark.css({'width': '680px'}); // position crossfade element in view
    bright.css({'width': '680px'}); // position crossfade element in view

    
    dark.css({'opacity': 1});
    
    if (snap) {
      dark.css({'opacity': 0});
    } else {
      dark.stop().animate({
          opacity: 0
      }, FADE_DURATION);
    }
	}

  function grow(target) {
    var link = $(target);
    link.stop().animate(
      {width: "680px"}, 
      { 
        duration: SLIDE_DURATION, 
        easing:"easeOutQuad", 
        complete: function() { crossfade(target); } 
      }
    );
	};
	
	function shrink(target) {
	  var link = $(target);
	  var slider_span = link.next();
    var dark = slider_span.children().eq(1);
    var bright = slider_span.children().eq(0);
    
    dark.css({'width': '99px'}); // position crossfade element in view
    bright.css({'width': '99px'}); // position crossfade element in view
    dark.css({'margin-left': '-1000px'}); // hide crossfade element from view
    bright.css({'margin-left': '-1000px'}); // hide crossfade element from view
    link.show().css({'margin-right': '0'});
	  
    link.stop().animate(
      {width: "99px"}, 
      {duration: SLIDE_DURATION, easing:"easeOutQuad"}
    );
	}
	
  // find the elements to be eased and hook the hover event
  $('div.menu ul li a').hover(function() {
    grow(this);
    
    var li = $(this).parent();
    var neighbors = li.siblings().find("a");
    $.each(neighbors, function(idx, link) {
      shrink(link);
    });
  });

	// because the links get hidden we need to assign an onclick handler to the li containers as a workaround
	$('div.menu ul li').click(function() {
		var href = $(this).find('a').attr('href');
		window.location.href = href;
	});
});
