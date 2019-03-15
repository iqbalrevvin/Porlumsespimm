<?php
@session_start();
require('../../Config/configDB.php');
date_default_timezone_set('Asia/Jakarta');
set_time_limit(0);
ignore_user_abort(true);

require('MySQLDump.php');

$time = -microtime(true);

$dump = new MySQLDump($db);
$dump->save('../../Database/DB-Backup-Sespimma_' . date('d-m-Y') . '.sql.gz');

$time += microtime(true);
#echo "Selesai (dalam $time mikrodetik)";
?>
<div class="alert alert-light alert-dismissible bg-light text-dark border-0 fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    Selesai Dalam <b><?= $time ?></b> Mikrotdetik
</div>
