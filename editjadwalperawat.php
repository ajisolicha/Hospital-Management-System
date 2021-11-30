<?php
include'connect.php';
		if(isset($_POST['updatejadwalperawat']))
		{
			$nama_perawat = $_POST['nama_perawat'];
            $divisi = $_POST['divisi'];
            $jam_kerja = $_POST['jam_kerja'];
          



            $id=intval($_GET['id']);
			$sql="UPDATE tb_jadwal set nama_perawat=:nama_perawat,divisi=:divisi,jam_kerja=:jam_kerja,jam_selesai=:jam_selesai where id=:id";
			$query = $dbh->prepare($sql);
            $query->bindParam(':nama_perawat',$drUID,PDO::PARAM_STR);
            $query->bindParam(':divisi',$drNama,PDO::PARAM_STR);
            $query->bindParam(':jam_kerja',$drNIK,PDO::PARAM_STR);
         
           
           
        
            $query->bindParam(':id',$id,PDO::PARAM_STR);
            $query->execute();
			header('location:index.php?halaman=clinicalmng-nakes');
		}
?>