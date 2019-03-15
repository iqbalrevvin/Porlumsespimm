<!--LOGIN AREA-->
<?php if(!@$_SESSION['Administrator'] AND !@$_SESSION['Alumni']){ ?>	
		<script src="Auth/login.js"></script>
<?php } ?>
<!--////////////////////////////////////////////////////////////////////////-->

<?php if(@$_GET['p'] == ''){ ?>
    <script src="JSController/Beranda/beranda.js"></script>
<?php }elseif(@$_GET['p'] == 'ManageAlumni'){ ?>
	<script src="JSController/KelolaAlumni/kelolaAlumni.js"></script>
<?php }elseif(@$_GET['p'] == 'Profil'){ ?>
	<script src="JSController/Profil/profil.js"></script>
<?php }elseif(@$_GET['p'] == 'BackupRestoreDatabase'){ ?>
    <script src="JSController/BackupRestore/backupRestore.js"></script>
<?php }elseif(@$_GET['p'] == 'Search'){ ?>
    <script src="JSController/Pencarian/pencarian.js"></script>
<?php } ?>
<script type="text/javascript">
//OTHER JS SCRIPT

//MAGNIFY IMAGE POPUP
$('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    mainClass: 'mfp-fade',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    }
});
//----------------------------------------------
// Fungsi Input HANYA ANGKA
function inputAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
        return true;
}
//HANYA HURUF KECIL PADA FORM EDIT USERNAME PENGGUNA
//FUNGSI HURUF KECIL SAAT MEMASUKAN USERNAME
 $("#username").on({
    keydown: function(e) {
    if (e.which === 32)
        return false;
  },
  keyup: function(){
    this.value = this.value.toLowerCase();
  },
  change: function() {
    this.value = this.value.replace(/\s/g, "");
  }
});
//-----------------------------------------------------

 //NOTIF JIKA PARAMETER ADA YANG KOSONG
    function errorInput() {
        $.toast({
            text: 'Masih Ada Data Wajib Yang Belum Di Isi !',
            heading: 'Peringatan!',
            showHideTransition: 'slide',
            position: 'top-right',
            loaderBg: '#bf441d',
            icon: 'error',
            hideAfter: 3000,
            stack: 1
        });
    }
//-----------------------------------------------------

function refresh(){
	window.location.reload();
}


</script>