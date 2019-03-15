$(document).ready(function() {
	tabelKelolaAlumni();

	function tabelKelolaAlumni(){
        $.ajax({
            url: 'View/KelolaAlumni/tabelKelolaAlumni.php',
            type: 'POST',
            async: false,
            data:{
                show: 1
            },
            success: function(result){
                $('#tabelKelolaAlumni').html(result);
                $('.responsive-datatable').DataTable();
            }
        });
	} 

//ADD ALUMNI
$(document).on('click', '#btnAddAlumni', function(){
    $("#loadAddAlumni").show().html("<b>Memeriksa & Mengirim Paramater</b> <img src='Assets/images/loading.gif' width='150' height='25' >");
    if ($('#namaLengkap').val() == "" || $('#noIdnt').val() == "" || $('#noInduk').val() == "" || $('#jk').val() == "") {
        errorInput();
        $("#loadAddAlumni").hide();
    }else{
        var data = $('#formAddAlumni').serialize();
            $.ajax({
                type: 'POST',
                url: 'Model/KelolaAlumni/addAlumni.php',
                data: data,
                success: function(result){
                    tabelKelolaAlumni();
                    $("#resultAddAlumni").html(result);
                    $("#resultAddAlumni").show();
                    $("#loadAddAlumni").hide();
                    $('#modal-AddAlumni').modal('hide');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                }
            });
    }
});

//DELETE ALUMNI
$(document).on('click', '#btnDeleteAlumni', function(){
    $noIdnt     = $(this).val();
    $hapus      = $(this).data('delete');
    $id         = $(this).data('id');
    //$("#loadDeleteAlumni"+$id).show().html("<img src='Assets/images/load2.gif' width='25' height='25' >");
    swal({
        title: "KONFIRMASI TINDAKAN!",
        text: "Data utama, akun & biodata alumni Bernama : \""+$hapus+"\" dengan No. Identitas : \""+$noIdnt+"\" Akan di Hapus dan Tidak Bisa Dikembalikan",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ya, Lanjutkan!",
        cancelButtonText: "Tidak, Kembali!",
        closeOnConfirm: false,
        closeOnCancel: false
    },  function (isConfirm) {
            if (isConfirm) {
                $("#loadDeleteAlumni"+$id).show().html("<img src='Assets/images/load2.gif' width='45' height='45' >");
                $.ajax({
                    type: "POST",
                    url: "Model/KelolaAlumni/deleteAlumni.php",
                    data: {
                        id              : $id,
                        deleteAlumni    : 1,
                    },
                    success: function(){
                        swal("Deleted!", "Data Alumni Bernama : \""+$hapus+"\" Berhasil di Hapus", "success");
                        tabelKelolaAlumni();
                        $("#loadDeleteAlumni").hide();
                    }
                });
            } else {
                swal("Cancelled", "Tindakan di Batalkan :)", "error");
                $("#loadDeleteAlumni"+$id).fadeOut();
            }
        });

})


      




});