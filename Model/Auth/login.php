<?php 
@session_start();
require_once('../../Config/configDB.php'); 

$username = @mysqli_real_escape_string($db, $_POST['username']);
$password = @mysqli_real_escape_string($db, $_POST['password']);

$sqlData = "SELECT * FROM users WHERE username = '$username'";
$dataQuery = $db->query($sqlData);
$data = $dataQuery->fetch_object();

$sqlUsername 	= "SELECT username FROM users WHERE username = '$username'";
$checkUsername = $db->query($sqlUsername);
if($checkUsername->num_rows > 0){
	$sqlCheckPassword 	= "SELECT password FROM users WHERE password =  md5('$password')";
	$checkPassword 		= $db->query($sqlCheckPassword);
	if($checkPassword->num_rows > 0){
		if($data->status == 'Aktif'){
			if($data->level == '1'){
				@$_SESSION['Administrator'] = $data->no_idnt;
			}elseif($data->level == '2'){
				@$_SESSION['Alumni'] = $data->no_idnt;
			}
			//USERS UPDATE ONLINE
			$userUpdate = $db->query("UPDATE users SET online ='on' WHERE username = '$username'");
			//--------------------------------------------------------------------------------------
			//SPINNER LOGIN BERHASIL----------------------------------------
			?>
				<tr>
					<td style="vertical-align:middle; width: auto;">
						<b class="text-warning">Login Berhasil</b>
					</td>

					<td style="vertical-align:middle;">
						<img src='Assets/images/loading.gif' width='150' height='25' >
					</td>
				</tr>
				<script>
					setTimeout(function () {
                                    window.location.reload();
                                }, 1500);
				</script>
			<?php
			//------------------------------------------------------------------
		}else{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Akun Dalam Status Nonaktif - Hubungi Administrator!
                </div>
			<?php
		}
	}else{
		?><div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                Kata Sandi Salah
            </div><?php
	} 
}else{
	?><div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          <b>Nama Pengguna Tidak Ditemukan</b><br>
          Pastikan Anda Sudah Terdaftar Pada Sistem
      </div><?php
}

?>