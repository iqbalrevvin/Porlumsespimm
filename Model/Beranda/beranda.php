<?php
/**
* 
*/
class Beranda extends Database{
	
	//ViewAlumni
	public function viewAlumni(){
		$db 		= $this->koneksi; 
		$sql 		= "SELECT * FROM alumni JOIN alumni_biodata_sespimma ON alumni.no_idnt = alumni_biodata_sespimma.no_idnt 
					   ORDER BY rand() ASC LIMIT 8";
		$execution 	=  $db->query($sql);
		return $execution;
	}

	//ViewAlumni Scroll
	public function viewAlumniScroll($limit, $offset){
		$db 		= $this->koneksi; 
		$sql 		= "SELECT * FROM alumni JOIN alumni_biodata_sespimma ON alumni.no_idnt = alumni_biodata_sespimma.no_idnt 
					   ORDER BY rand() ASC, nama_alumni ASC LIMIT {$limit} OFFSET {$offset} ";
		$execution 	=  $db->query($sql);
		return $execution;
	}
	//FOTO PROFIL
	public function fotoProfil($pasFoto){
		$db 		= $this->koneksi; 
		$sql	 	= "SELECT pas_foto, jenis_kelamin FROM alumni WHERE pas_foto = '$pasFoto'";
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

$beranda = new Beranda();


?>