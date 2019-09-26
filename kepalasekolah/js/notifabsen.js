function masukabsen(link){
		var dataid={
			id_pegawai:link
		};

		$.ajax({
			type:"POST",
			url: "proses/loginproses.php",
			data: dataid,
			success:function(response){
				if (response == "success") {
						alert("ABSENSI BERHASIL");
						$("#absennotok").fadeOut();
						$("#absenok").fadeIn();
					} else if (response == "done") {
						alert("SUDAH MELAKUKAN ABSENSI");
					} else {
						alert("ABSENSI TIDAK BERHASIL")
					}
			}
		});
		return false;
}