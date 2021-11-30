<?php  
   require_once('connect.php');

   	 
   	if(!empty($_POST['tag_id'])){
   		$tag_id = $_POST['tag_id'];
   		$tanggal_masuk = $_POST['tanggal_masuk'];
		$jenis_pasien = $_POST['jenis_pasien'];
		$nama_pasien = $_POST['nama_pasien'];
		$dokter = $_POST['dokter'];
   		$diagnosa = $_POST['diagnosa'];
   		$status = $_POST['status'];
   		$asal_ruang = $_POST['asal_ruang'];
		$ruang_pemindahan = $_POST['ruang_pemindahan'];
   		$id = $_POST['id'];
		
   		$data[] = $tag_id;
   		$data[] = $tanggal_masuk;
		$data[] = $jenis_pasien;
		$data[] = $nama_pasien;
		$data[] = $dokter;
		$data[] = $diagnosa;
		$data[] = $status;
   		$data[] = $asal_ruang;
   		$data[] = $ruang_pemindahan;
   		$data[] = $id;
	
		
   		$sql = "UPDATE `tb_clinical_pasien` SET tag_id=?,tanggal_masuk=?,jenis_pasien=?,nama_pasien=?,dokter=?,
		diagnosa=?,status=?,asal_ruang=?,ruang_pemindahan=? WHERE id=?";
   		$row = $dbh->prepare($sql);
   		$row->execute($data);
		
   		echo '<script>alert("Berhasil Edit Data");window.location="index.php?halaman=clinicalmng-pasien"</script>';
	   }
   
   	$id = $_GET['id'];
   	$sql = "SELECT *FROM `tb_clinical_pasien` WHERE id= ?";
   	$row = $dbh->prepare($sql);
   	$row->execute(array($id));
   	$result = $row->fetch();
   ?>
   <!DOCTYPE HTML>
   <html>
   	<head>
   		<title>Edit - <?php echo $result['tag_id'];?></title>
   		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   	</head>
   	<body>
   		<div class="container">
   			 <br/>
   			 <h3>Edit - <?php echo $result['tag_id'];?></h3>
   			 <br/>
   			<div class="row">
   				 <div class="col-lg-6">
   					 <form action="" method="POST">
   						 <div class="form-group">
   							 <label>TAG ID</label>
   							 <input type="text" value="<?php echo $result['tag_id'];?>" class="form-control" name="tag_id">
   						 </div>
   						 <div class="form-group">
   							 <label>TANGGAL MASUK</label>
   							 <input type="text" value="<?php echo $result['tanggal_masuk'];?>" class="form-control" name="tanggal_masuk">
   						 </div>
   						 <div class="form-group">
   							 <label>JENIS PASIEN</label>
   							 <input type="text" value="<?php echo $result['jenis_pasien'];?>" class="form-control" name="jenis_pasien">
   						 </div>
   						 <div class="form-group">
   							 <label>NAMA PASIEN</label>
   							 <input type="text" value="<?php echo $result['nama_pasien'];?>" class="form-control" name="nama_pasien">
   						 </div>
   						 <div class="form-group">
   							 <label>DOKTER</label>
   							 <input type="text" value="<?php echo $result['dokter'];?>" class="form-control" name="dokter">
   						 </div>
   						 <div class="form-group">
   							 <label>DIAGNOSA</label>
   							 <input type="text" value="<?php echo $result['diagnosa'];?>" class="form-control" name="diagnosa">
   						 </div>
   						 <div class="form-group">
   							 <label>STATUS</label>
   							 <input type="text" value="<?php echo $result['status'];?>" class="form-control" name="status">
   						 </div>
   						 <div class="form-group">
   							 <label>ASAL RUANG</label>
   							 <input type="text" value="<?php echo $result['asal_ruang'];?>" class="form-control" name="asal_ruang">
   						 </div>
   						 <div class="form-group">
   							 <label>RUANG PEMINDAHAN</label>
   							 <input type="text" value="<?php echo $result['ruang_pemindahan'];?>" class="form-control" name="ruang_pemindahan">
   						 </div>
   						 <input type="hidden" value="<?php echo $result['id'];?>" name="id">
   						 <button class="btn btn-primary btn-md" name="create"><i class="fa fa-edit"> </i> Update</button>
   					 </form>
   				  </div>
   			</div>
   		</div>
   	</body>
   </html>