<?php
 $title="Pasien Dewasa";
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Rekam Medis - Pasien Dewasa</h4>
                </div>
                <div class="card-body">
                     <div class="table-responsive">
					 <table class="table table-responsive-md">
                            <thead>
                                <tr>
								<th > <strong> No </strong> </th>
								<th > <strong> Tanggal Masuk</strong> </th>
                            		<th > <strong> Kode-RFID </strong> </th>
                        			<th > <strong> Nama Pasien </strong> </th>
                        			<th > <strong> Tanggal Lahir </strong> </th>
                        			<th > <strong> Alamat </strong> </th>
									<th > <strong> Diagnosa </strong> </th>
									<th > <strong> Dokter Penanggungjawab </strong> </th>
									<th > <strong> Status Pasien </strong> </th>
									<th > <strong> Hasil Diagnosis </strong> </th>
                                </tr>
                            </thead>
                            <tbody>
							<?php 
								$sql = "SELECT*FROM tb_pasien WHERE kategori_pasien='Dewasa'";
								$query = $dbh -> prepare($sql);
								$query->execute();
								$results=$query->fetchAll(PDO::FETCH_OBJ);
								$cnt=1;
								if($query->rowCount() > 0)
								{
									foreach($results as $result)
									{               
						    ?>  
                                <tr>

								<td><?php echo $cnt;?></td>    
								<td><?php echo htmlentities($result->tanggal_masuk);?></td>                            
                                <td><?php echo htmlentities($result->kode_rfid);?></td>                            
                                <td><?php echo htmlentities($result->nama);?></td> 
								<td><?php echo htmlentities($result->tanggal_lahir);?></td>
								<td><?php echo htmlentities($result->alamat);?></td>                                   
                                <td><?php echo htmlentities($result->diagnosa);?></td> 
								<td><?php echo htmlentities($result->dokter_penanggungjawab);?></td>   
                                <td><?php echo htmlentities($result->status_pasien);?></td>
								<td><?php echo htmlentities($result->hasil_diagnosis);?></td>
                                    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> <?php echo $data['status_pasien'];?></div></td>
                                    <td>
										<div class="d-flex">
											<a href="editpasiendewasa_rekammedis.php?id=<?php echo htmlentities($result->id);?>" class="fa fa-edit"></i></a>
											<a href="deletepasiendewasa_rekammedis.php?id=<?php echo htmlentities($result->id);?>" onclick="return confirm('Are you sure you want to delete?');" ><i class="fa fa-trash"></i></a>
										</div>
									</td>
                                </tr>
								<?php
									$cnt=$cnt+1;}}
								?>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
					

 