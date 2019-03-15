<div id="modal-AddAlumni" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-uppercase text-center m-b-30">
                    <a href="index.html" class="text-success">
                        <span><img src="Assets/images/sespimma-logo-wide.png" alt="" height="65"></span>
                    </a>
                </h2>

                <div class="row">
                    <div class="col-12">
                        <h4 class="m-t-0 header-title">Tambah Data Utama Alumni</h4>
                        <p class="text-muted m-b-30 font-14">
                            Inputkan data utama alumni sesuai validasi form yang tersedia.
                        </p>
                        <div class="row">
                            <div class="col-12">
                                <div class="p-20">
                                    <form class="form-horizontal" role="form" id="formAddAlumni">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Nama Lengkap*</label>
                                            <div class="col-10">
                                                <input type="text" class="form-control placement" maxlength="100" 
                                                        name="namaLengkap" id="namaLengkap" 
                                                        placeholder="Input Nama Lengkap Beserta Gelar" required />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">No. Identitas*</label>
                                            <div class="col-5">
                                                <input type="text" class="form-control placement" maxlength="16" 
                                                        name="noIdnt" id="noIdnt" 
                                                        onkeypress="return inputAngka(event)" pattern="[0-9]+" 
                                                        placeholder="Input No. Identitas Maximal 16 Digit" required />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">No. Induk/NRP*</label>
                                            <div class="col-5">
                                                <input type="text" class="form-control placement" maxlength="20" 
                                                        name="noInduk" id="noInduk" 
                                                        onkeypress="return inputAngka(event)" pattern="[0-9]+" 
                                                        placeholder="Input No. Identitas Maximal 20 Digit" required />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label" for="example-email">Jenis Kelamin*</label>
                                            <div class="col-3">
                                                <select name="jk" id="jk" class="selectpicker m-b-0" data-style="btn-light" required>
                                                    <option data-icon="mdi mdi-gender-male" value="L">
                                                        Laki-Laki
                                                    </option>
                                                    <option data-icon="mdi mdi-gender-female" value="P">
                                                        Perempuan
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control placement" maxlength="50" 
                                                        name="tempatLahir" id="tempatLahir" 
                                                        placeholder="Input Tempat Lahir Maximal 50 Karakter" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-5">
                                                <input type="text" placeholder="Input Tanggal Lahir Sesuai Format" 
                                                        data-mask="9999-99-99" class="form-control" 
                                                        name="tanggalLahir" id="tanggalLahir">
                                                <span class="font-14 text-muted">
                                                    Contoh Format : yyyy-mm-dd(tahun-bulan-hari)
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label" for="example-email">Agama</label>
                                            <div class="col-3">
                                                <select name="agama" id="agama" class="selectpicker m-b-0" data-style="btn-light">
                                                    <option value="Islam">
                                                        Islam
                                                    </option>
                                                    <option value="Kristen">
                                                        Kristen
                                                    </option>
                                                    <option value="Khatolik">
                                                        Khatolik
                                                    </option>
                                                    <option value="Hindu">
                                                        Hindu
                                                    </option>
                                                    <option value="Budha">
                                                        Budha
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Alamat</label>
                                            <div class="col-10">
                                                <textarea class="form-control textarea" maxlength="225" rows="3" placeholder="Input Alamat Maximal 225 Karakterk" name="alamat" id="alamat"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Desa</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control placement" maxlength="75" 
                                                        name="desa" id="desa" placeholder="Input Desa Maximal 75 Karakter" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Kecamatan</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control placement" maxlength="75" 
                                                        name="kecamatan" id="kecamatan" 
                                                        placeholder="Input Kecamatan Maximal 75 Karakter" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Kabupaten / Kota</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control placement" maxlength="75" 
                                                        name="kabupaten" id="kabupaten" 
                                                        placeholder="Input Kabupaten / Kota Maximal 75 Karakter" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Provinsi</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control placement" maxlength="75" 
                                                        name="provinsi" id="provinsi" 
                                                        placeholder="Input Provinsi / Kota Maximal 75 Karakter" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">No. Hp / WA</label>
                                            <div class="col-4">
                                                <input type="text" class="form-control placement" maxlength="14" 
                                                        name="noHp" id="noHp" 
                                                        onkeypress="return inputAngka(event)" pattern="[0-9]+" 
                                                        placeholder="Input No. Hp/WA Maximal 14 Digit" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">E-Mail</label>
                                            <div class="col-9">
                                                <input type="email" class="form-control placement" maxlength="50" 
                                                        name="email" id="email" 
                                                        placeholder="Input Provinsi / Kota Maximal 75 Karakter" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-dark waves-effect waves-light" 
                                                        id="btnAddAlumni"> 
                                                    <i class="mdi mdi-file-send"></i> 
                                                    <span>Simpan</span> 
                                                </button>
                                                <div id="loadAddAlumni"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                    </div><!-- end col -->

                    <!-- end row -->
                </div>
                <hr>
                <div class="form-group account-btn text-center m-t-10">
                    <div class="col-12">
                        <button class="btn w-lg btn-rounded btn-danger waves-effect waves-light" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->