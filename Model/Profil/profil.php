<?php
/**
* 
*/
require_once('Config/configDBObject.php');

class Profil extends Database{

	public function profilAlumni($ID){
		$db = $this->koneksi;
		$sql = "SELECT * FROM alumni JOIN users ON alumni.no_idnt = users.no_idnt 
				JOIN alumni_biodata_sespimma ON alumni.no_idnt = alumni_biodata_sespimma.no_idnt 
				WHERE alumni.no_idnt = '$ID'";
		$execution = $db->query($sql);
		$object = $execution->fetch_object();

		return $object;
	}

	public function profilAlumni_pasFoto($ID){
		$db 		= $this->koneksi; 
		$sql	 	= "SELECT pas_foto, jenis_kelamin, no_idnt FROM alumni WHERE no_idnt = '$ID'";
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
	
	

}

$profil = new Profil();

?>