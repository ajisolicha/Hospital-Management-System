<?php
 $title="Data Perawat";
 require_once 'connect.php';
    ?> 

<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Perawat</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="">
                                    <div class="form-group">
                            <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;" ><strong>No</strong></th>
                                                <th><strong>UID Perawat</strong></th>
                                                <th><strong>Nama Perawat</strong></th>
                                                <th><strong>NIK</strong></th>
                                                <th><strong>Jenis Kelamin</strong></th>
                                                <th><strong>Alamat</strong></th>
                                                <th><strong>Kontak</strong></th>
                                            <th></th>   
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
									$sql = "SELECT * from  tb_perawat";
									$row = $dbh -> prepare($sql);
									$row->execute();
									$results=$row->fetchAll(PDO::FETCH_OBJ);
									$cnt=1;
									if($row->rowCount() > 0)
									{
										foreach($results as $result)
									{               
								?>

                                            <tr>
                                                <td><?php echo $cnt;?></td>
                                                <td><?php echo htmlentities($result->rfid_uid);?></td>
                                                <td><?php echo htmlentities($result->nama_perawat);?></td>
                                                <td><?php echo htmlentities($result->nik_perawat);?></td>
                                                <td><?php echo htmlentities($result->jenis_kelamin);?></td>
                                                <td><?php echo htmlentities($result->alamat);?></td>
                                                <td><?php echo htmlentities($result->kontak_perawat);?></td>
                                                <td>
                                                <a href="proses-editjumlahperawat.php?id=<?php echo htmlentities($result->id);?>" class="fa fa-edit"></i></a>
                                                <a href="hapus-jumlahperawat.php?id=<?php echo htmlentities($result->id);?>" onclick="return confirm('Are you sure you want to delete?');" ><i class="fa fa-trash"></i></a>
												</td>
                                            </tr>

                                            <?php $cnt++;}} ?>  

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>