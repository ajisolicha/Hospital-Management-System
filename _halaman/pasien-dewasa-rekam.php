<?php
 $title="Pasien Dewasa";
 include 'connect.php';
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Pasien Dewasa</h4>
                </div>
                <div class="card-body">
                     <div class="table-responsive">
					 <table class="table table-responsive-md">
                            <thead>
                                <tr>
									<th > <strong> No </strong> </th>
                                    <th > <strong> Tanggal Masuk</strong> </th>
                            		<th > <strong> UID </strong> </th>
                        			<th > <strong> Nama Pasien </strong> </th>
                        			<th > <strong> Diagnosa </strong> </th>
                        			<th > <strong> Status </strong> </th>
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
                                <td><?php echo htmlentities($result->diagnosa);?></td>   
                                <td><?php echo htmlentities($result->status_pasien);?></td>                
                                    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> <?php echo $data['status_pasien'];?></div></td>
                                    <td>
										<div class="d-flex">
											<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
											<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
					

 