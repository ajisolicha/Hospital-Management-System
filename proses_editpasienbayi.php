<?php  
   require_once('connect.php');

   	if(!empty($_POST['kode_rfid'])){
   		$kode_rfid = $_POST['kode_rfid'];
   		$tanggal_masuk = $_POST['tanggal_masuk'];
		$nama = $_POST['nama'];
		$penanggungjawab = $_POST['penanggungjawab'];
		$nik = $_POST['nik'];
   		$tanggal_lahir = $_POST['tanggal_lahir'];
   		$alamat = $_POST['alamat'];
   		$diagnosa = $_POST['diagnosa'];
		$dokter_penanggungjawab = $_POST['dokter_penanggungjawab'];
		$kategori_pasien = $_POST['kategori_pasien'];
   		$status_pasien = $_POST['status_pasien'];
   		$id = $_POST['id'];
		
   		$data[] = $kode_rfid;
   		$data[] = $tanggal_masuk;
		$data[] = $nama;
		$data[] = $penanggungjawab;
		$data[] = $nik;
		$data[] = $tanggal_lahir;
		$data[] = $alamat;
   		$data[] = $diagnosa;
   		$data[] = $dokter_penanggungjawab;
   		$data[] = $kategori_pasien;
   		$data[] = $status_pasien;
   		$data[] = $id;
		
   		$sql = "UPDATE `tb_pasien` SET kode_rfid=?,tanggal_masuk=?,nama=?,penanggungjawab=?,nik=?,
		tanggal_lahir=?,alamat=?,diagnosa=?,dokter_penanggungjawab=?,kategori_pasien=?,status_pasien=? WHERE id=?";
   		$row = $dbh->prepare($sql);
   		$row->execute($data);
		
   		echo '<script>alert("Berhasil Edit Data");window.location="index.php?halaman=pasien_bayi"</script>';
	   }
   
   	$id = $_GET['id'];
   	$sql = "SELECT * FROM `tb_pasien` WHERE `kategori_pasien` LIKE 'Bayi' ORDER BY `kategori_pasien`";
   	$row = $dbh->prepare($sql);
   	$row->execute(array($id));
   	$result = $row->fetch();

   ?>
   <!DOCTYPE HTML>
   <html>
   	<head>
   		<title>Edit Pasien Bayi</title>
   		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   	</head>
   	<body>
   		<div class="container">
   			 <br/>
   			 <h3>Edit - <?php echo $result['kode_rfid'];?></h3>
   			 <br/>
   			<div class="row">
   				 <div class="col-lg-6">
   					 <form action="" method="POST">
   						 <div class="form-group">
   							 <label>KODE RFID</label>
   							 <input type="text" value="<?php echo $result['kode_rfid'];?>" class="form-control" name="kode_rfid">
   						 </div>
   						 <div class="form-group">
   							 <label>Tanggal Masuk</label>
   							 <input type="text" value="<?php echo $result['tanggal_masuk'];?>" class="form-control" name="tanggal_masuk">
   						 </div>
   						 <div class="form-group">
   							 <label>Nama</label>
   							 <input type="text" value="<?php echo $result['nama'];?>" class="form-control" name="nama">
   						 </div>
   						 <div class="form-group">
   							 <label>Penanggung Jawab</label>
   							 <input type="text" value="<?php echo $result['penanggungjawab'];?>" class="form-control" name="penanggungjawab">
   						 </div>
   						 <div class="form-group">
   							 <label>NIK</label>
   							 <input type="text" value="<?php echo $result['nik'];?>" class="form-control" name="nik">
   						 </div>
   						 <div class="form-group">
   							 <label>Tanggal Lahir</label>
   							 <input type="text" value="<?php echo $result['tanggal_lahir'];?>" class="form-control" name="tanggal_lahir">
   						 </div>
   						 <div class="form-group">
   							 <label>Alamat</label>
   							 <input type="text" value="<?php echo $result['alamat'];?>" class="form-control" name="alamat">
   						 </div>
   						 <div class="form-group">
   							 <label>Diagnosa</label>
   							 <input type="text" value="<?php echo $result['diagnosa'];?>" class="form-control" name="diagnosa">
   						 </div>
   						 <div class="form-group">
   							 <label>Dokter Penanggung Jawab</label>
   							 <input type="text" value="<?php echo $result['dokter_penanggungjawab'];?>" class="form-control" name="dokter_penanggungjawab">
   						 </div>
   						 <div class="form-group">
   							 <label>Kategori Pasien</label>
   							 <input type="text" value="<?php echo $result['kategori_pasien'];?>" class="form-control" name="kategori_pasien">
   						 </div>
   						 <div class="form-group">
   							 <label>Status Pasien</label>
   							 <input type="text" value="<?php echo $result['status_pasien'];?>" class="form-control" name="status_pasien">
   						 </div>
   						 <input type="hidden" value="<?php echo $result['id'];?>" name="id">
   						 <button class="btn btn-primary btn-md" name="create"><i class="fa fa-edit"> </i> Update</button>
   					 </form>
   				  </div>
   			</div>
   		</div>
   	</body>
   </html>