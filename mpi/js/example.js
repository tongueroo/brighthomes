


$(function(){
    var $el, leftPos, newWidth,
        $mainNav2 = $("#example-two");
    
    $mainNav2.append("<li id='magic-line-two'></li>");
    
    var $menu_li, $menu_a, has_original;
    
    // has original item
    if ($(".current_page_item_two a").length > 0) {
      $menu_li = $(".current_page_item_two");
      $menu_a = $(".current_page_item_two a");
      has_original = true;
    }
    // since all the menu items are the same width, can use any of them to do the width calculations
    else {
      $menu_li = $('#example-two li:first');
      $menu_a  = $('#example-two li:first a');
    }
    
    var $magicLineTwo = $("#magic-line-two");
    $magicLineTwo
        .width($menu_li.width())
        .height($mainNav2.height())
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
                
    $("#example-two li").find("a").hover(function() {
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

    // preload the highlight based on the .current_page_item_two class
    if ($(".current_page_item_two a").length > 0)
      highlight(".current_page_item_two a");
    
});