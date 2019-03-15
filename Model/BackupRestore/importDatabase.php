<?php
if(!empty($_FILES)){
	date_default_timezone_set('Asia/Jakarta');
	$targetDir = "../../Database/";
	$namaFile = 'DB-Import-Sespimma_'.date('d-m-Y').'.sql.gz';
	$targetFile = $targetDir.$namaFile;
	move_uploaded_file($_FILES['file']['tmp_name'],$targetFile);
}
?>