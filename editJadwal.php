<?php
include'connect.php';
		if(isset($_POST['updatejadwaldokter']))
		{
			$dokter_id = $_POST['dokter_id'];
            $hari_praktik = $_POST['hari_praktik'];
            $jam_mulai = $_POST['jam_mulai'];
            $jam_selesai = $_POST['jam_selesai'];



            $id=intval($_GET['id']);
			$sql="UPDATE tb_jadwal set dokter_id=:dokter_id,hari_praktik=:hari_praktik,jam_mulai=:jam_mulai,jam_selesai=:jam_selesai where id=:id";
			$query = $dbh->prepare($sql);
            $query->bindParam(':dokter_id',$drUID,PDO::PARAM_STR);
            $query->bindParam(':hari_praktik',$drNama,PDO::PARAM_STR);
            $query->bindParam(':jam_mulai',$drNIK,PDO::PARAM_STR);
            $query->bindParam(':jam_selesai',$drJenisKelamin,PDO::PARAM_STR);
           
           
        
            $query->bindParam(':id',$id,PDO::PARAM_STR);
            $query->execute();
			header('location:index.php?halaman=clinicalmng-nakes');
		}
?>