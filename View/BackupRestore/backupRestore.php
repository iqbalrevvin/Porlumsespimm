<!--SCRIPT FRONTEND ERROR PAGE-->

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="./">Beranda</a></li>
                    <li class="breadcrumb-item active">Backup & Restore Database</li>
                </ol>
            </div>
            <h4 class="page-title">Backup & Restore Database</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-sm-6 offset-sm-3">
        <div class="text-center mt-5">
            <h1 class="text-error"><img src="Assets/images/backupImage.png" height="100px"></h1>
            <h4 class="text-uppercase text-warning mt-3">Backup & Restore Database</h4>
            <p class="text-muted mt-3">
                Setelah melakukan backup, download file hasil backup dan simpan di komputer lain dengan aman, lebih baik lagi jika disimpan di Cloud Storage seperti Google Drive, Dropbox, Dsb.
            </p>
            <button type="button" class="btn btn-md btn-success waves-effect waves-light mt-3" id="btnBackup">
                <i class="mdi mdi-database"></i> Backup Database
            </button>
            <button type="button" class="btn btn-md btn-dark waves-effect waves-light mt-3" id="btnDownloadBackup">
                <i class="mdi mdi-download"></i> Download Hasil Backup
            </button>
            <button type="button" class="btn btn-md btn-danger waves-effect waves-light mt-3" data-toggle="modal" 
                    data-target="#modal-restoreDatabase" data-backdrop="static" data-keyboard="true">
                <i class="mdi mdi-restore"></i> Restore Database
            </button>
            
            <hr>
            <div id="loadBackup"></div>
            <div id="loadDownload"></div>
            <div id="resultBackup"></div>
            <div id="resultDownload"></div>
            <div id="resultRestore"></div>

        </div>
    </div><!-- end col -->
</div>
<!-- end row -->

<!--MODAL RESTORE DATABASE-->
<?php require('modal_restoreDatabase.php'); ?>