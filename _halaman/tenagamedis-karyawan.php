<?php
 $title="Tenaga Medis - Karyawan";
 require_once 'connect.php';
 
    ?> 

<div class="container-fluid"> 
    <div class="row">   
	<div class="col-xl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-success text-success">
										<i class="fas fa-bed"></i> 
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-2">JUMLAH KARYAWAN</p>
                                        <?php 
                                $sql ="SELECT id from tb_karyawan ";
                                $query = $dbh -> prepare($sql);
                                $query->execute();
                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                $jumlahKaryawan=$query->rowCount();
                            ?>
										<span class="mb-0"><?php echo htmlentities($jumlahKaryawan); ?></span>
									</div>
								</div>
							</div>
						</div>
                    </div>
                  
                    <div class="col-xl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-success text-success">
										<i class="fas fa-user-md"></i>
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">JUMLAH DIVISI</p>
                                        <?php 
                                $sql ="SELECT id from tb_karyawan ";
                                $query = $dbh -> prepare($sql);
                                $query->execute();
                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                $jumlahKaryawanHadir=$query->rowCount();
                            ?>
										<span class="mb-2"><?php echo htmlentities($jumlahKaryawanHadir); ?></span>
									</div>
								</div>
							</div>
						</div>
                    </div>	
	
<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">STAFF</h4>
                            </div>
                            <div class="row">
                            <div class="card-body">
                                <form method="post" action="">
                                    <div class="form-group">
                            <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;" ><strong>NO</strong></th>
                                                <th><strong>UID</strong></th>
                                                <th><strong>Nama Karyawan</strong></th>
                                                <th><strong>NIK</strong></th>
                                                <th><strong>Jenis Kelamin</strong></th>
                                                <th><strong>Alamat</strong></th>
                                                <th><strong>Divisi</strong></th>
                                                <th><strong>Kontak</strong></th>
                                                <th></th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
									$sql = "SELECT * from  tb_karyawan";
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
                                                <td><?php echo htmlentities($result->kode_rfid);?></td>
                                                <td><?php echo htmlentities($result->nama_karyawan);?></td>
                                                <td><?php echo htmlentities($result->nik_karyawan);?></td>
                                                <td><?php echo htmlentities($result->jenis_kelamin_karyawan);?></td>
                                                <td><?php echo htmlentities($result->alamat_karyawan);?></td>
                                                <td><?php echo htmlentities($result->divisi_karyawan);?></td>
                                                <td><?php echo htmlentities($result->kontak_karyawan);?></td>
                                                <td>
                                                <a href="edit-tenagamedis-karyawan.php?id=<?php echo htmlentities($result->ID);?>" class="fa fa-edit"></i></a>
                                                <a href="hapus-tenagamedis-karyawan.php?id=<?php echo htmlentities($result->ID);?>" onclick="return confirm('Are you sure you want to delete?');" ><i class="fa fa-trash"></i></a>
												</td>
                                            </tr>

                                            <?php $cnt++;}} ?>  

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>