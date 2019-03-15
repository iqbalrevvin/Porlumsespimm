<?php

function post($input){
	require('../../Config/configDB.php');
	$post = @mysqli_real_escape_string($db, htmlspecialchars($input));

	return $post;
}



?>