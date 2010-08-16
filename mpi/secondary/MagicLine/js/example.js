


$(function(){
    var $el, leftPos, newWidth,
        $mainNav2 = $("#example-two");
    
    $mainNav2.append("<li id='magic-line-two'></li>");
    
    // since all the menu items are the same width, can use any of them to do the width calculations
    var $any_menu_li = $('#example-two li:first');
    var $any_menu_a  = $('#example-two li:first a');
    
    var $magicLineTwo = $("#magic-line-two");
    $magicLineTwo
        .width($any_menu_li.width())
        .height($mainNav2.height())
        .css("left", $any_menu_a.position().left)
        .data("origLeft", $any_menu_a.position().left)
        .data("origWidth", $magicLineTwo.width())
        .data("origColor", $any_menu_a.attr("rel"));

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
        $magicLineTwo.stop().animate({
            left: $magicLineTwo.data("origLeft"),
            width: $magicLineTwo.data("origWidth"),
            backgroundColor: $magicLineTwo.data("origColor")
        });    
    });

    // preload the highlight based on the .current_page_item_two class
    if ($(".current_page_item_two a").length > 0)
      highlight(".current_page_item_two a");
    
});