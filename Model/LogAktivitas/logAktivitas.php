<?php
$mac = $_SERVER['HTTP_USER_AGENT'];

/**
* 
*/
class LogAktivitas extends Database
{
    
    public function logAct($idUsers, $level, $namaTmpln, $tglAct, $jamAct, $tglJamAct, $mac, $deskirpLog){
        $db         = $this->koneksi;
        $sql        = "INSERT INTO log_aktivitas 
                                (idLog, idUsers, level, nama_tampilan, tgl_aktivitas, jam_aktivitas, tgl_jam_aktivitas, 
                                 mac_address, deskripsi_log ) 
                    VALUES ('','$idUsers', '$level', '$namaTmpln', '$tglAct', '$jamAct', '$tglJamAct', '$mac', '$deskirpLog')";
        $execution  = $db->query($sql);

        return $execution;
    }
}

$log = new LogAktivitas();

?>

