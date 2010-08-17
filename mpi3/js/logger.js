// // stub out console if its unavailable
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
