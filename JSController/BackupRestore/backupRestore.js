$(document).ready(function(){
	//BACKUP-DATABASE
	$(document).on('click', '#btnBackup', function(){
		swal({
            title: "BACKUP DATABSE",
            text: "Database Pada Aplikasi Akan di Backup!",
            showCancelButton: true,
            confirmButtonColor: "#009688",
            confirmButtonText: "BACKUP",
            cancelButtonText: "BATALKAN",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function(isConfirm) {
            if (isConfirm) {
                $("#loadBackup").show().html("<b>Membackup Database</b> <img src='Assets/images/loading.gif' width='150' height='25' >");
                $.ajax({
                    type: "POST",
                    url: "Model/BackupRestore/backupDatabase.php",
                    data: {
                        backup: 1,
                    },
                    success: function(result) {
                        $("#loadBackup").hide();
                        $("#resultBackup").html(result);
                        $("#resultBackup").fadeIn();
                        swal({
                            title: "BACKUP BERHASIL",
                            text: "Database Aplikasi Berhasil Di Backup, Silahkan Klik Tombol ''UNDUH HASIL BACKUP''",
                            type: "success",
                            closeOnConfirm: false,
                            showLoaderOnConfirm: true,
                        });
                    }
                });
            } else {
                swal("Cancelled", "Tindakan di Batalkan :)", "error");
                $("#loadBackup").hide();
            }
        });
	});
	//-------------------------------------------------------------------------------------------------------

	//DOWNLOAD DATABASE SESPIMMA
    $(document).on('click', '#btnDownloadBackup', function() {
        $("#loadDownload").show().html("<b>Memeriksa File Database</b> <img src='Assets/images/loading.gif' width='150' height='25' >");
        $.ajax({
            type: "POST",
            url: "Model/BackupRestore/downloadDatabase.php",
            data: {
                downloadDatabase: 1,
            },
            success: function(result) {
                $("#loadDownload").hide();
                $("#resultDownload").html(result);
                
            }
        });
    });

    // IMPORT DATABASE
    $(document).on('click', '#btnImportDatabase', function() {
        if ($('#fileImport').val() == "") {
            swal("FILE DATABASE TIDAK ADA !", "Mohon Pilih Dahulu File Yang Akan Di Import!", "warning");
        } else {
            swal({
                title: "RESTORE DATABSE",
                text: "Yakin untuk melakukan RESTORE Database? ",
                showCancelButton: true,
                confirmButtonColor: "#f1556c",
                confirmButtonText: "RESTORE!",
                cancelButtonText: "BATALKAN!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    $("#loadRestoreDatabase").show().html("<b>Memeriksa & Merestore Database</b> <img src='Assets/images/loading.gif' width='150' height='25' >");
                    $.ajax({
                        type: "POST",
                        url: "Model/BackupRestore/restoreDatabase.php",
                        data: {
                            prosesRestore: 1,
                        },
                        success: function(result) {
                            $("#resultRestore").html(result);
                            $("#loadRestoreDatabase").hide();
                        }
                    });
                } else {
                    swal("Cancelled", "Tindakan di Batalkan :)", "error");
                    $("#loadRestoreDatabase").hide();
                }
            });
        }
    });

});