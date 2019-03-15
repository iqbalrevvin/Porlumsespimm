$(document).ready(function() {

    //EDIT NAMA TAMPILAN
    $(document).on('click', '#btnEditNamaTampilan', function() {
        $("#loadEditNamaTampilan").show().html("<b>Memeriksa & Mengirim Paramater</b> <img src='Assets/images/loading.gif' width='150' height='25' >");
        $id = $(this).val();
        if ($('#editNamaTampilan').val() == "") {
            swal("MOHON MAAF", "Nama Tampilan Tidak Boleh Kosong", "warning");
            $("#loadEditNamaTampilan").hide();
        } else {
            $editNamaTampilan = $('#editNamaTampilan').val();
            $.ajax({
                type: "POST",
                url: "Model/Profil/editInformasiAkun.php",
                data: {
                    editNamaTampilan    : $editNamaTampilan,
                    id                  : $id,
                    updateNamaTampilan  : 1,
                },
                success: function(response) {
                    swal({
                        title: "NAMA TAMPILAN DIPERBARUI",
                        text: "Nama Tampilan Berhasil Diperbarui!",
                        type: "success",
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true,
                    }, function() {
                        setTimeout(function() {
                            refresh();
                        }, 1500);
                    });
                    $("#loadEditNamaTampilan").hide();
                }

            });
        }
    });

    //EDIT PASSWORD
    $(document).on('click', '#btnEditPassword', function() {
        $id = $(this).val();
        $password = $('#password').val();
        if ($('#passowrdOld').val() == '' || $('#password').val() == '' || $('#password2').val() == '') {
            swal("MOHON MAAF", "Paramater Harus Terisi Semua!", "warning");
            $("#loadEditPassword").hide();
        } else if ($('#valPassOld').val() != $('#passowrdOld').val()) {
            swal("MOHON MAAF", "Password Lama Tidak Sesuai Dengan Password Saat Ini", "warning");
            $("#loadEditPassword").hide();
        } else if ($('#password').val() != $('#password2').val()) {
            swal("MOHON MAAF", "Konfirmasi Password Tidak Sesuai!", "warning");
            $("#loadEditPassword").hide();
        } else {
            swal({
                title: "KONFIRMASI TINDAKAN!",
                text: "Password Pengguna Akan Diperbarui, Yakin Dengan Tindakan Ini?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, Lanjutkan!",
                cancelButtonText: "Tidak, Kembali!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    $("#loadEditPassword").show().html("<b>Memeriksa & Mengirim Paramater</b> <img src='Assets/images/loading.gif' width='150' height='25' >");

                    $.ajax({
                        type: "POST",
                        url: "Model/Profil/editInformasiAkun.php",
                        data: {
                            id: $id,
                            password: $password,
                            updatePassword: 1,
                        },
                        success: function() {
                            swal({
                                title: "PASSWORD DIPERBARUI",
                                text: "Password Berhasil Diperbarui!",
                                type: "success",
                                closeOnConfirm: false,
                                showLoaderOnConfirm: true,
                            }, function() {
                                setTimeout(function() {
                                    refresh();
                                }, 1500);
                            });
                        }
                    });
                } else {
                    swal("Cancelled", "Tindakan di Batalkan :)", "error");
                    $("#loadEditPassword").hide();
                }
            });
        }
    });

    //EDIT LEVEL HAK AKSES
    $(document).on('click', '#btnEditLevel', function() {
        $id = $(this).val();
        $level = $('#level').val();
        if ($('#level').val() == '') {
            swal("MOHON MAAF", "Pilih Terlebih Dahulu Hak Akses", "warning");
        } else {
            swal({
                title: "KONFIRMASI TINDAKAN!",
                text: "Hak Akses Pengguna akan Diubah, Yakin Dengan Tindakan Ini?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, Lanjutkan!",
                cancelButtonText: "Tidak, Kembali!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    $("#loadLevel").show().html("<b>Memeriksa & Mengirim Paramater</b> <img src='Assets/images/loading.gif' width='150' height='25' >");
                    $.ajax({
                        type: "POST",
                        url: "Model/Profil/editInformasiAkun.php",
                        data: {
                            id: $id,
                            level: $level,
                            updateLevel: 1,
                        },
                        success: function() {
                            swal({
                                title: "HAK AKSES DIPERBARUI",
                                text: "Level Hak Akses Berhasil Diperbarui!",
                                type: "success",
                                closeOnConfirm: false,
                                showLoaderOnConfirm: true,
                            }, function() {
                                setTimeout(function() {
                                    refresh();
                                }, 1500);
                            });
                        }
                    });
                } else {
                    swal("Cancelled", "Tindakan di Batalkan :)", "error");
                    $("#loadLevel").hide();
                }
            });
        }
    });

    //EDIT STATUS AKUN
    $(document).on('click', '#btnEditStatus', function() {
        $id = $(this).val();
        $status = $('#statusAkun').val();
        if ($('#statusAkun').val() == '') {
            swal("MOHON MAAF", "Pilih Terlebih Dahulu Tipe Status", "warning");
        } else {
            swal({
                title: "KONFIRMASI TINDAKAN",
                text: "Status Akun Pengguna Akan Diubah, Yakin Dengan Tindakan Ini?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, Lanjutkan!",
                cancelButtonText: "Tidak, Kembali!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    $("#loadStatus").show().html("<b>Memeriksa & Mengirim Paramater</b> <img src='Assets/images/loading.gif' width='150' height='25' >");
                    $.ajax({
                        type: "POST",
                        url: "Model/Profil/editInformasiAkun.php",
                        data: {
                            id: $id,
                            status: $status,
                            updateStatus: 1,
                        },
                        success: function() {
                            swal({
                                title: "STATUS DIPERBARUI",
                                text: "Status Akun Pengguna Berhasil Diperbarui!",
                                type: "success",
                                closeOnConfirm: false,
                                showLoaderOnConfirm: true,
                            }, function() {
                                setTimeout(function() {
                                    refresh();
                                }, 1500);
                            });
                        }
                    });
                } else {
                    swal("Cancelled", "Tindakan di Batalkan :)", "error");
                    $("#loadStatus").hide();
                }
            });
        }
    });

    //EDIT USERNAME
    $(document).on('click', '#btnEditUsername', function() {
        $id = $(this).val();
        $username = $('#username').val();
        if ($('#username').val() == '') {
            swal("MOHON MAAF", "Inputan Nama Pengguna Tidak Boleh Kosong", "warning");
        } else {
            swal({
                title: "KONFIRMASI TINDAKAN!",
                text: "Nama Pengguna Akun Akan Diperbarui, Yakin Dengan Tindakan Ini?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, Lanjutkan!",
                cancelButtonText: "Tidak, Kembali!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    $("#loadEditUsername").show().html("<b>Memeriksa & Mengirim Paramater</b> <img src='Assets/images/loading.gif' width='150' height='25' >");
                    $.ajax({
                        type: "POST",
                        url: "Model/Profil/editInformasiAkun.php",
                        data: {
                            id: $id,
                            username: $username,
                            updateUsername: 1,
                        },
                        success: function(result) {
                            $("#loadEditUsername").html(result);
                        }
                    });
                } else {
                    swal("Cancelled", "Tindakan di Batalkan :)", "error");
                    $("#loadEditUsername").hide();
                }
            });
        }
    });

    //RESET AKUN
    $(document).on('click', '#btnResetAkun', function() {
        $id = $(this).val();
        swal({
            title: "KONFIRMASI TINDAKAN!",
            text: "Akun Pengguna Akan Direset, Yakin Dengan Tindakan Ini?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Lanjutkan!",
            cancelButtonText: "Tidak, Kembali!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function(isConfirm) {
            if (isConfirm) {
                $("#loadResetAkun").show().html("<b>Mereset Akun</b> <img src='Assets/images/loading.gif' width='150' height='25' >");
                $.ajax({
                    type: "POST",
                    url: "Model/Profil/editInformasiAkun.php",
                    data: {
                        id          : $id,
                        resetAkun   : 1,
                    },
                    success: function(result) {
                        $("#resultResetAkun").html(result);
                    }
                });
            } else {
                swal("Cancelled", "Tindakan di Batalkan :)", "error");
                $("#loadResetAkun").hide();
            }
        });

    });


    //EDIT DATA UTAMA
    $(document).on('click', '#btnEditDataUtama', function(){
        $("#loadEditDataUtama").show().html("<b>Memeriksa & Mengirim Paramater</b> <img src='Assets/images/loading.gif' width='150' height='25' >");
        if ($('#namaLengkap').val() == "" || $('#noIdnt').val() == "" || $('#noInduk').val() == "" || $('#jk').val() == "") {
            errorInput();
            $("#loadEditDataUtama").hide();
        }else{
            var data = $('#formEditDataUtama').serialize();
            $.ajax({
                type: 'POST',
                url: 'Model/Profil/editDataUtama.php',
                data: data,
                success: function(result){
                    $("#resultEditDataUtama").html(result);
                    $("#resultEditDataUtama").show();
                    $("#loadEditDataUtama").hide();
                    $('#modal-editDataUtama').modal('hide');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                }
            });
        }
    });

    //EDIT BIODATA
    $(document).on('click', '#btnEditBiodata', function(){
        $id = $(this).val();
        $("#loadEditBiodata").show().html("<b>Memeriksa & Mengirim Paramater</b> <img src='Assets/images/loading.gif' width='150' height='25' >");
        if ($('#namaPanggilan').val() == ""){
            errorInput();
            $("#loadEditBiodata").hide();
        }else{
            var data = $('#formEditBiodata').serialize();
            $.ajax({
                type: 'POST',
                url: 'Model/Profil/editBiodata.php',
                data: data,
                success: function(result){
                    $("#resultEditBiodata").html(result);
                    $("#resultEditBiodata").show();
                    $("#loadEditBiodata").hide();
                    $('#modal-editBiodata').modal('hide');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                }
            });
        }
    });







     /*//EDIT FOTO PROFIL
    $image_crop = $('#reviewFoto').croppie({
        enableExif: true,
        viewport: {
            width:250,
            height:300,
            type:'square' //circle
        },
        boundary:{
            width:400,
            height:400
        }
    });



   
    $('#fotoProfil').on('change', function(){
        var reader = new FileReader();
        reader.onload = function (event) {
            $image_crop.croppie('bind', {
                url: event.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
        $('#modalUploadFoto').modal('show');
    });

    $('.uploadFoto').click(function(event){
        $fotoLama = $('#fotoLama').val();
        $image_crop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function(response){
        $.ajax({
            url:"upload.php",
            type: "POST",
            data:{
            "imager": response,
            tulisan: $tulisan,
            imaging: 1,  
        },
        success:function(data){
          $('#modalUploadFoto').modal('hide');
          $('#resultUploadFoto').html(data);
        }
      });
    })
  });
*/
});