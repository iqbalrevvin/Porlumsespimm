<?php
/**
* 
*/
class KelolaAlumni extends Database{
	
	//IDUsers Session
	public function tabelKelolaAlumni(){
		$db 		= $this->koneksi; 
		$sql 		= "SELECT * FROM alumni ORDER BY nama_alumni ASC";
		$execution 	=  $db->query($sql);
		return $execution;
	}
}


$kelolaAlumni = new KelolaAlumni();


?>