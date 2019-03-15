<?php
if(isset($_POST['prosesRestore'])){ 
	@session_start();
	error_reporting(0);
	date_default_timezone_set('Asia/Jakarta');
	$file = fopen('../../Database/DB-Import-Sespimma_'.date('d-m-Y').'.sql.gz','r+');
	if(empty($file)){
		?><div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            File Import Tidak Ditemukan!, Mohon Letakan Terlebih Dahulu File Yang Akan Di Import!
            <script>swal("PROSES GAGAL!", "File Import Tidak Ditemukan !", "warning");</script>	
        </div><?php
	}else{
		set_time_limit(0);
		ignore_user_abort(true);
		require('../../Config/configDB.php');
		require('MySQLImport.php');
		$import = new MySQLImport($db);
		$import->onProgress = function ($count, $percent) {
			if ($percent !== null) {
				echo (int) $percent . " %\r";
			}elseif ($count % 10 === 0) {
				echo '.';
			}
		};

		$import->load('../../Database/DB-Import-Sespimma_'.date('d-m-Y').'.sql.gz');
		$time += microtime(true);
		echo "FINISHED (in $time s)";
		?>
		<script>
			swal({
            	title: "IMPORT BERHASIL",
            	text: "Database Berhasil Di Import Dalam Waktu <?= $time ?> Detik",
            	type: "success",
            	closeOnConfirm: false,
            	showLoaderOnConfirm: true,
        	}, function () {
            	setTimeout(function () {
                	refresh();
            	}, 1500);
        	});
        </script>
		<?php
	}

}
?>