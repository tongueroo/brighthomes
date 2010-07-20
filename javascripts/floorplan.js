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
});