<?php 
	@session_start();
	require_once('../../Config/configDB.php');

	if(isset($_POST['deleteAlumni'])){
		$id 	= $_POST['id'];

		$sql	 	= "DELETE FROM alumni WHERE idAlumni = '$id'";
		$execution 	= $db->query($sql) or die ($db->error); 
	}
?>