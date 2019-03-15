<?php if(isset($_GET['offset']) && isset($_GET['limit'])) { ?>
<!--<div class="row">
    <div class="col-sm-12">-->
            <div class="row">

    <?php
        require_once('../../Config/configDBObject.php'); 
        require_once('../../Model/Beranda/beranda.php');
        $limit = $_GET['limit'];
        $offset = $_GET['offset'];
    
        date_default_timezone_set('Asia/Jakarta');
        $no = 1; 
        $viewAlumni = $beranda->viewAlumniScroll($limit, $offset);
        while($data = $viewAlumni->fetch_object()):
            $secure= md5(md5($data->no_idnt).md5('date(yyyymmddH)'));
        ?>

                <div class="col-lg-3">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb m-b-10 mx-auto">
                                <a href="Assets/images/users/<?= $beranda->fotoProfil($data->pas_foto) ?>" class="image-popup">
                                    <img src="Assets/images/users/small_<?= $beranda->fotoProfil($data->pas_foto) ?>" 
                                    class="rounded-circle img-thumbnail" alt="Sespimma <?= $data->nama_alumni ?>">
                                </a>
                            </div>

                            <div class="">
                                <h4 class="m-b-5">
                                    <?= substr($data->nama_alumni, 0, 20) ?>
                                </h4>
                                <p class="text-muted">*
                                    <?= $data->nama_panggilan ?> <span> | </span>
                                    <span class="text-green">
                                        <?= $data->no_idnt ?></a> </span></p>
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

                            <a href="App?p=Profil&ID=<?= $data->no_idnt ?>&Secure=<?= $secure ?>" class="btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">
                                Lihat Profil
                            </a>
                        </div>
                    </div>
                </div> <!-- end col -->
                <?php endwhile; ?>
            </div>
        <!--</div>
    </div>--

<!-- jQuery  -->
<!--
<script src="Assets/js/jquery.min.js"></script>

<!--magnify image
<script type="text/javascript" src="Assets/vendors/magnific-popup/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
        //MAGNIFY IMAGE POPUP
$('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    mainClass: 'mfp-fade',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    }
});
//----------------------------------------------
</script>
-->
<?php } ?>