$(document).ready(function(){
	$("#link").keypress(function(){
		$("#emptyLinkWarning").hide();
    	$("#linkFormGroup").removeClass("has-error");
	});

	$("#linkGenerate").click(function(){
    	var link = $("#link").val().trim();
    	if(link == '' || link.length == 0) {
    		$("#emptyLinkWarning").show();
    		$("#linkFormGroup").addClass("has-error");
    	} else {
    		var keyInput = '';
    		var categoryInput = 'link';
    		var linkInput = link;
    		$.get("run.php", function(data, status){
    			keyInput = data;
    			
    			$.post("process.php",
				{
				    key: keyInput,
				    category: categoryInput,
				    file: linkInput
				},
				function(data, status){
					var content = data;
				    $("#linkQrCodeContent").html(content);
                    $("#link").val('');
				});
    		});
    	}
  	});

    $("#linkReset").click(function(){
        $("#link").val('');
        $("#linkQrCodeContent").empty();
    });
});