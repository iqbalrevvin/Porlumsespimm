<?php 
	@session_start();
	if(isset($_POST['downloadDatabase'])){ 
		error_reporting(0);
        date_default_timezone_set('Asia/Jakarta');
		$file = fopen('../../Database/DB-Backup-Sespimma_'.date('d-m-Y').'.sql.gz','r+');
		if(empty($file)){
			?><div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
                 File Backup Tidak Ditemukan!, Lakukan Backup Database Terlebih Dahulu Untuk Hari Ini Lalu Klik Kembali Tombol
                 <b>Download Hasil Backup</b>
             </div><?php
		}else{
			?><div class="alert alert-custom alert-dismissible bg-custom text-white border-0 fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                File Backup Ditemukan!, Silahkan Klik Tombol "Unduh File" Berikut!
                <a href="Database/DB-Backup-Sespimma_<?= date('d-m-Y') ?>.sql.gz"> 
                 	<button class="btn w-sm btn-rounded btn-dark waves-effect waves-light">Unduh file</button>
                </a>
                <br>
                <span class="font-11">Simpan File Backup di komputer lain dengan aman, lebih baik lagi jika disimpan di Cloud Storage seperti Google Drive, Dropbox, Dsb.</span>
            </div><?php
		}
	}
?>