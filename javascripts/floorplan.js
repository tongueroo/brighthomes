// stub out console if its unavailable, so can debug in firefox and not crash IE
if(!(typeof console == 'object')){
  console = {
    log: function(){},
    dir: function(){},
    debug: function(){},
    warn: function(){},
    error: function(){},
    info: function(){}
  };
};

$(function() {
  console.log("sss");
  
  $('.make').click(function(event) {
    var room_id = $(this).attr('rel');
        room_class = room_id.match(/(\w+)\d/)[1]; // grab the room_class: bedroom or loft
    console.log("room_id %o", room_id);
    console.log("room_class %o", room_class);
    $("."+room_class).hide(); // hide all rooms of the 'bedroom' or 'loft' class
    $("#"+room_id).show();    // only show one of the rooms
    console.log("done");
    event.preventDefault();
  });
  
  $('#make-floor1').click(function(event){
    console.log("make-floor1 clicked %o", this);
    $('.floor1-options').show();
    $('.floor2-options').hide();
    event.preventDefault();
  });
  $('#make-floor2').click(function(event){
    console.log("make-floor2 clicked %o", this);
    $('.floor1-options').hide();
    $('.floor2-options').show();
    event.preventDefault();
  });
  
  $('.loft').click(function(event) {
    var el = $(this);
    if (el.hasClass('checked'))
      el.removeClass('checked');
    else
      el.addClass('checked');
    $('#option_floor2-loft').toggle();
  });
  
  //  for debugging
  $('.floor1-options').hide();
  $('.floor2-options').show();
  $('#floor1').hide();
  $('#floor2').show();
});