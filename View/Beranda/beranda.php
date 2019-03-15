<?php require_once('Config/configDBObject.php'); ?>
<?php require_once('Model/Beranda/beranda.php'); ?>
<!--SCRIPT FRONT END BERANDA-->

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row">
            <!--<div id="viewAlumni"></div>-->
                <?php
                date_default_timezone_set('Asia/Jakarta');
                $no = 1; 
                $viewAlumni = $beranda->viewAlumni();
                while($data = $viewAlumni->fetch_object()):
                    $secure= md5(md5($data->no_idnt).md5('date(yyyymmddH)'));
                ?>
            
                    <div class="col-lg-3">
                        <div class="text-center card-box">
                            <div class="member-card pt-2 pb-2">
                                <div class="thumb-lg member-thumb m-b-10 mx-auto">
                                    <a href="Assets/images/users/<?= $beranda->fotoProfil($data->pas_foto) ?>" class="image-popup">
                                        <img src="Assets/images/users/small_<?= $beranda->fotoProfil($data->pas_foto) ?>" class="rounded-circle img-thumbnail" alt="profile-image">
                                    </a>
                                </div>

                                <div class="">
                                    <h4 class="m-b-5"><?= substr($data->nama_alumni, 0, 20) ?></h4>
                                    <p class="text-muted">*<?= $data->nama_panggilan ?> <span> | </span> 
                                    <span class="text-green"><?= $data->no_idnt ?></a> </span></p>
                                </div>

                                <ul class="social-links list-inline m-t-20">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Instgram"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                                        
                                <a href="App?p=Profil&ID=<?= $data->no_idnt ?>&Secure=<?= $secure ?>" 
                                    class="btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">
                                    Lihat Profil
                                </a>
                            </div>
                        </div>
                    </div> <!-- end col -->
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<div id="loadScroll"></div>
<div id="viewAlumni"></div>

