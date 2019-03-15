<?php
@session_start();
require_once('../../Config/configDB.php');
require_once('../../Model/Other/fungsiPost.php'); 

$id 				= post($_POST['id']); 
$namaPanggilan 		= post($_POST['namaPanggilan']);
$pokja 				= post($_POST['pokja']);
$pangkat 			= post($_POST['pangkat']);
$jabatan 			= post($_POST['jabatan']);
$asalPengiriman 	= post($_POST['asalPengiriman']);
$sukuBangsa 		= post($_POST['sukuBangsa']);
$statusMenikah 		= post($_POST['statusMenikah']);
$suamiIstri 		= post($_POST['suamiIstri']);
$namaAnak 			= post($_POST['namaAnak']);
$hobi 				= post($_POST['hobi']);
$pesan 				= post($_POST['pesan']);
$kesan 				= post($_POST['kesan']);

$sql = "UPDATE alumni_biodata_sespimma SET nama_panggilan='$namaPanggilan',pokja='$pokja',pangkat='$pangkat',
				jabatan='$jabatan',asal_pengiriman='$asalPengiriman',suku_bangsa='$sukuBangsa',status_menikah='$statusMenikah',
				suami_istri='$suamiIstri',nama_anak='$namaAnak',hobi='$hobi',pesan='$pesan',kesan='$kesan' 
		WHERE no_idnt = '$id' ";
$execution = $db->query($sql);
 
?><script type="text/javascript">
            swal("DATA DIPERBARUI", "Data Biodata Berhasil Diperbarui!", "success");
    	</script><?php

?>