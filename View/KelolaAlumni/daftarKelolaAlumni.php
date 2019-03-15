<!--SCRIPT FRONT END BERANDA-->
<div id="resultAddAlumni"></div>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="./">Beranda</a></li>
                    <li class="breadcrumb-item active">Kelola Alumni</li>
                </ol>
            </div>
            <h4 class="page-title">Kelola Alumni</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
        <button type="button" class="btn btn-dark waves-effect waves-light" data-toggle="modal" 
                data-target="#modal-AddAlumni" data-backdrop="static" data-keyboard="true" id="addAlumni"> 
            <i class="mdi mdi-account-plus"></i> <span>Tambah Data</span> 
        </button>
        <?php require('View/KelolaAlumni/modal_addAlumni.php'); ?>
        <hr>
            <h4 class="m-t-0 header-title">Tabel Data Alumni</h4>
            <p class="text-muted font-14 m-b-30">
                Berisi data utama dari alumni, untuk melihat detail & memperbarui data alumni silahkan klik nama alumni yang ditandai dengan cetak tebal.
            </p>

            <div id="tabelKelolaAlumni"><b>Memuat Data</b> <img src='Assets/images/loading.gif' width='150' height='25'></div>
        </div>
    </div>
</div> <!-- end row -->

