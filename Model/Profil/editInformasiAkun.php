<?php
@session_start();

require('../../Config/configDB.php');
require('../../Model/Other/fungsiPost.php');

if(isset($_POST['updateNamaTampilan'])){
	$id 						 = post($_POST['id']);
	$editNamaTampilan            = post($_POST['editNamaTampilan']);

	$sql = "UPDATE users SET nama_tampilan = '$editNamaTampilan' WHERE no_idnt = '$id' ";
	$execution = $db->query($sql);
}elseif(isset($_POST['updatePassword'])){
	$id  			=post($_POST['id']);
	$password  		=post($_POST['password']);

	$sql 		= "UPDATE users SET password = md5('$password'), pass = '$password' WHERE no_idnt = '$id'";
	$execution 	= $db->query($sql);	
}elseif(isset($_POST['updateLevel'])){
	$id  			=$_POST['id'];
	$level  		=$_POST['level'];

	$sql 		= "UPDATE users SET level = '$level' WHERE no_idnt = '$id'";
	$execution 	= $db->query($sql);
}elseif(isset($_POST['updateStatus'])){
	$id  			=$_POST['id'];
	$status  		=$_POST['status'];

	$sql 		= "UPDATE users SET status = '$status' WHERE no_idnt = '$id'";
	$execution 	= $db->query($sql);
}elseif(isset($_POST['updateUsername'])){
	$id  			=$_POST['id'];
	$username  		= post($_POST['username']);

	$sqlCheck 		= "SELECT username, no_idnt FROM users WHERE username = '$username' ";
	$checkUsername 	= $db->query($sqlCheck);

	if($checkUsername->num_rows > 0){ 
		?><script>swal("MOHON MAAF", "Username Yang Anda Input Sudah Digunakan", "warning");</script><?php
	}else{
		$sql 		= "UPDATE users SET username = '$username' WHERE no_idnt = '$id'";
		$execution 	= $db->query($sql);

		?><script>
		swal({
            title: "NAMA PENGGUNA DIPERBARUI",
            text: "Nama Pengguna Akun Berhasil Diperbarui!",
            type: "success",
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        }, function() {
            setTimeout(function() {
                refresh();
            }, 1500);
        });
        </script><?php
	}
}elseif(isset($_POST['resetAkun'])){
	$id  			=$_POST['id'];

	$sql 		= "UPDATE users SET username = '$id', password = md5('$id'), pass = '$id' WHERE no_idnt = '$id'";
	$execution 	= $db->query($sql);

	?><script>
		swal({
            title: "RESET BERHASIL",
            text: "Akun Pengguna Berhasil Direset. Nama Pengguna & Kata Sandi Default Adalah No. Identitas (\""+$id+"\")!",
            type: "success",
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        }, function() {
            setTimeout(function() {
                refresh();
            }, 1500);
        });
        </script><?php
}
?>

