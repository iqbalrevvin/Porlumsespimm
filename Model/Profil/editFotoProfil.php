<?php
	require('Model/Other/fungsiUploadFoto.php');
	if(isset($_POST['uploadFotoProfil'])){
		
		$sumberFile 	= @$_FILES['foto']['tmp_name'];
		$tipeFile   	= $_FILES['foto']['type'];
		$namaFile 		= @$_FILES['foto']['name'];
       	$namaFile2 		= $ID."-".$namaFile;

       	if(empty($sumberFile)){
       		echo"<script>alert('Mohon Pilih Terlebih Dahulu File Foto !');</script>";
       	}else{
       		unlink("Assets/images/users/$data->pas_foto");
       		unlink("Assets/images/users/small_$data->pas_foto");
       		uploadFoto($namaFile2);
       		$sqlUpdateFoto 		= "UPDATE alumni SET pas_foto = '$namaFile2' WHERE no_idnt = '$ID'";
       		$updateFoto 		= $db->query($sqlUpdateFoto) or die ($db->error);
       		
        	echo"<script>history.go(-1);</script>";
       	}
	}
?>