<section class="content-header">
	<h1>
		Master Data
		<small>Nilai</small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="index.php">
				<i class="fa fa-home"></i>
				<b>home</b>
			</a>
		</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-info">
				
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Guru</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove">
							<i class="fa fa-remove"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<!-- <div class="form-group">
							<label>No</label>
							<input type="hidden" name="nis" id="nis" class="form-control" placeholder="NIS">
						</div> -->
						<div class="form-group">
							<label>Nama Siswa</label>
							<select name="nis" id="nis" class="form-control select2" style="width: 100%;">
								<option selected="selected">-- Pilih --</option>
								<?php
                        // ambil data dari database
                        $query = "select * from tb_siswa where status='Aktif'";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
								<option value="<?php echo $row['nis'] ?>">
									<?php echo $row['nis'] ?>
									-
									<?php echo $row['nama_siswa'] ?>
								</option>
								<?php
                        }
                        ?>
							</select>
						</div>
						<hr>
						<center>
							<b>
							1. Akhlatul karimah dan pemahaman agama dan moral (spiritual)									
							</b>
						</center>
						<hr>
						<!-- 1 -->
						<div class="form-group">
							<label>Tauhid, rukun iman, rukun isalam, nabi dan rasul</label>
							<select name="n11" id="n11" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Hormat kepada orang tua dan guru</label>
							<select name="n12" id="n12" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Kemampuan hafalan surah pendek, hadits ringan, doa sehari-hari, bacaan sholat</label>
							<select name="n13" id="n13" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Catatan</label>
							<input type="text" name="n14" id="n14" class="form-control" placeholder="Catatan Untuk Siswa">
						</div>
						<hr>
						<center>
							<b>
							2. Fisik / Motorik / Physical			
							</b>
						</center>
						<hr>
						<!-- 2 -->
						<div class="form-group">
							<label>Menjaga kebersihan diri dan lingkungan</label>
							<select name="n21" id="n21" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Mengenal makanan sehat</label>
							<select name="n22" id="n22" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Memiliki keseimbangan tubuh dan aktif</label>
							<select name="n23" id="n23" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Catatan</label>
							<input type="text" name="n24" id="n24" class="form-control" placeholder="Catatan Untuk Siswa">
						</div>
						<hr>
						<center>
							<b>
							3. Kognitif (Bahasa Indonesia, Bahsa Arab, Bahasa Inggris)					
							</b>
						</center>
						<hr>
						<!-- 3 -->
						<div class="form-group">
							<label>Menggunakan bahasa yang baik dan benar</label>
							<select name="n31" id="n31" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Catatan</label>
							<input type="text" name="n32" id="n32" class="form-control" placeholder="Catatan Untuk Siswa">
						</div>
						<hr>
						<center>
							<b>
							4. Pengetahuan Umum							
							</b>
						</center>
						<hr>
						<!-- 4 -->
						<div class="form-group">
							<label>Mengamati semesta</label>
							<select name="n41" id="n41" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Mengenal konsep angka dan waktu</label>
							<select name="n42" id="n42" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Mampu menulis angka minimal 1-10</label>
							<select name="n43" id="n43" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Mengenal konsep geometri</label>
							<select name="n44" id="n44" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						</div>
						<div class="form-group">
							<label>Catatan</label>
							<input type="text" name="n45" id="n45" class="form-control" placeholder="Catatan Untuk Siswa">
						</div>
						<hr>
						<center>
							<b>
							5. Seni							
							</b>
						</center>
						<hr>
						<!-- 5 -->
						<div class="form-group">
							<label>Dapat mewarnai gambar dengan baik</label>
							<select name="n51" id="n51" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Dapat mengambar dengan baik</label>
							<select name="n52" id="n52" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Dapat membuat kerajinan tangan sederhana</label>
							<select name="n53" id="n53" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Catatan</label>
							<input type="text" name="n54" id="n54" class="form-control" placeholder="Catatan Untuk Siswa">
						</div>
						<hr>
						<center>
							<b>
							6. Karakter							
							</b>
						</center>
						<hr>
						<!-- 6 -->
						<div class="form-group">
							<label>Kesopanan, kejujuran, kedisiplinan, kerapian, kemandirian, kerajinan, kesehatan</label>
							<select name="n61" id="n61" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Catatan</label>
							<input type="text" name="n62" id="n62" class="form-control" placeholder="Catatan Untuk Siswa">
						</div>
						<hr>
						<center>
							<b>
							7. Emosi							
							</b>
						</center>
						<hr>
						<!-- 7 -->
						<div class="form-group">
							<label>Mampu mengendalikan diri</label>
							<select name="n71" id="n71" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Memiliki kesabaran</label>
							<select name="n72" id="n72" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Dapat Mengekspresikan diri</label>
							<select name="n73" id="n73" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Catatan</label>
							<input type="text" name="n74" id="n74" class="form-control" placeholder="Catatan Untuk Siswa">
						</div>
						<hr>
						<center>
							<b>
							8. Sosial						
							</b>
						</center>
						<hr>
						<!-- 8 -->
						<div class="form-group">
							<label>Memiliki kepedulian</label>
							<select name="n81" id="n81" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Kemampuan berinteraksi</label>
							<select name="n82" id="n82" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Memiliki keberanian</label>
							<select name="n83" id="n83" class="form-control" required>
								<option>-- Pilih --</option>
								<option>Sangat Baik</option>
								<option>Baik</option>
								<option>Kurang Baik</option>
							</select>
						</div>
						<div class="form-group">
							<label>Catatan</label>
							<input type="text" name="n84" id="n84" class="form-control" placeholder="Catatan Untuk Siswa">
						</div>
						<hr>


					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
						<a href="?page=MyApp/data_nilai" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>

<?php
    // if (isset ($_POST['Simpan'])){

	// 	//menangkap post setor
	// 	$setor=$_POST['setor'];
	// 	//membuang Rp dan Titik
	// 	$setor_hasil=preg_replace("/[^0-9]/", "", $setor);

    //     $sql_simpan = "INSERT INTO tb_tabungan (nis,setor,tarik,tgl,jenis,petugas) VALUES (
    //       '".$_POST['nis']."',
    //       '".$setor_hasil."',
    //       '0',
    //       '".$tanggal."',
    //       'ST',
    //       '".$data_nama."')";
	// 	$query_simpan = mysqli_query($koneksi, $sql_simpan);
	// 	mysqli_close($koneksi);

		
    if (isset ($_POST['Simpan'])){
    
        $sql_simpan = "INSERT INTO tb_nilai (nis,n11,n12,n13,n14,n21,n22,n23,n24,n31,n32,n41,n42,n43,n44,n45,n51,n52,n53,n54,n61,n62,n71,n72,n73,n74,n81,n82,n83,n84) VALUES (
           '".$_POST['nis']."',
		   '".$_POST['n11']."',
		   '".$_POST['n12']."',
		   '".$_POST['n13']."',
		   '".$_POST['n14']."',
		   '".$_POST['n21']."',
		   '".$_POST['n22']."',
		   '".$_POST['n23']."',
		   '".$_POST['n24']."',
		   '".$_POST['n31']."',
		   '".$_POST['n32']."',
		   '".$_POST['n41']."',
		   '".$_POST['n42']."',
		   '".$_POST['n43']."',
		   '".$_POST['n44']."',
		   '".$_POST['n45']."',
		   '".$_POST['n51']."',
		   '".$_POST['n52']."',
		   '".$_POST['n53']."',
		   '".$_POST['n54']."',
		   '".$_POST['n61']."',
		   '".$_POST['n62']."',
		   '".$_POST['n71']."',
		   '".$_POST['n72']."',
		   '".$_POST['n73']."',
		   '".$_POST['n74']."',
		   '".$_POST['n81']."',
		   '".$_POST['n82']."',
		   '".$_POST['n83']."',
		   '".$_POST['n84']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan){

      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = 'index.php?page=MyApp/data_nilai';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = 'index.php?page=MyApp/add_nilai';
          }
      })</script>";
    }
  }
    
