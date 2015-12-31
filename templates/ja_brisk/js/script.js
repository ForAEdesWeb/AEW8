(function($){
//Check div system-message-container exist
$(document).ready(function(){
	if($("#system-message").children().length){
    $("#system-message-container").show();
    $("#system-message a.close").click(function(){
            setTimeout(function(){if(!$("#system-message").children().length) $("#system-message-container").hide();}, 100);
    });
  }else{
    $("#system-message-container").hide();
  }
});

})(jQuery);