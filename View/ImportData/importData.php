<!-- Modal -->
<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Keterangan Impor Data</h4>
    <div class="custom-modal-text text-center">
        <form role="form">
            <p class="text-center">
                Pilih File Berformat Excel (.xls) Melalui Tombol Diatas Lalu Klik <b>PROSES</b><br>(Pastikan Tidak Ada Data Kosong Dibawahnya)
            </p>

        </form>
    </div>
</div>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<form method="post" enctype="multipart/form-data" action="">
<div class="row fileupload fileupload-new" data-provides="fileupload">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item active">Beranda</li>
                </ol>
            </div>
            <h4 class="page-title">Beranda</h4>
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        Nama File : <b>
                            <div class="fileupload-preview fileupload-exists thumbnail"></div>
                        </b>
                        <div type="" class="">
                            <input type="file" name="fileImport" class="btn btn-sm btn-success " accept=".xls" />
                            <span class="fileupload-exists">Pilih File Lain / Klik Tombol <b>"PROSES"</b> Dibawah Untuk Mulai Mengimpor Data</span>
                        </div><br>


                    </div>

                </div>
            </div>
        </div>

        <div class="card text-center m-b-30">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <button type="submit" name="prosesImport" class="btn btn-danger fileupload-exists" >
                            <i class="mdi mdi-upload"></i>
                            <span>PROSES</span>
                        </button>
                        <a href="Assets/documents/FORMAT-IMPORT-SESPIMMA.xls">
                            <button type="button" class="btn btn-dark waves-effect waves-light">
                                <i class="mdi mdi-download"></i>
                                <span>Download Format</span>
                            </button>
                        </a>
                        <a href="#custom-modal" class="btn btn-info waves-effect waves-light" data-animation="swell" data-plugin="custommodal"
                           data-overlaySpeed="200" data-overlayColor="#36404a" data-backdrop="static" data-keyboard="true">
                           <i class="mdi mdi-information-outline"></i> Keterangan
                        </a>
                    </li>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>
                </ul>
            </div>
</form>
            <div class="card-body">
                <h5 class="card-title">Progres Impor Data</h5>
                <!-- Progress bar holder -->
                <div id="progress" style="width:100%; border:1px solid #ccc; padding:5px; margin-top:10px; height:33px"></div>
                <!-- Progress information -->
                <div id="information" style="width"></div>
                <!-- /.row -->
                <?php require('Model/ImportData/importData.php'); ?>
            </div>
        </div>
    </div>
</div>