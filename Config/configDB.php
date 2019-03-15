<?php
$dbhost = 'localhost'; 
$dbuser = 'root';     // ini berlaku di xampp
$dbpass = '';         // ini berlaku di xampp
$dbname = 'sespimma';
#$dbhost = '128.199.189.176'; 
#$dbuser = 'fininsys_prima';     // ini berlaku di xampp
#$dbpass = 'Iqz220195';         // ini berlaku di xampp
#$dbname = 'fininsys_primainsani';
// melakukan koneksi ke database
$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
// cek koneksi yang kita lakukan berhasil atau tidak
if ($db->connect_error) {
   // jika terjadi error, matikan proses dengan die() atau exit();
	require('View/PageError/404.html');
    die($connect->connect_error);
}

?>
