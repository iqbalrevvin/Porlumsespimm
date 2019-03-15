<?php @session_start(); ?>
<?php require_once('../../Config/configDBObject.php'); ?>
<?php require_once('../../Model/KelolaAlumni/tabelKelolaAlumni.php'); ?>
<?php require_once('../../Model/Session/sessionType.php'); ?>
<?php require_once('../../Model/Other/fungsiTanggal.php'); ?>

  <table id="" class="table table-striped table-bordered dt-responsive nowrap responsive-datatable" 
        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead bgcolor="#B8860B" align="center">
        <tr>
            <th>No.</th>
            <th>Act</th>
            <th>Nama</th>
            <th>No. Identitas</th>
            <th>No. Induk</th>
            <th>JK</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>No. Telp</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Desa</th>
            <th>Kecamatan</th>
            <th>Kab/Kota</th>
            <th>Provinsi</th>
        </tr>
    </thead>

    <tbody>
        <?php
            date_default_timezone_set('Asia/Jakarta');
            $no = 1; 
            $dataAlumni = $kelolaAlumni->tabelKelolaAlumni();
            while($data = $dataAlumni->fetch_object()):
                $secure= md5(md5($data->no_idnt).md5('date(yyyymmddH)'));

        ?>
        <tr>
            <td>
                <?= $no++ ?>
                <i id="loadDeleteAlumni<?= $data->idAlumni ?>"></i>
            </td>
            <td>
                <?php if($data->no_idnt != sessionType()){ ?>
                    <button type="button" class="btn btn-sm btn-outline-danger waves-light waves-effect " 
                        data-delete="<?= $data->nama_alumni ?>" data-id="<?= $data->idAlumni ?>" 
                        value="<?= $data->no_idnt ?>" id="btnDeleteAlumni">
                        <i class="mdi mdi-account-remove "></i>
                    </button>
                <?php }else{ ?>
                    <button type="button" class="btn btn-sm btn-outline-danger waves-light waves-effect " 
                        data-delete="<?= $data->nama_alumni ?>" data-id="<?= $data->idAlumni ?>" 
                        value="<?= $data->no_idnt ?>" disabled>
                        <i class="mdi mdi-account-remove "></i>
                    </button>
                <?php } ?>
            </td>
            <td>
                <a href="App?p=Profil&ID=<?= $data->no_idnt ?>&Secure=<?= $secure ?>" class="text-dark"><b>
                    <?= $data->nama_alumni ?></b></a>
            </td>
            <td>
                <?= $data->no_idnt ?>
            </td>
            <td>
                <?= $data->no_induk ?>
            </td>
            <td>
                <?= $data->jenis_kelamin ?>
            </td>
            <td>
                <?= $data->tempat_lahir ?>
            </td>
            <td>
                <?= tglIndo($data->tgl_lahir) ?>
            </td>
            <td>
                <?= $data->agama ?>
            </td>
            <td>
                <?= $data->no_telp ?>
            </td>
            <td>
                <?= $data->email ?>
            </td>
            <td>
                <?= $data->alamat ?>
            </td>
            <td>
                <?= $data->desa ?>
            </td>
            <td>
                <?= $data->kecamatan ?>
            </td>
            <td>
                <?= $data->kabupaten ?>
            </td>
            <td>
                <?= $data->provinsi ?>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>