


$(function(){
    var $el, leftPos, newWidth,
        $mainNav2 = $("#example-two");
    
    $mainNav2.append("<li id='magic-line-two'></li>");
    
    var $magicLineTwo = $("#magic-line-two");
    $magicLineTwo
        .width($(".current_page_item_two").width())
        .height($mainNav2.height())
        .css("left", $(".current_page_item_two a").position().left)
        .data("origLeft", $(".current_page_item_two a").position().left)
        .data("origWidth", $magicLineTwo.width())
        .data("origColor", $(".current_page_item_two a").attr("rel"));

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
    highlight(".current_page_item_two a");
    
});