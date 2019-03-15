
    <div class="form-group row">
        <label class="col-3 col-form-label">Foto Profil</label>
        <div class="col-9">
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: auto; height: 100px;">
                    <img src="Assets/images/users/<?= $profil->profilAlumni_pasFoto($ID) ?>" alt="image" class="img-fluid" />
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                <div>
                    <input type="file" class="btn-custom btn-file" name="foto" id="foto" accept="image/*" />
                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Pilih Foto</span>
                    <br>
                    <span class="fileupload-exists">
                        <i class="fa fa-undo"></i> Pilih Kembali foto, atau klik tombol <b><i class="mdi mdi-upload"></i>Upload</b> untuk mengupload foto
                    </span>
                    <br>
                    <button type="submit" name="uploadFotoProfil" class="btn btn-danger fileupload-exists"><i class="mdi mdi-upload"></i> Upload</button>
                </div>
            </div>

            <div class="alert alert-info">
                <strong>Peringatan!</strong> Agar ukuran foto terlihat ideal, hindari ukuran foto berbentuk persegi dan juga terlalu panjang.
            </div>
        </div>
    </div>

<hr>

<?php require('Model/Profil/editFotoProfil.php'); ?>

