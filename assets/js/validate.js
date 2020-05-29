function validate() {
    var valid = true;
    	    
    $("#validation-info").hide();
	$("#validation-info").html();
    if($("#message").val() == "") {
        	$("#validation-info").show();
        	$("#validation-info").html("Text is required.");
        	valid = false;
    }
    return valid;
}
