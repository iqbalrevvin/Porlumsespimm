<?php
	require_once('../../Config/configDBObject.php');
	require_once('../../Config/configDB.php');
	require_once('../../Model/Other/fungsiPost.php');
	require_once('../../Model/Beranda/beranda.php');
	if(isset($_POST['pencarian'])){

		$pencarian	= post($_POST['inputPencarian']);

		$sql = "SELECT * FROM alumni JOIN alumni_biodata_sespimma ON alumni.no_idnt = alumni_biodata_sespimma.no_idnt 
				WHERE alumni.nama_alumni LIKE '%$pencarian%' OR alumni_biodata_sespimma.nama_panggilan LIKE '%$pencarian%'
				OR alumni.no_idnt LIKE '%$pencarian%' OR alumni.no_induk LIKE '%$pencarian%' 
				OR alumni_biodata_sespimma.jabatan LIKE '%$pencarian%' ORDER BY idAlumni LIMIT 25";

		$execution 	= $db->query($sql) or die ($db->error); 
		$numRows 	= $execution->num_rows; 

?>
		<ul class="nav nav-tabs tabs-bordered">
           
                <li class="nav-item">
                    <a href="#users" data-toggle="tab" aria-expanded="false" class="nav-link active">
                        Kata Kunci Pencarian : <?= $pencarian ?> <span class="badge badge-danger ml-1"><?= $numRows ?></span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- Users tab -->
                <div class="tab-pane active" id="users">
                <?php if($numRows > 0){ ?>
                    <!--LOOPING RESULT SEARCH-->
                    <?php while($data = $execution->fetch_object()): 
                	   $highlight	         ='<b class="text-primary">'.$pencarian.'</b>';
                       $highlight2           ='<span class="text-primary">'.$pencarian.'</span>';
					   $keyword 	         = str_ireplace($pencarian, $highlight, $data->nama_alumni);
                       $keywordNoIdnt        = str_ireplace($pencarian, $highlight2, $data->no_idnt);
                       $keywordJabatan       = str_ireplace($pencarian, $highlight2, $data->jabatan);
					   $secure 	= md5(md5($data->no_idnt).md5('date(yyyymmddH)'));
				    ?>
                        <div class="search-item">
                            <div class="media">
                                <img class="d-flex mr-3 rounded-circle" src="Assets/images/users/small_<?= $beranda->fotoProfil($data->pas_foto) ?>" 
                                alt="Sespimma <?= $data->nama_alumni ?>" height="54">
                                <div class="media-body">
                                    <h5 class="media-heading">
                                        <a href="App?p=Profil&ID=<?= $data->no_idnt ?>&Secure=<?= $secure ?>" class="text-dark"><?= $keyword ?></a>
                                    </h5>
                                    <p class="font-13">
                                        <b>Panggilan:</b>
                                        <span><a href="#" class="text-muted">*<?= $data->nama_panggilan ?></a></span>
                                        <br>
                                        <b>No. Identitas:</b>
                                        <span><a href="#" class="text-muted">*<?= $keywordNoIdnt ?></a></span>
                                        <br>
                                        <b>Jabatan:</b>
                                        <span><a href="#" class="text-muted">*<?= $keywordJabatan ?></a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                        <div class="clearfix"></div>
                <?php }else{ ?>
                        <div class="alert alert-danger fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                             Mohon Maaf, Tidak Ditemukan Alumni Untuk Kata Kunci : <b class="text-primary"><?= $pencarian ?></b>
                         </div>
                <?php } ?>
                </div>
                <!-- end Users tab -->
            </div>
	<?php } ?>

