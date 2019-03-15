<?php
@session_start();
require_once('../../Config/configDB.php'); 
require_once('../../Model/Other/fungsiPost.php');

$idAlumni 			= post($_POST['idAlumni']);
$noIdntAsal 		= post($_POST['noIdntAsal']);  
$namaLengkap        = post($_POST['namaLengkap']);
$noIdnt             = post($_POST['noIdnt']);
$noInduk            = post($_POST['noInduk']);
$jk                 = post($_POST['jk']);
$tanggalLahir       = post($_POST['tanggalLahir']);
$tempatLahir        = post($_POST['tempatLahir']);
$agama              = post($_POST['agama']);
$alamat             = post($_POST['alamat']);
$desa               = post($_POST['desa']);
$kecamatan          = post($_POST['kecamatan']);
$kabupaten          = post($_POST['kabupaten']);
$provinsi           = post($_POST['provinsi']);
$noHp               = post($_POST['noHp']);
$email              = post($_POST['email']);

$sqlChekNoIdnt = "SELECT no_idnt FROM alumni WHERE no_idnt = '$noIdnt' ";
$checkNoIdnt = $db->query($sqlChekNoIdnt);
$object 	 = $checkNoIdnt->fetch_object();
$dataIdentitas = $object->no_idnt;


//QUERY UPDATE DATA
$sql = "UPDATE alumni SET nama_alumni = '$namaLengkap', no_idnt = '$noIdnt', no_induk = '$noInduk', jenis_kelamin = '$jk', 
							  tempat_lahir = '$tempatLahir', tgl_lahir = '$tanggalLahir', agama = '$agama', alamat = '$alamat', desa = '$desa',
							  kecamatan = '$kecamatan', kabupaten = '$kabupaten', provinsi = '$provinsi', no_telp = '$noHp', email = '$email' 
			WHERE idAlumni = '$idAlumni'";

//JIKA DATA IDENTITAS TIDAK DI RUBAH MAKA LAKUKAN EKSEKUSI QUERY UPDATE

if($noIdnt == $noIdntAsal){
	$execution = $db->query($sql);
		?><script type="text/javascript">
            swal("DATA DIPERBARUI", "Data Utama Berhasil Diperbarui!", "success");
    	</script><?php
}else{
	if($checkNoIdnt->num_rows > 0){
    	?><script type="text/javascript">
            	swal("MOHON MAAF", "No. Identitas / No. Induk Yang Anda Input Sudah Tersedia", "warning");
    	</script><?php
    }else{
    	$execution  = $db->query($sql);
    	if($noIdntAsal == @$_SESSION['Administrator'] || $noIdntAsal == @$_SESSION['Alumni']){
			?><script type="text/javascript">
            	swal({
                	title: "DATA DIPERBARUI",
                	text: "Data Utama Beserta No. Identitas Penguna Berhasil Diperbarui, Anda Harus Login Kembali!",
                	type: "success",
                	closeOnConfirm: false,
                	showLoaderOnConfirm: true,
            	}, function() {
                	setTimeout(function() {
                    	window.location='Model/Auth/logout.php';
                	}, 1500);
            	});
    		</script><?php
    	}else{
    		?><script type="text/javascript">
            	swal({
                	title: "DATA DIPERBARUI",
                	text: "Data Utama Beserta No. Identitas Penguna Berhasil Diperbarui!",
                	type: "success",
                	closeOnConfirm: false,
                	showLoaderOnConfirm: true,
            	}, function() {
                	setTimeout(function() {
                    	window.location='ManageAlumni';
                	}, 1500);
            	});
    		</script><?php
    	}
    }
}



?>