<?php
 $title="Hospital Management System";
 require_once ('connect.php');
?>		
		<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Activity Report</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="">
                                    <div class="form-group">
                            <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;" ><strong>ID</strong></th>
                                                <th><strong>NAMA</strong></th>
                                                <th><strong>JOB</strong></th>
                                                <th><strong>TELEPON</strong></th>
                                                <th><strong>RUANG</strong></th>
                                                <th><strong>KETERANGAN</strong></th>
                                                <th><strong>MASUK</strong></th>
												<th><strong>PULANG</strong></th>
                                                <th></th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
									$sql = "SELECT * from  tm_activityreport";
									$row = $dbh -> prepare($sql);
									$row->execute();
									$results=$row->fetchAll(PDO::FETCH_OBJ);
									$cnt=1;
									if($row->rowCount() >  0)
									{
										foreach($results as $result)
									{               
								?>

                                            <tr>
                                                <td><?php echo $cnt;?></td>
                                                <td><?php echo htmlentities($result->NAMA);?></td>
                                                <td><?php echo htmlentities($result->JOB);?></td>
                                                <td><?php echo htmlentities($result->TELEPON);?></td>
                                                <td><?php echo htmlentities($result->RUANG);?></td>
                                                <td><?php echo htmlentities($result->KETERANGAN);?></td>
                                                <td><?php echo htmlentities($result->MASUK);?></td>
												<td><?php echo htmlentities($result->PULANG);?></td>
                                                <td>
                                                <a href="edit_tenagamedis_activityreport.php?id=<?php echo htmlentities($result->ID);?>" class="fa fa-edit"></i></a>
                                                <a href="delete_tenagamedis_activityreport.php?id=<?php echo htmlentities($result->ID);?>" onclick="return confirm('Are you sure you want to delete?');" ><i class="fa fa-trash"></i></a>
												</td>
                                            </tr>

                                            <?php $cnt++;}} ?>  

                                        </tbody>
											</table>
										</div>
									</div>
 