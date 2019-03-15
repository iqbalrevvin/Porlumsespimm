$(document).ready(function() {

    var flag = 0;
    $.ajax({
        type: "GET",
        url: "Model/Beranda/viewAlumni.php",
        data: {
            'offset': 0,
            'limit': 8
        },
        success: function(data) {
            $('#viewAlumni').append(data);
            flag += 8;
        }
    });

    $(window).scroll(function() {
        if ($(window).scrollTop() >= $(document).height() - $(window).height()) {
        	$("#loadScroll").show().html("<b>Memuat Data</b> <img src='Assets/images/loading.gif' width='150' height='25' >");
            $.ajax({
                type: "GET",
                url: "Model/Beranda/viewAlumni.php",
                data: {
                    'offset': flag,
                    'limit': 8
                },
                success: function(data) {
                    $("#loadScroll").hide();
                    $('#viewAlumni').append(data);
                    flag += 8;
                }
            });
        }
    });


});