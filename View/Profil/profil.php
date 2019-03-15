
<?php 
  if(@$_GET['k']==''){
  	date_default_timezone_set('Asia/Jakarta');
    $ID = @$_GET['ID'];
    $secure = @$_GET['Secure'];
    $check=md5(md5($ID).md5('date(yyyymmddH)'));
    if($secure==$check){     
    	require('View/Profil/profilAlumni.php');
      require('View/Profil/modal_editDataUtama.php');
      require('View/Profil/modal_editBiodata.php');
    }else{
    	require('View/ErrorPage/404.php');
    }

  }else{
  	//code
  }
?>
