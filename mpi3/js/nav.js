$(function(){
    var $el, leftPos, newWidth,
        $nav = $("#nav");
    
    $nav.append("<li id='magic-line'></li>");
    
    var $menu_li, $menu_a, has_original;
    
    // has original item
    if ($(".current a").length > 0) {
      $menu_li = $(".current");
      $menu_a = $(".current a");
      has_original = true;
    }
    // since all the menu items are the same width, can use any of them to do the width calculations
    else {
      $menu_li = $('#nav li:first');
      $menu_a  = $('#nav li:first a');
    }
    
    var $magicLineTwo = $("#magic-line");
    $magicLineTwo
        .width($menu_li.width())
        .height($nav.height())
        .css("left", $menu_a.position().left)
        .data("origLeft", $menu_a.position().left)
        .data("origWidth", $magicLineTwo.width())
        .data("origColor", $menu_a.attr("rel"));

		function highlight(element) {
		  $el = $(element);
      leftPos = $el.position().left;
      newWidth = $el.parent().width();
      $magicLineTwo.stop().animate({
          left: leftPos,
          width: newWidth,
          backgroundColor: $el.attr("rel")
      });
		}
                
    $("#nav li").find("a").hover(function() {
      highlight(this);
    }, function() {
      if (has_original) {
        // go back go original hover
        $magicLineTwo.stop().animate({
            left: $magicLineTwo.data("origLeft"),
            width: $magicLineTwo.data("origWidth"),
            backgroundColor: $magicLineTwo.data("origColor")
        });    
      } 
      else {
        $magicLineTwo.hide();
      }
    });

    // preload the highlight based on the .current class
    if ($(".current a").length > 0)
      highlight(".current a");
    
});