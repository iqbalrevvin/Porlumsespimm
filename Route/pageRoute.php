<?php
	if(@$_SESSION['Administrator']){
		if(@$_GET['p'] == ''){
			require('View/Other/preload.php');
			require_once('View/Beranda/beranda.php');
		}elseif(@$_GET['p'] == 'ManageAlumni'){
			require('View/KelolaAlumni/kelolaAlumni.php');
		}elseif(@$_GET['p'] == 'Profil'){
			require('View/Other/preload.php');
			require('View/Profil/profil.php');
		}elseif(@$_GET['p'] == 'ImportData'){
			require('View/ImportData/importData.php');
		}elseif(@$_GET['p'] == 'BackupRestoreDatabase'){
			require('View/Other/preload.php');
			require('View/BackupRestore/backupRestore.php');
		}else{
			require('View/ErrorPage/404.php');
		}
	}else{
		if(@$_GET['p'] == ''){
			require('View/Other/preload.php');
			require_once('View/Beranda/beranda.php');
		}elseif(@$_GET['p'] == 'Search'){
			require('View/Other/preload.php');
			require_once('View/Pencarian/pencarian.php');
		}elseif(@$_GET['p'] == 'Profil'){
			require('View/Other/preload.php');
			require('View/Profil/profil.php');
		}elseif(@$_GET['p'] == 'Webpage'){
			#require('View/Other/preload.php');
			require('View/Webpage/webpageSespimma.php');
		}elseif(@$_GET['p'] == 'WebpagePolri'){
			#require('View/Other/preload.php');
			require('View/Webpage/webpagePolri.php');
		}else{
			require('View/ErrorPage/404.php');
		}
	}

?>