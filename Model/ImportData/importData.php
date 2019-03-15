<?php
if(isset($_POST['prosesImport'])){

	require('Model/ImportData/excel_reader.php');
	require('Config/configDB.php');
	#require('Model/Other/fungsiPost.php');
	// membaca file excel yang diupload
	$data = new Spreadsheet_Excel_Reader($_FILES['fileImport']['tmp_name']);


	// membaca jumlah baris dari data excel
	$baris = $data->rowcount($sheet_index=0);
	// nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
	$sukses = 0;
	$gagal = 0;

	echo "<br><table>";

	for ($i=2; $i<=$baris; $i++){
		// MEMBACA DATA FIELD (kolom ke-1 FIELD)
  		$fieldz         = $data->val($i, 1);
  		//MEMBACA KONTEN
  		$namaAlumni 			= $data->val($i, 1);
  		$noIdnt 				= $data->val($i, 2);
  		$noInduk 				= $data->val($i, 3);
  		$jk 					= $data->val($i, 4);
  		$tempatLahir 			= $data->val($i, 5);
  		$tanggalLahir 			= $data->val($i, 6);
  		$agama 					= $data->val($i, 7);
  		$alamat 				= $data->val($i, 8);
  		$desa 					= $data->val($i, 9);
  		$kecamatan 				= $data->val($i, 10);
  		$kabupaten 				= $data->val($i, 11);
  		$provinsi 				= $data->val($i, 12);
  		$noTelp 				= $data->val($i, 13);
  		$email 					= $data->val($i, 14);

  		//QUERY CEK NO IDENTITAS
  		$sqlCheckNoIdnt 	= "SELECT no_idnt FROM alumni WHERE no_idnt = '$noIdnt'";
  		$checkNoIdnt 		= $db->query($sqlCheckNoIdnt);
  		$noIdntGanda 		= $checkNoIdnt->num_rows; 

  		//VALIDASI DATA
  		if($noIdnt == ""){
  			echo "<tr><td style='width: auto; text-align: left; vertical-align: middle;'>Gagal Impor Data <b>$namaAlumni</b>&nbsp;&nbsp;</td><td><font color=red> No. Identitas Kosong</font> 
  					Pastikan No. Identitas Tidak Kosong!</td> </tr>";
  		}elseif($noIdntGanda > 0){
  			echo "<tr><td style='width: auto; text-align: left; vertical-align: middle;'>Gagal Impor data alumni <b>$namaAlumni</b>&nbsp;&nbsp;</td><td><font color=red> No. Identitas $noIdnt</font> 
  					Sudah Ada</td> </tr>";
      		$gagal++;
  		}elseif($namaAlumni == ""){
  			echo "<tr><td style='width: auto; text-align: left; vertical-align: middle;'>Gagal Impor Data <b>$noIdnt</b>&nbsp;&nbsp;</td><td><font color=red> Nama Alumni Kosong</font> 
  					Pastikan Nama Tidak Kosong!</td> </tr>";
  		}elseif($noInduk == ""){
  			echo "<tr><td style='width: auto; text-align: left; vertical-align: middle;'>Gagal Impor Data <b>$namaAlumni</b>&nbsp;&nbsp;</td><td><font color=red> No. Induk Kosong</font> 
  					Pastikan No. Induk Tidak Kosong!</td> </tr>";
  		}elseif($jk == ""){
  			echo "<tr><td style='width: auto; text-align: left; vertical-align: middle;'>Gagal Impor Data <b>$namaAlumni</b>&nbsp;&nbsp;</td><td><font color=red> Jenis Kelamin Kosong</font> 
  					Pastikan Jenis Kelamin Tidak Kosong!</td> </tr>";
  		}elseif($tempatLahir == ""){
  			echo "<tr><td style='width: auto; text-align: left; vertical-align: middle;'>Gagal Impor Data <b>$namaAlumni</b>&nbsp;&nbsp;</td><td><font color=red> Tempat Lahir Kosong</font> 
  					Pastikan Tempat Lahir Tidak Kosong!</td> </tr>";
  		}elseif($tanggalLahir == ""){
  			echo "<tr><td style='width: auto; text-align: left; vertical-align: middle;'>Gagal Impor Data <b>$namaAlumni</b>&nbsp;&nbsp;</td><td><font color=red> Tanggal Lahir Kosong</font> 
  					Pastikan Tanggal Lahir Tidak Kosong!</td> </tr>";
  		}elseif($agama == ""){
  			echo "<tr><td style='width: auto; text-align: left; vertical-align: middle;'>Gagal Impor Data <b>$namaAlumni</b>&nbsp;&nbsp;</td><td><font color=red> Agama Kosong</font> 
  					Pastikan Agama Tidak Kosong!</td> </tr>";
  		}else{
  			//INPUT KE TABEL ALUMNI
  			$sqlInsertalumni 	= "INSERT INTO alumni(idAlumni, nama_alumni, no_idnt, no_induk, jenis_kelamin, tempat_lahir, 
                                            tgl_lahir, agama, alamat, desa, kecamatan, kabupaten, provinsi, no_telp, email)
                                	VALUES ('','$namaAlumni','$noIdnt','$noInduk','$jk','$tempatLahir','$tanggalLahir','$agama','$alamat',
                                	'$desa','$kecamatan','$kabupaten','$provinsi','$noTelp','$email')";
            $insertAlumni 		= $db->query($sqlInsertalumni) or die ($db->error);
            
            //INPUT KE TABEL BIODATA
            $sqlInsertBiodata 	= "INSERT INTO alumni_biodata_sespimma(idBiodata, no_idnt, nama_panggilan, pokja, pangkat, 
                                    jabatan, asal_pengiriman, suku_bangsa, status_menikah, suami_istri, hobi, pesan, kesan)
                                 VALUES ('','$noIdnt','-','-','-','-','-','-','-','-','-','-','-')";
            $inserBiodata 		= $db->query($sqlInsertBiodata) or die ($db->error);

            //INPUT KE TABEL USERS
    		$sqlInputUsers = "INSERT INTO users(idUsers, no_idnt, nama_tampilan, username, password, pass, foto, level, status, online) 
                        VALUES ('','$noIdnt','$namaAlumni','$noIdnt',md5('$noIdnt'),'$noIdnt','','2','Aktif','Off')";
    		$inputUsers = $db->query($sqlInputUsers);

            echo "<tr>
            			<td style='width: auto; text-align: left; vertical-align: middle;'>Berhasil Impor Data alumni Ke Database, Nama : <b>$namaAlumni</b>&nbsp;&nbsp;</td>
            			<td style='width: auto; text-align: left; vertical-align: middle;'><font color=green> No. Identitas : $noIdnt</font></td> 
            	 </tr>";
           	$sukses++;
  		}

  		// Calculate the percentation
		$percent = intval($i/$baris * 100)."%";
    	$dataProses = $i-1;
    	// Javascript for updating the progress bar and information
    	echo '<script src = "Assets/js/jquery.min.js"></script>
    		  <script language="javascript">
    		  	document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-image:url(Assets/images/pbar-ani1.gif);\">&nbsp;</div>";
    		  	document.getElementById("information").innerHTML="  Proses Membaca & Entri : '.$noIdnt.' ... <b>'.$dataProses.'</b> Data dari <b>'. $baris.'</b> Baris Data Terdeteksi.";
              </script>';

        // This is for the buffer achieve the minimum size in order to flush data
    	echo str_repeat(' ',1024*64);
    	// Send output to browser immediately
    	flush();
    	// Tell user that the process is completed
  		echo '<script language="javascript">document.getElementById("information").innerHTML="&nbsp; 
  				<b>Proses Impor Ke Database : Selesai</b>"</script>';
	} 
		echo "<b class='text-success'>&nbsp Jumlah Data Berhasil Masuk Ke Database : ".$sukses."</b>";
         if($gagal>0){
            echo "<b class='text-danger'>&nbsp Jumlah Data Gagal Masuk Ke Database : ".$gagal."</b>";
        }
        echo"<br><br>";
         
    ?>
	
<?php } ?>

</table>