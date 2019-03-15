<?php
@session_start();
require_once('../../Config/configDB.php');
require_once('../../Model/Other/fungsiPost.php'); 

$namaLengkap        = post($_POST['namaLengkap']);
$noIdnt             = post($_POST['noIdnt']);
$noInduk            = post($_POST['noInduk']);
$jk                 = post($_POST['jk']);
$tanggalLahir       = post($_POST['tanggalLahir']);
$tempatLahir        = post($_POST['tempatLahir']);
$agama              = post($_POST['agama']);
$alamat             = post($_POST['alamat']);
$desa               = post($_POST['desa']);
$kecamatan          = post($_POST['kecamatan']);
$kabupaten          = post($_POST['kabupaten']);
$provinsi           = post($_POST['provinsi']);
$noHp               = post($_POST['noHp']);
$email              = post($_POST['email']);

$sqlChekNoIdnt = "SELECT no_idnt FROM alumni WHERE no_idnt = '$noIdnt' OR no_induk = '$noInduk' ";
$checkNoIdnt = $db->query($sqlChekNoIdnt);
if($checkNoIdnt->num_rows > 0){
    ?><script type="text/javascript">
            swal("MOHON MAAF", "No. Identitas / No. Induk Yang Anda Input Sudah Tersedia", "warning");
    </script><?php
}else{
    //INPUT DATA KE TABEL ALUMNI
    $sqlInputAlumni = "INSERT INTO alumni(idAlumni, nama_alumni, no_idnt, no_induk, jenis_kelamin, tempat_lahir, 
                                            tgl_lahir, agama, alamat, desa, kecamatan, kabupaten, provinsi, no_telp, email) 
                        VALUES ('','$namaLengkap','$noIdnt','$noInduk','$jk','$tempatLahir','$tanggalLahir','$agama','$alamat',
                                '$desa','$kecamatan','$kabupaten','$provinsi','$noHp','$email')";
    $inputAlumni = $db->query($sqlInputAlumni);

    //INPUT DATA KE TABEL BIODATA
    $sqlInputBiodata = "INSERT INTO alumni_biodata_sespimma(idBiodata, no_idnt, nama_panggilan, pokja, pangkat, 
                                    jabatan, asal_pengiriman, suku_bangsa, status_menikah, suami_istri, hobi, pesan, kesan) 
                        VALUES ('','$noIdnt','-','-','-','-','-','-','-','-','-','-','-')";
    $inputBiodata = $db->query($sqlInputBiodata);

    //INPUT DATA KE TABEL USERS
    $sqlInputUsers = "INSERT INTO users(idUsers, no_idnt, nama_tampilan, username, password, pass, foto, level, status, online) 
                        VALUES ('','$noIdnt','$namaLengkap','$noIdnt',md5('$noIdnt'),'$noIdnt','','2','Aktif','Off')";
    $inputUsers = $db->query($sqlInputUsers);

        ?><script type="text/javascript">
                swal("DATA TERKIRIM", "Data Alumni Berhasil Ditambahkan, Username & Password Akun Default adalah (No. Identitas)", "success");
        </script><?php

}




?>

<!--<script type="text/javascript">
            swal({
                title: "DATA TERKIRIM",
                text: "Data Alumni Berhasil Di Ditambahkan",
                type: "success",
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
                }, function () {
                        setTimeout(function () {
                            window.location.reload();
                        }, 1500);
                    });
        </script>-->















