<?php
@session_start();
require_once('../../Config/configDB.php');
require_once('../../Config/configDBObject.php');
require_once('../../Model/Session/sessionType.php');
require('../../Model/Session/dataSession.php');
require('../../Model/LogAktivitas/logAktivitas.php');


$idnt 		= sessionType();
$idUsers    = $user->idUsers(sessionType());
$level      = $user->levelID(sessionType());
$namaTmpln  = $user->namaProfil(sessionType());
$tglAct     = date("Y-m-d");
$jamAct     = date("H:i:s");
$tglJamAct  = date("Y-m-d H:i:s");

$sql 		= "UPDATE users SET online='off' WHERE no_idnt = '$idnt'";
$execution 	= $db->query($sql);
$log->logAct($idUsers, $level, $namaTmpln, $tglAct, $jamAct, $tglJamAct, $mac, 'Logout');
session_destroy();
header("location:../../");
exit();

?>