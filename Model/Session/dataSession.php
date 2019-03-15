<?php
/**
* 
*/
class User extends Database
{
	//IDUsers Session
	public function idUsers($session){
		$db 		= $this->koneksi; 
		$sql 		= "SELECT idUsers, no_idnt FROM users WHERE no_idnt = '$session'";
		$execution 	=  $db->query($sql);
		$object = $execution->fetch_object();
		$idUsers = $object->idUsers;

		return $idUsers;
	}
	//FOTO PROFIL
	public function fotoProfil($session){
		$db 		= $this->koneksi; 
		$sql	 	= "SELECT * FROM users JOIN alumni ON users.no_idnt = alumni.no_idnt WHERE users.no_idnt = '$session'";
		$execution 	= $db->query($sql);
		$object = $execution->fetch_object();
		if($object->pas_foto == ''){
			if($object->jenis_kelamin == 'L'){
				$foto = "admin-L.png";
			}else{
				$foto = "admin-P.png";
			}
		}else{
			$foto = $object->pas_foto;
		}

		return $foto; 
	}
	//NAMA TAMPILAN PROFIL
	public function namaProfil($session){
		$db 		= $this->koneksi;
		$sql	 	= "SELECT nama_tampilan, no_idnt FROM users WHERE no_idnt = '$session'";
		$execution 	= $db->query($sql);
		$object 	= $execution->fetch_object();
		$nama 		= $object->nama_tampilan;

		return $nama;
	}

	//ID LEVEL SESSION
	public function levelID($session){
		$db 		= $this->koneksi;
		$sql	 	= "SELECT level, no_idnt FROM users WHERE no_idnt = '$session'";
		$execution 	= $db->query($sql);
		$object 	= $execution->fetch_object();
		$levelID 	= $object->level;

		return $levelID; 
	}

	public function levelName($session){
		$db 		= $this->koneksi;
		$sql	 	= "SELECT level, no_idnt FROM users WHERE no_idnt = '$session'";
		$execution 	= $db->query($sql);
		$object 	= $execution->fetch_object();

		if($object->level == '1'){
			$level = "Administrator";
		}elseif($object->level == '2'){
			$level = "Alumni";
		}
		return $level;
	}

}
$user = new user();
?>