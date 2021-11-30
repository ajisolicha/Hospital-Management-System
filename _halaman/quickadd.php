<?php
 $title="Quick Add";
?>
<!-- modal-load -->
<div class="modal fade" id="loadMe" tabindex="-1" role="dialog" aria-labelledby="loadMeLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
        <div class="loader"></div>
        <div clas="loader-txt">
          <p>Check out this slick bootstrap spinner modal. <br><br><small>We are addicted to Bootstrap... #love</small></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal-addPasien -->
<div class="modal fade modal-tambah-pasien" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Pasien</h3>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form action="addPasien.php" method="POST">
                <div>
                    <h4>Identitas Pasien</h4>
                    <section>
                        <div class="row">
                        <div class="col-lg-12 mb-2">
                            <div class="form-group">
                                    <label class="text-label" >UID</label>
                                    <div class="input-group mb-3">
                                    <input type="text" name="uid" id="resultPasien" value="Tap Kartu Kemudian Tekan tombol Scan"  class="form-control" disabled>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button" id="btnGetUidPasien">Scan</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group ">
                                    <label class="text-label">Kategori Pasien</label>
                                    <select class="form-control" name="kategori">
                                        <option>Pilih Kategori Pasien</option>
                                        <option>Dewasa</option>
                                        <option>Anak</option>
                                        <option>Bayi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">NIK*</label>
                                    <input type="text" name="nik" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Nama Lengkap*</label>
                                    <input type="text" name="nama" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <label>Tanggal Lahir*</label>
                                <input type="text" name="tanggalLahir" class="form-control" id="mdate" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Alamat*</label>
                                    <input type="text" name="alamat" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Penanggungjawab*</label>
                                    <input type="text" name="pj_pasien" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- <h4>Identitas Penanggungjawab</h4>
                    <section>
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">NIK*</label>
                                    <input type="text" name="firstName" class="form-control" placeholder="Parsley" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Nama Lengkap*</label>
                                    <input type="text" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="example@example.com.com" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <label>Tanggal Lahir*</label>
                                <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Alamat*</label>
                                    <input type="text" name="place" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </section> -->
                    <h4>Diagnosa Penyakit</h4>
                    <section>
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Diagnosa*</label>
                                    <input type="text" name="diagnosa" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Dokter Penanggungjawab*</label>
                                    <input type="text" name="dokterPenanggungjawab" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group ">
                                    <label class="text-label">Status Pasien</label>
                                    <select class="form-control" name="statusPasien">
                                        <option>Pilih Status Pasien</option>
                                        <option>Rawat Inap</option>
                                        <option>Rawat Jalan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                    <button type="submit" name="tes" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
            
        </div>
    </div>
</div>
<!-- modal-addDokter -->
<div class="modal fade modal-tambah-dokter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Dokter</h3>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form action="addDokter.php" method="POST"  class="step-form-horizontal">
                <div>                    
                    <section>
                        <div class="row">
                        <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">UID</label>
                                    <div class="input-group mb-3">
                                    <input type="text" name="dr_uid" value="Tap Kartu Kemudian Tekan tombol Scan" id="resultDokter" class="form-control" required>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button" id="btnGetUidDokter">Scan</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">NIK Dokter</label>
                                    <input type="text" name="dr_nik" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Nama Dokter</label>
                                    <input type="text" name="dr_nama" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group ">
                                    <label class="text-label">Jenis Kelamin</label>
                                    <select class="form-control" name="dr_jk">
                                        <option>Pilih Jenis Kelamin</option>
                                        <option>Pria</option>
                                        <option>Wanita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Alamat</label>
                                    <input type="text" name="dr_alamat" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Kontak</label>
                                    <input type="text" name="dr_kontak" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Spesialisasi</label>
                                    <input type="text" name="dr_spesialisasi" class="form-control" required>
                                </div>
                            </div>
                            <!-- <div class="col-lg-12 mb-2">
                                <label>Tanggal Mulai Aktif</label>
                                <input type="text" name="dr_tanggal" class="form-control" id="mdate" required>
                            </div> -->
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                    <button type="submit" name="insertDokter" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
            
        </div>
    </div>
</div>
<!-- modal-addPerawat -->
<div class="modal fade modal-tambah-perawat" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Perawat</h3>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form action="addPerawat.php" method="POST"  class="step-form-horizontal">
                <div>                    
                    <section>
                        <div class="row">
                        <div class="col-lg-12 mb-2">
                        <!-- <div class="input-group mb-3">
                                            <input type="text" class="form-control">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">Button</button>
                                            </div>
                                        </div> -->
                                <div class="form-group">
                                    <label class="text-label">UID</label>
                                    <div class="input-group mb-3">
                                    <input type="text" name="perawat_uid" value="Tap Kartu Kemudian Tekan tombol Scan" id="resultPerawat" class="form-control" required>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button" id="btnGetUidPerawat">Scan</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">NIK Perawat</label>
                                    <input type="text" name="perawat_nik" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Nama Perawat</label>
                                    <input type="text" name="perawat_nama" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group ">
                                    <label class="text-label">Jenis Kelamin</label>
                                    <select class="form-control" name="perawat_jk">
                                        <option>Pilih Jenis Kelamin</option>
                                        <option>Pria</option>
                                        <option>Wanita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Alamat</label>
                                    <input type="text" name="perawat_alamat" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Kontak</label>
                                    <input type="text" name="perawat_kontak" class="form-control" required>
                                </div>
                            </div>
                            <!-- <div class="col-lg-12 mb-2">
                                <label>Tanggal Mulai Aktif</label>
                                <input type="text" name="dr_tanggal" class="form-control" id="mdate" required>
                            </div> -->
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                    <button type="submit" name="insertPerawat" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
            
        </div>
    </div>
</div>
<!-- modal-addManager -->
<div class="modal fade modal-tambah-karyawan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Karyawan</h3>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form action="addKaryawan.php" method="POST"  class="step-form-horizontal">
                <div>                    
                    <section>
                        <div class="row">
                        <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">UID</label>
                                    <div class="input-group mb-3">
                                    <input type="text" name="karyawan_uid" value="Tap Kartu Kemudian Tekan tombol Scan" id="resultKaryawan" class="form-control" required>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button" id="btnGetUidKaryawan">Scan</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Nama Karyawan</label>
                                    <input type="text" name="karyawan_nama" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">NIK</label>
                                    <input type="text" name="karyawan_nik" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group ">
                                    <label class="text-label">Jenis Kelamin</label>
                                    <select class="form-control" name="karyawan_jk">
                                        <option>Pilih Jenis Kelamin</option>
                                        <option>Pria</option>
                                        <option>Wanita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Alamat</label>
                                    <input type="text" name="karyawan_alamat" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Divisi</label>
                                    <input type="text" name="karyawan_divisi" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Kontak</label>
                                    <input type="text" name="karyawan_kontak" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                    <button type="submit" name="insertKaryawan" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
            
        </div>
    </div>
</div>
	<div class="container-fluid">
        <div class="row">
            <div class=" col-xl-6 col-lg-6 col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="text-center">
                                    <!-- <div class="media ai-icon p-4">
							            <i class="fas fa-wheelchair"></i> 
									</div> -->
                            <h3 class="mt-4 mb-1">Pasien</h3>
                                    <!-- <p class="text-muted">Senior Manager</p> -->
							<a class = "btn btn-outline-primary btn-rounded mt-3 px-5" href="javascript:void()" data-toggle="modal" data-target=".modal-tambah-pasien">Add</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-xl-6 col-lg-6 col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="text-center">
                                    <!-- <div class="media ai-icon p-4">
							            <i class="fas fa-wheelchair"></i> 
									</div> -->
                            <h3 class="mt-4 mb-1">Dokter</h3>
                                    <!-- <p class="text-muted">Senior Manager</p> -->
							<a class="btn btn-outline-primary btn-rounded mt-3 px-5" href="javascript:void()" data-toggle="modal" data-target=".modal-tambah-dokter">Add</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-xl-6 col-lg-6 col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="text-center">
                                    <!-- <div class="media ai-icon p-4">
							            <i class="fas fa-wheelchair"></i> 
									</div> -->
                            <h3 class="mt-4 mb-1">Perawat</h3>
                                    <!-- <p class="text-muted">Senior Manager</p> -->
							<a class="btn btn-outline-primary btn-rounded mt-3 px-5" href="javascript:void()"data-toggle="modal" data-target=".modal-tambah-perawat">Add</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-xl-6 col-lg-6 col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="text-center">
                                    <!-- <div class="media ai-icon p-4">
							            <i class="fas fa-wheelchair"></i> 
									</div> -->
                            <h3 class="mt-4 mb-1">Karyawan</h3>
                                    <!-- <p class="text-muted">Senior Manager</p> -->
							<a class="btn btn-outline-primary btn-rounded mt-3 px-5" href="javascript:void()"data-toggle="modal" data-target=".modal-tambah-karyawan">Add</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=templates()?>js/getUID.js"></script>

