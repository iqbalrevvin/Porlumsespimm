$(document).ready(function(){
	var delay = (function(){
        var timer = 0;
        return function(callback, ms){
            clearTimeout (timer);
            timer = setTimeout(callback, ms);
        };
    })();


	$(".formPencarian").keyup(function(){
            $("#loadSearch").show().html("<b>Pencarian Data</b> <img src='Assets/images/loading.gif' width='150' height='25' >");
		$inputPencarian = $('#inputPencarian').val();
		if($inputPencarian==''){
			delay(function(){
           		$("#loadSearch").fadeOut();
				$("#resultSearch").fadeOut();
        	}, 750 );
		}else{
			$.ajax({
				type: "POST",
				url: "Model/Pencarian/pencarian.php",
				data: {
                    inputPencarian    	: $inputPencarian,
                    pencarian   		: 1,
                },
				cache: true,
				success: function(result){
					delay(function(){
           			 	$("#loadSearch").fadeOut();
						$("#resultSearch").html(result).show();
        			}, 750 );
					
				}
			});
		}

		return false;    
	});


});