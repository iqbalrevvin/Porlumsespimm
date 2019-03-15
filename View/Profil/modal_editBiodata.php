<div id="modal-editBiodata" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-uppercase text-center m-b-30">
                    <a href="./" class="text-success">
                        <span><img src="Assets/images/sespimma-logo-wide.png" alt="" height="65"></span>
                    </a>
                </h2>

                <div class="row">
                    <div class="col-12">
                        <h4 class="m-t-0 header-title">Edit Biodata <?= $data->nama_tampilan ?></h4>
                        <p class="text-muted m-b-30 font-14">
                            Inputkan Biodata / Data Tambahan Alumni Sesuai Form & Validasi Yang Tersedia.
                        </p>
                        <div class="row">
                            <div class="col-12">
                                <div class="p-20">
                                    <form class="form-horizontal" role="form" id="formEditBiodata">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Nama Panggilan</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control placement" maxlength="100" 
                                                        name="namaPanggilan" id="namaPanggilan" value="<?= $data->nama_panggilan ?>" 
                                                        placeholder="Input Nama Panggilan" required />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label" for="example-email">POKJA</label>
                                            <div class="col-3">
                                                <select name="pokja" id="pokja" class="selectpicker m-b-0" data-style="btn-light">
                                                    <option value="<?= $data->pokja ?>">
                                                        <?= $data->pokja ?>
                                                    </option>
                                                    <option value="A">
                                                        A
                                                    </option>
                                                    <option value="B">
                                                        B
                                                    </option>
                                                    <option value="C">
                                                        C
                                                    </option>
                                                    <option value="D">
                                                        D
                                                    </option>
                                                    <option value="E">
                                                        E
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label" for="example-email">Pangkat</label>
                                            <div class="col-3">
                                                <select name="pangkat" id="pangkat" class="selectpicker m-b-0" data-style="btn-light">
                                                    <option value="<?= $data->pangkat ?>">
                                                        <?= $data->pangkat ?>
                                                    </option>
                                                    <?php if($data->pangkat == 'KOMPOL'){ ?>
                                                        <option value="AKP">
                                                            AKP
                                                        </option>
                                                    <?php }elseif($data->pangkat == 'AKP'){ ?>
                                                        <option value="KOMPOL">
                                                            KOMPOL
                                                        </option>
                                                    <?php }else{ ?>
                                                        <option value="AKP">
                                                            AKP
                                                        </option>
                                                        <option value="KOMPOL">
                                                            KOMPOL
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Jabatan</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control placement" maxlength="100" 
                                                        name="jabatan" id="jabatan" value="<?= $data->jabatan ?>" 
                                                        placeholder="Input Jabatan Alumni" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Asal Pengiriman</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control placement" maxlength="100" 
                                                        name="asalPengiriman" id="asalPengiriman" value="<?= $data->asal_pengiriman ?>" 
                                                        placeholder="Input Asal Pengiriman Alumni" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Suku Bangsa</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control placement" maxlength="50" 
                                                        name="sukuBangsa" id="sukuBangsa" value="<?= $data->suku_bangsa ?>" 
                                                        placeholder="Input Suku Bangsa Alumni" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label" for="example-email">Status</label>
                                            <div class="col-3">
                                                <select name="statusMenikah" id="statusMenikah" class="selectpicker m-b-0" data-style="btn-light">
                                                    <option value="<?= $data->status_menikah ?>">
                                                        <?= $data->status_menikah ?>
                                                    </option>
                                                    <?php if($data->status_menikah == 'Menikah'){ ?>
                                                        <option value="Belum Menikah">
                                                            Belum Menikah
                                                        </option>
                                                    <?php }else{ ?>
                                                        <option value="Menikah">
                                                            Menikah
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Nama Suami/Istri</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control placement" maxlength="100" 
                                                        name="suamiIstri" id="suamiIstri" value="<?= $data->suami_istri ?>" 
                                                        placeholder="Input Nama Suami / Istri Alumni" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Nama Anak</label>
                                            <div class="col-10">
                                                <textarea class="form-control textarea" maxlength="225" rows="3" value="<?= $data->nama_anak ?>" 
                                                          name="namaAnak" id="namaAnak"><?= $data->nama_anak ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Hobi</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control placement" maxlength="100" 
                                                        name="hobi" id="hobi" value="<?= $data->hobi ?>" 
                                                        placeholder="Input Hobi Alumni" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Pasan Alumni</label>
                                            <div class="col-10">
                                                <textarea class="form-control textarea" maxlength="225" rows="3" value="<?= $data->pesan ?>" 
                                                          name="pesan" id="pesan"><?= $data->pesan ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Kesan Alumni</label>
                                            <div class="col-10">
                                                <textarea class="form-control textarea" maxlength="225" rows="3" value="<?= $data->kesan ?>" 
                                                          name="kesan" id="kesan"><?= $data->kesan ?></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" id="id" value="<?= $ID ?>">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-dark waves-effect waves-light" 
                                                        id="btnEditBiodata" value="<?= $ID ?>"> 
                                                    <i class="mdi mdi-file-send"></i> 
                                                    <span>Simpan</span> 
                                                </button>
                                                <div id="loadEditBiodata"></div>
                                                <div id="resultEditBiodata"></div>
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