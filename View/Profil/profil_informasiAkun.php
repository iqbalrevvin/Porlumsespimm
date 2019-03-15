<div class="card-box ribbon-box">
    <div class="ribbon ribbon-danger">Informasi Akun</div>
    <div class="clearfix"></div>
    <div class="inbox-widget">
        <div class="row">
            <div class="col-12">
                <h4 class="m-t-0 header-title">Form Iformasi Akun</h4>
                <p class="text-muted m-b-30 font-14">
                    Silahkan edit pada bagian ini untuk memperbarui informasi akun dari
                    <?= $data->nama_alumni ?>.
                </p>
                <div class="row">
                    <div class="col-12">
                        <div class="p-20">
                            <form action="#" class="form-horizontal" enctype="multipart/form-data" method="post">
                            <?php if($ID == sessionType()){ ?>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Nama Tampilan</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control placement" maxlength="100" id="editNamaTampilan" placeholder="Nama Yang Akan Ditampilkan Pada Pengguna" value="<?= $data->nama_tampilan ?>" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-dark waves-effect waves-light" id="btnEditNamaTampilan" 
                                                value="<?= $ID ?>">
                                            <i class="mdi mdi-file-send"></i>
                                            <span>Perbarui Nama Tampilan</span>
                                        </button>
                                        <div id="loadEditNamaTampilan"></div>
                                    </div>
                                </div>
                                <hr>

                                <!--INFORMASI USERNAME-->
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Nama Pengguna</label>
                                    <div class="col-9">
                                        <input type="username" class="form-control placement" maxlength="25" id="username" name="username"
                                                placeholder="Nama Pengguna Akun / Username" value="<?= $data->username ?>" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-dark waves-effect waves-light" id="btnEditUsername" value="<?= $ID ?>">
                                            <i class="mdi mdi-file-send"></i>
                                            <span>Perbarui Nama Pengguna</span>
                                        </button>
                                        <div id="loadEditUsername"></div>
                                        <div id="resultEditUsername"></div>
                                    </div>
                                </div>
                                <hr>

                                <!--INFORMASI KATA SANDI-->
                                <input type="hidden" value="<?= $data->pass ?>" id="valPassOld" >
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">kata Sandi Lama</label>
                                    <div class="col-5">
                                        <input type="password" class="form-control placement" maxlength="25" id="passowrdOld" 
                                        placeholder="<?= $data->password ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">kata Sandi Baru</label>
                                    <div class="col-5">
                                        <input type="password" class="form-control placement" maxlength="25" id="password" 
                                        placeholder="Masukan Kata Sandi Baru" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Konfirmasi Kata Sandi</label>
                                    <div class="col-5">
                                        <input type="password" class="form-control placement" maxlength="25" id="password2" 
                                        placeholder="Masukan Kembali Kata Sandi" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-dark waves-effect waves-light" id="btnEditPassword" value="<?= $ID ?>">
                                            <i class="mdi mdi-file-send"></i>
                                            <span>Perbarui Kata Sandi</span>
                                        </button>
                                        <div id="loadEditPassword"></div>
                                    </div>
                                </div>
                                <hr>
                                <!--EDIT FOTO PROFIL-->
                                <?php require('View/Profil/editFotoProfil.php'); ?>
                                <!--//////////////////-->
                                <?php } ?>
                                
                                <!--INFORMASI LEVEL HAK AKSES-->
                                <?php if(@$_SESSION['Administrator']){ ?>
                                    <?php if($ID != sessionType()){ ?>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label" for="example-email">Level Hak Akses</label>
                                            <div class="col-4">
                                                <select id="level" class="selectpicker m-b-0" data-style="btn-light" required>
                                        	       <option data-icon="mdi mdi-account-check" value="">
                                                        <?= $user->levelName($ID) ?>
                                                    </option>
                                                    <?php if($data->level == '1'){ ?>
                                                        <option data-icon="mdi mdi-account-multiple" value="2">
                                                            Sebagai Alumni
                                                        </option>
                                                    <?php }else{ ?>
                                                        <option data-icon="mdi mdi-account-key" value="1">
                                                            Sebagai Administrator
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-dark waves-effect waves-light" id="btnEditLevel" 
                                                        value="<?= $ID ?>">
                                                    <i class="mdi mdi-file-send"></i>
                                                    <span>Perbarui Hak Akses</span>
                                                </button>
                                                <div id="loadLevel"></div>
                                            </div>
                                        </div>
                                        <hr>
                                        
                                        <!--INFORMASI STATUS AKUN-->
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label" for="example-email">Status Akun</label>
                                            <div class="col-4">
                                                <select id="statusAkun" class="selectpicker m-b-0" data-style="btn-light" required>
                                                    <option data-icon="" value="">
                                                        <?= $data->status ?>
                                                    </option>
                                                    <?php if($data->status == 'Nonaktif'){ ?>
                                                        <option data-icon="mdi mdi-account-check" value="Aktif">
                                                            Aktifkan
                                                        </option>
                                                    <?php }else{ ?>
                                                        <option data-icon="mdi mdi-account-off" value="Nonaktif">
                                                            NonAktifkan
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-dark waves-effect waves-light" id="btnEditStatus" 
                                                        value="<?= $ID ?>">
                                                    <i class="mdi mdi-file-send"></i>
                                                    <span>Perbarui Status Akun</span>
                                                </button>
                                                <div id="loadStatusAkun"></div>
                                            </div>
                                        </div>
                                        <hr>
                                    <?php } ?>
                                <?php } ?>

                            </form>
                        </div>
                    </div>

                </div>
                <!-- end row -->


            </div><!-- end col -->

            <!-- end row -->
        </div>
        <!--TOMBOL RESET AKUN-->
        <?php if(@$_SESSION['Administrator']){ ?>
        <div class="form-group account-btn text-center m-t-10">
            <div class="col-12">
                <button type="button" class="btn btn-danger waves-effect waves-light" id="btnResetAkun" value="<?= $ID ?>">
                    <i class="mdi mdi-account-convert"></i>
                    <span>Reset Akun</span>
                </button>
                <div id="resultResetAkun"></div>
            </div>
        </div>
        <?php } ?>
        <!--/////////////////->

    </div>
</div>