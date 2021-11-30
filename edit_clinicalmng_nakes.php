<?php  
   require_once('connect.php');

   	 
   	if(!empty($_POST['NAMA'])){
   		$NAMA = $_POST['NAMA'];
   		$JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
   		$USIA = $_POST['USIA'];
   		$ALAMAT = $_POST['ALAMAT'];
   		$TELEPON = $_POST['TELEPON'];
   		$JOB = $_POST['JOB'];
   		$id = $_POST['ID'];
		
   		$data[] = $NAMA;
   		$data[] = $JENIS_KELAMIN;
   		$data[] = $USIA;
   		$data[] = $ALAMAT;
   		$data[] = $TELEPON;
   		$data[] = $JOB;
   		$data[] = $id;
	
		
   		$sql = "UPDATE `cm_tenagamedis` SET NAMA=?,JENIS_KELAMIN=?,USIA=?,ALAMAT=?,TELEPON=?,JOB=? WHERE id=?";
   		$row = $dbh->prepare($sql);
   		$row->execute($data);
		
   		echo '<script>alert("Berhasil Edit Data");window.location="index.php?halaman=clinicalmng-nakes"</script>';
	   }
   
   	$id = $_GET['id'];
   	$sql = "SELECT *FROM `cm_tenagamedis` WHERE ID= ?";
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
   							 <label>JENIS_KELAMIN</label>
   							 <input type="text" value="<?php echo $result['JENIS_KELAMIN'];?>" class="form-control" name="JENIS_KELAMIN">
   						 </div>
   						 <div class="form-group">
   							 <label>USIA</label>
   							 <input type="text" value="<?php echo $result['USIA'];?>" class="form-control" name="USIA">
   						 </div>
   						 <div class="form-group">
   							 <label>ALAMAT</label>
   							 <input type="text" value="<?php echo $result['ALAMAT'];?>" class="form-control" name="ALAMAT">
   						 </div>
   						 <div class="form-group">
   							 <label>TELEPON</label>
   							 <input type="text" value="<?php echo $result['TELEPON'];?>" class="form-control" name="TELEPON">
   						 </div>
   						 <div class="form-group">
   							 <label>JOB</label>
   							 <input type="text" value="<?php echo $result['JOB'];?>" class="form-control" name="JOB">
   						 <input type="hidden" value="<?php echo $result['ID'];?>" name="ID">
   						 <button class="btn btn-primary btn-md" name="create"><i class="fa fa-edit"> </i> Update</button>
   					 </form>
   				  </div>
   			</div>
   		</div>
   	</body>
   </html>