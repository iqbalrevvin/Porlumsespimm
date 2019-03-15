<!--MODAL RESTORE DATABASE-->
<div id="modal-restoreDatabase" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <div class="modal-dialog modal-default">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-uppercase text-center m-b-30">
                    <a href="./" class="text-success">
                        <span><img src="Assets/images/sespimma-logo-wide.png" alt="" height="65"></span>
                    </a>
                </h2>
                <div class="card-box">
                            <h4 class="header-title m-t-0">Restore File Database Sespimma</h4>

                            <form action="Model/BackupRestore/importDatabase.php" class="dropzone">
                                <div class="dz-message">
                                    <h5>Klik Atau Tarik & Letakan File Hasil Download Backup Database Sespimma Disini!.</h5>
                                    <h6><em>(Pastikan file adalah hasil download backup dari aplikasi Portal Alumni Sespimma serta sudah berextensi <strong>.sql.gz</strong>, Contoh : <b>DB-Backup-Sespimma_03-01-2019</b>)</em></h6>
                                </div> 
                                <div class="fallback">
                                    <input name="file" type="file" id="fileImport" required/>
                                </div> 
                            </form>
                            <div class="clearfix text-right mt-3">
                                <button type="submit" class="btn btn-danger waves-effect waves-light" id="btnImportDatabase">
                                    <i class="mdi mdi-restore"></i> Restore
                                </button>
                            </div>
                            <div id="loadRestoreDatabase"></div>

                        </div>
                <hr>
                <div class="form-group account-btn text-center m-t-10">
                    <div class="col-12">
                        <button class="btn w-lg btn-rounded btn-dark waves-effect waves-light" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>