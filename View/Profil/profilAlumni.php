<?php require_once('Model/Profil/profil.php'); 
 $ID = @$_GET['ID']; 
 $data = $profil->profilAlumni($ID); 
 ?>

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="./">Beranda</a></li>
                    <li class="breadcrumb-item active">Profil <?= $data->nama_tampilan ?></li>
                </ol>
            </div>
            <h4 class="page-title">Profil <?= $data->nama_tampilan ?></h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->

<div class="row">
    <div class="col-sm-12">
        <!-- meta -->
        <div class="profile-user-box card-box bg-dark">
            <div class="row">
                <div class="col-sm-6">
                    <!--<span class="float-left mr-3"><img src="Assets/images/users/<?= $profil->profilAlumni_pasFoto($ID) ?>" alt="" class="thumb-lg rounded-circle"></span>-->
                    <span class="float-left mr-3">
                        <a href="Assets/images/users/<?= $profil->profilAlumni_pasFoto($ID) ?>" class="image-popup">
                            <img src="Assets/images/users/<?= $profil->profilAlumni_pasFoto($ID) ?>" height="100px">
                        </a>
                    </span>
                    <div class="media-body text-white">
                        <h4 class="mt-1 mb-1 font-18"><?= $data->nama_alumni ?></h4>
                        <p class="font-13 text-light"> *<?= $data->nama_panggilan ?></p>
                        <p class="text-light mb-0"><?= $data->no_idnt ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-right">
                        <button type="button" class="btn btn-sm btn-success waves-effect" data-toggle="modal" 
                                data-target="#modal-editDataUtama" data-backdrop="static" data-keyboard="true" id="">
                            <i class="mdi mdi-account-settings-variant mr-1"></i> Edit Data
                        </button>
                        <button type="button" class="btn btn-sm btn-success waves-effect" data-toggle="modal" 
                                data-target="#modal-editBiodata" data-backdrop="static" data-keyboard="true" id="">
                            <i class="mdi mdi-account-settings-variant mr-1"></i> Edit Biodata
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--/ meta -->
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-xl-4">
        <!-- Personal-Information -->
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-20">Informasi Personal</h4>
            <div class="panel-body">
                

                <div class="text-left">
                    <p class="font-13"><strong>Nama Lengkap : </strong> <span class="m-l-15"><?=$data->nama_alumni ?></span></p>

                    <p class="font-13"><strong>Nama Identitas : </strong><span class="m-l-15"><?= $data->no_idnt ?></span></p>

                    <p class="font-13"><strong>No Induk / NRP : </strong> <span class="m-l-15"><?= $data->no_induk ?></span></p>

                    <p class="font-13"><strong>TTL :</strong> 
                        <span class="m-l-15"><?= $data->tempat_lahir ?>, <?= tglIndo($data->tgl_lahir) ?></span>
                    </p>
                    <p class="font-13"><strong>Agama : </strong> <span class="m-l-15"><?= $data->agama ?></span></p>
                    <p class="font-13"><strong>Alamat : </strong> <span class="m-l-15"><?= $data->alamat ?></span></p>
                    <p class="font-13"><strong>Desa : </strong> <span class="m-l-15"><?= $data->desa ?></span></p>
                    <p class="font-13"><strong>Kecamatan : </strong> <span class="m-l-15"><?= $data->kecamatan ?></span></p>
                    <p class="font-13"><strong>Kab/Kota : </strong> <span class="m-l-15"><?= $data->kabupaten ?></span></p>
                    <p class="font-13"><strong>Provinsi : </strong> <span class="m-l-15"><?= $data->provinsi ?></span></p>
                    <p class="font-13"><strong>Status :</strong>
                        <?= $data->status ?>
                    </p>

                </div>
                <hr />
               

                <ul class="social-links list-inline m-t-20 m-b-0">
                <li class="list-inline-item">
                        <a href='https://api.whatsapp.com/send?phone=62<?= $data->no_telp ?>' title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="<?= $data->no_telp ?>">
                            <i class="fa fa-whatsapp"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="<?= $data->email ?>"><i class="mdi mdi-email"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Instagram">
                            <i class="mdi mdi-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- PESAN -->
         <div class="card-box ribbon-box">
            <div class="ribbon ribbon-primary">Kesan</div>
            <div class="clearfix"></div>
            <div class="inbox-widget">
                <p class="font-13">
                    <i><?= $data->kesan ?></i>
                </p>
            </div>
        </div>
        <div class="card-box ribbon-box">
            <div class="ribbon ribbon-success">Pesan</div>
            <div class="clearfix"></div>
            <div class="inbox-widget">
                <p class="font-13">
                    <i><?= $data->pesan ?></i>
                </p>
            </div>
        </div>
    </div>

    <div class="col-xl-8">
        <div class="row">
            <div class="col-sm-4">
                <div class="card-box tilebox-one">
                    <i class="icon-layers float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase mt-0">POKJA</h6>
                    <h2 class="m-b-20" data-plugin="counterup"><?= $data->pokja ?></h2>
                </div>
            </div><!-- end col -->

            <div class="col-sm-4">
                <div class="card-box tilebox-one">
                    <i class="mdi mdi-shield-half-full float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase mt-0">PANGKAT</h6>
                    <h2 class="m-b-20"><?= $data->pangkat ?></h2>

                </div>
            </div><!-- end col -->

            <div class="col-sm-4">
                <div class="card-box tilebox-one">
                    <i class="mdi mdi-briefcase float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase mt-0">JABATAN</h6>
                    <h5 class="m-b-20" data-plugin="counterup"><b><?= $data->jabatan ?></b></h5>
                </div>
            </div><!-- end col -->

        </div>
        <!-- end row -->


        <div class="card-box">
            <h4 class="header-title mt-0 mb-3">Biodata Lainnya</h4>
            <div class="table-responsive">
                <table class="">
                    <tbody border="1">
                        <tr>
                            <td colspan="2" rowspan="" headers=""><b>Status</b></td>
                            <td colspan="1" rowspan="" headers="">&nbsp:&nbsp</td>
                            <td colspan="1" rowspan="" headers=""><?= $data->status_menikah ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="" headers=""><b>Istri/Suami</b></td>
                            <td colspan="1" rowspan="" headers="">&nbsp:&nbsp</td>
                            <td colspan="1" rowspan="" headers=""><?= $data->suami_istri ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="" headers=""><b>Nama Anak</b></td>
                            <td colspan="1" rowspan="" headers="">&nbsp:&nbsp</td>
                            <td colspan="1" rowspan="" headers=""><?= $data->nama_anak ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="" headers=""><b>Pengiriman</b></td>
                            <td colspan="1" rowspan="" headers="">&nbsp:&nbsp</td>
                            <td colspan="1" rowspan="" headers=""><?= $data->asal_pengiriman ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="" headers=""><b>Suku Bangsa</b></td>
                            <td colspan="1" rowspan="" headers="">&nbsp:&nbsp</td>
                            <td colspan="1" rowspan="" headers=""><?= $data->suku_bangsa ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="" headers=""><b>Hobi</b></td>
                            <td colspan="1" rowspan="" headers="">&nbsp:&nbsp</td>
                            <td colspan="1" rowspan="" headers=""><?= $data->hobi ?></td>
                        </tr>
                       

                    </tbody>
                </table>
            </div>
        </div>
        <!--INFORMASI AKUN-->
        <?php if(@$_SESSION['Administrator'] OR $ID == sessionType()){ ?>
            <?php require('View/Profil/profil_informasiAkun.php'); ?>
        <?php } ?>
        <!--////////////-->

    </div>
    <!-- end col -->

</div>
<!-- end row -->