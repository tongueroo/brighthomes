$(document).ready(function(){
      //  Initialize Backgound Stretcher	   
	$(document).bgStretcher({
		images:  ['../images/MPI_movie01.swf'], imageWidth: 1080, imageHeight: 849
	});
	
	$('#toggleAnimation').click(function(){
       if($(this).val() == "Pause Animation"){
           $(this).val("Resume Animation");
           $(document).bgStretcher.pause();
       } else {
           $(this).val("Pause Animation");
           $(document).bgStretcher.play();
       }
	});
});

