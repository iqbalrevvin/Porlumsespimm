$(document).ready(function() {

    //NOTIF PASSWORD / USERNAME KOSONG
    function errorlogin() {
        $.toast({
            text: 'Nama Pengguna / Kata Sandi Tidak Boleh Kosong!',
            heading: 'Peringatan!',
            showHideTransition: 'slide',
            position: 'top-right',
            loaderBg: '#bf441d',
            icon: 'error',
            hideAfter: 3000,
            stack: 1
        });
    }


    $(document).on('click', '#submitAuthLogin', function() {
    	$("#loadLogin").show().html("<b>Memeriksa Informasi Masuk</b> <img src='Assets/images/loading.gif' width='150' height='25' >");
        if ($('#username').val() == "" || $('#password').val() == "") {
            errorlogin();
            $("#loadLogin").hide();
        } else {
        	var data = $('#formAuthLogin').serialize();
        	$.ajax({
        		type: 'POST',
        		url: 'Model/Auth/login.php',
        		data: data,
        		success: function(result){
        			$("#resultLogin").html(result);
        			$("#resultLogin").show();
        			$("#loadLogin").hide();
        		}
        	});
        }
    });



});