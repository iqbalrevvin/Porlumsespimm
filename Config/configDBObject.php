<?php
class Database{
	//protected $connection berarti objek connection dapat di panggil di class lain
	protected $koneksi;
	//Jika di set sebagai private, maka objek connection tidak dapat di panggil di class lain 
	#private $connection;
	function __construct(){
		$this->connect_db();
	}
	public function connect_db(){
		$dbhost = 'localhost'; 
		$dbuser = 'root';     // ini berlaku di xampp
		$dbpass = '';         // ini berlaku di xampp
		$dbname = 'sespimma';
		$this->koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
		if(mysqli_connect_error()){
			die("Koneksi Ke Database Gagal" .mysqli_connect_error() .mysqli_connect_errno());
		}
	}

}
$database = new Database();
?>