<?php  
   require_once('connect.php');

   	 
   	if(!empty($_POST['NAMA'])){
   		$NAMA = $_POST['NAMA'];
   		$JOB = $_POST['JOB'];
   		$TELEPON = $_POST['TELEPON'];
   		$RUANG = $_POST['RUANG'];
   		$KETERANGAN = $_POST['KETERANGAN'];
   		$MASUK = $_POST['MASUK'];
        $PULANG = $_POST['PULANG'];
   		$id = $_POST['ID'];
		
   		$data[] = $NAMA;
   		$data[] = $JOB;
   		$data[] = $TELEPON;
   		$data[] = $RUANG;
   		$data[] = $KETERANGAN;
   		$data[] = $MASUK;
        $data[] = $PULANG;
   		$data[] = $id;
	
		
   		$sql = "UPDATE `tm_activityreport` SET NAMA=?,JOB=?,TELEPON=?,RUANG=?,KETERANGAN=?,MASUK=?,PULANG=? WHERE id=?";
   		$row = $dbh->prepare($sql);
   		$row->execute($data);
		
   		echo '<script>alert("Berhasil Edit Data");window.location="index.php?halaman=tenagamedis-activityreport"</script>';
	   }
   
   	$id = $_GET['id'];
   	$sql = "SELECT *FROM `tm_activityreport` WHERE ID= ?";
   	$row = $dbh->prepare($sql);
   	$row->execute(array($id));
   	$result = $row->fetch();
   ?>
   <!DOCTYPE HTML>
   <html>
   	<head>
   		<title>Edit - <?php echo $result['NAMA'];?></title>
   		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   	</head>
   	<body>
   		<div class="container">
   			 <br/>
   			 <h3>Edit - <?php echo $result['NAMA'];?></h3>
   			 <br/>
   			<div class="row">
   				 <div class="col-lg-6">
   					 <form action="" method="POST">
   						 <div class="form-group">
   							 <label>NAMA</label>
   							 <input type="text" value="<?php echo $result['NAMA'];?>" class="form-control" name="NAMA">
   						 </div>
   						 <div class="form-group">
   							 <label>JOB</label>
   							 <input type="text" value="<?php echo $result['JOB'];?>" class="form-control" name="JOB">
   						 </div>
   						 <div class="form-group">
   							 <label>TELEPON</label>
   							 <input type="text" value="<?php echo $result['TELEPON'];?>" class="form-control" name="TELEPON">
   						 </div>
   						 <div class="form-group">
   							 <label>RUANG</label>
   							 <input type="text" value="<?php echo $result['RUANG'];?>" class="form-control" name="RUANG">
   						 </div>
   						 <div class="form-group">
   							 <label>KETERANGAN</label>
   							 <input type="text" value="<?php echo $result['KETERANGAN'];?>" class="form-control" name="KETERANGAN">
   						 </div>
                            <div class="form-group">
   							 <label>MASUK</label>
   							 <input type="text" value="<?php echo $result['MASUK'];?>" class="form-control" name="MASUK">
   						 </div>
   						 <div class="form-group">
   							 <label>PULANG</label>
   							 <input type="text" value="<?php echo $result['PULANG'];?>" class="form-control" name="PULANG">
   						 <input type="hidden" value="<?php echo $result['ID'];?>" name="ID">
   						 <button class="btn btn-primary btn-md" name="create"><i class="fa fa-edit"> </i> Update</button>
   					 </form>
   				  </div>
   			</div>
   		</div>
   	</body>
   </html>