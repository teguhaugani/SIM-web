<?php

    if(isset($_GET['kode'])){
        // $sql_cek = "SELECT * FROM tb_guru WHERE id_guru='".$_GET['kode']."'";
		// t.n31, t.n32, t.n41, t.n42, t.n43, t.n44, t.n45, t.n51, t.n52, t.n53, t.n54, t.n61, t.n62, t.n71, t.n72, t.n73, t.n74, t.n81, t.n82, t.n83, t.n84
		$sql_cek = "select s.nis, s.nama_siswa, t.id_nilai, t.n11, t.n12, t.n13, t.n14, t.n21, t.n22, t.n23, t.n24, t.n31, t.n32, t.n41, t.n42, t.n43, t.n44, t.n45, t.n51, t.n52, t.n53, t.n54, t.n61, t.n62, t.n71, t.n72, t.n73, t.n74, t.n81, t.n82, t.n83, t.n84 from 
		tb_siswa s join tb_nilai t on s.nis=t.nis 
		where id_nilai='".$_GET['kode']."'";
		// $sql = $koneksi->query("select s.nis, s.nama_siswa, t.id_nilai, t.na, t.nb from 
		// 		  tb_siswa s join tb_nilai t on s.nis=t.nis 
		// 		  where id_nilai");
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<section class="content-header">
	<h1>
		Master Data
		<small>Nilai</small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="index.php">
				<i class="fa fa-home"></i>
				<b>Home</b>
			</a>
		</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Ubah Nilai</h3>
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

						<div class="form-group">
							<label>NIS</label>
							<input class="form-control" name="id_nilai" value="<?php echo $data_cek['id_nilai']; ?>"
							 readonly>
							<!-- <input type='hidden' class="form-control" name="id_nilai" value="<?php echo $data_cek['id_nilai']; ?>"
							 readonly> -->
						</div>

						<div class="form-group">
							<label>Nama Siswa</label>
							<select name="nis" id="nis" class="form-control select2" style="width: 100%; ">
								<option selected="">-- Pilih --</option>
								<?php
                        // ambil data dari database
                        $query = "select * from tb_siswa";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
								<option value="<?php echo $row['nis'] ?>" <?=$data_cek[
								 'nis']==$row[ 'nis'] ? "selected" : null ?>>
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

						<div class="form-group">
						<label>Tauhid, rukun iman, rukun isalam, nabi dan rasul</label>
							<select name="n11" id="n11" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n11'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n11'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n11'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
						<label>Hormat kepada orang tua dan guru</label>
							<select name="n12" id="n12" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n12'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n12'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n12'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
						<label>Kemampuan hafalan surah pendek, hadits ringan, doa sehari-hari, bacaan sholat</label>
							<select name="n13" id="n13" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n13'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n13'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n13'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
							<label>Catatan</label>
							<input class="form-control" name="n14" value="<?php echo $data_cek['n14']; ?>"
							/>
						</div>
						<hr>
						<center>
						<b>
							2. Fisik / Motorik / Physical
						</b>
						</center>
						<hr>

						<div class="form-group">
						<label>Menjaga kebersihan diri dan lingkungan</label>
							<select name="n21" id="n21" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n21'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n21'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n21'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
						<label>Mengenal makanan sehat</label>
							<select name="n22" id="n22" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n22'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n22'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n22'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
						<label>Memiliki keseimbangan tubuh dan aktif</label>
							<select name="n23" id="n23" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n23'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n23'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n23'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
							<label>Catatan</label>
							<input class="form-control" name="n24" value="<?php echo $data_cek['n24']; ?>"
							/>
						</div>

						<center>
						<b>
						3. Kognitif (Bahasa Indonesia, Bahsa Arab, Bahasa Inggris)	
						</b>
						</center>
						<hr>

						<div class="form-group">
						<label>Menggunakan bahasa yang baik dan benar</label>
							<select name="n31" id="n31" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n31'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n31'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n31'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
							<label>Catatan</label>
							<input class="form-control" name="n32" value="<?php echo $data_cek['n32']; ?>"
							/>
						</div>

						<hr>
						<center>
						<b>
						4. Pengetahuan Umum	
						</b>
						</center>
						<hr>

						<div class="form-group">
						<label>Mengamati semesta</label>
							<select name="n41" id="n41" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n41'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n41'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n41'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
						<label>Mengenal konsep angka dan waktu</label>
							<select name="n42" id="n42" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n42'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n42'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n42'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
						<label>Mampu menulis angka minimal 1-10</label>
							<select name="n43" id="n43" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n43'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n43'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n43'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
						<label>Mengenal konsep geometri</label>
							<select name="n44" id="n44" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n44'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n44'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n44'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
							<label>Catatan</label>
							<input class="form-control" name="n45" value="<?php echo $data_cek['n45']; ?>"
							/>
						</div>

						<hr>
						<center>
						<b>
						5. Seni	
						</b>
						</center>
						<hr>

						<div class="form-group">
						<label>Dapat mewarnai gambar dengan baik</label>
							<select name="n51" id="n51" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n51'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n51'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n51'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
						<label>Dapat mengambar dengan baik</label>
							<select name="n52" id="n52" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n52'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n52'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n52'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
						<label>Dapat membuat kerajinan tangan sederhana</label>
							<select name="n53" id="n53" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n53'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n53'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n53'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
							<label>Catatan</label>
							<input class="form-control" name="n54" value="<?php echo $data_cek['n54']; ?>"
							/>
						</div>

						
						<!-- </div> -->
						<hr>
						<center>
						<b>
						6. Karakter	
						</b>
						</center>
						<hr>

						<div class="form-group">
						<label>Kesopanan, kejujuran, kedisiplinan, kerapian, kemandirian, kerajinan, kesehatan</label>
							<select name="n61" id="n61" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n61'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n61'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n61'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
							<label>Catatan</label>
							<input class="form-control" name="n62" value="<?php echo $data_cek['n62']; ?>"
							/>
						</div>

						<hr>
						<center>
						<b>
						7. Emosi
						</b>
						</center>
						<hr>

						<div class="form-group">
						<label>Mampu mengendalikan diri</label>
							<select name="n71" id="n71" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n71'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n71'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n71'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
						<label>Memiliki kesabaran</label>
							<select name="n72" id="n72" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n72'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n72'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n72'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
						<label>Dapat Mengekspresikan diri</label>
							<select name="n73" id="n73" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n73'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n73'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n73'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
							<label>Catatan</label>
							<input class="form-control" name="n74" value="<?php echo $data_cek['n74']; ?>"
							/>
						</div>

						<hr>
						<center>
						<b>
						8. Sosial
						</b>
						</center>
						<hr>

						<div class="form-group">
						<label>Memiliki kepedulian</label>
							<select name="n81" id="n81" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n81'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n81'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n81'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
						<label>Kemampuan berinteraksi</label>
							<select name="n82" id="n82" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n82'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n82'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n82'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
						<label>Memiliki keberanian</label>
							<select name="n83" id="n83" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['n83'] == "Sangat Baik") echo "<option value='Sangat Baik' selected>Sangat Baik</option>";
                                else echo "<option value='Sangat Baik'>Sangat Baik</option>";
                                
                                if ($data_cek['n83'] == "Baik") echo "<option value='Baik' selected>Baik</option>";
                                else echo "<option value='Baik'>Baik</option>";
                                
                                if ($data_cek['n83'] == "Kurang Baik") echo "<option value='Kurang Baik' selected>Kurang Baik</option>";
                                else echo "<option value='Kurang Baik'>Kurang Baik</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
							<label>Catatan</label>
							<input class="form-control" name="n84" value="<?php echo $data_cek['n84']; ?>"
							/>
						</div>



					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="?page=MyApp/data_nilai" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>

<?php

if (isset ($_POST['Ubah'])){
    //mulai proses ubah
    $sql_ubah = "UPDATE tb_nilai SET
        nis='".$_POST['nis']."',
        n11='".$_POST['n11']."',
        n12='".$_POST['n12']."',
        n13='".$_POST['n13']."',
        n14='".$_POST['n14']."',
        n21='".$_POST['n21']."',
        n22='".$_POST['n22']."',
        n23='".$_POST['n23']."',
        n24='".$_POST['n24']."',
        n31='".$_POST['n31']."',
        n32='".$_POST['n32']."',
        n41='".$_POST['n41']."',
        n42='".$_POST['n42']."',
        n43='".$_POST['n43']."',
        n44='".$_POST['n44']."',
        n45='".$_POST['n45']."',
        n51='".$_POST['n51']."',
        n52='".$_POST['n52']."',
        n53='".$_POST['n53']."',
        n54='".$_POST['n54']."',
        n61='".$_POST['n61']."',
        n62='".$_POST['n62']."',
        n71='".$_POST['n71']."',
        n72='".$_POST['n72']."',
        n73='".$_POST['n73']."',
        n74='".$_POST['n74']."',
        n81='".$_POST['n81']."',
        n82='".$_POST['n82']."',
        n83='".$_POST['n83']."',
        n84='".$_POST['n84']."'
        WHERE id_nilai='".$_POST['id_nilai']."'";

		// n31,n32,n41,n42,n43,n44,n45,n51,n52,n53,n54,n61,n62,n71,n72,n73,n74,n81,n82,n83,n84
        // WHERE id_guru'";
	// $sql_ubah = "UPDATE tb_tabungan SET
	// 	nis='".$_POST['nis']."',
	// 	setor='".$setor_hasil."',
	// 	tgl='".$tanggal."'
	// 	WHERE id_tabungan='".$_POST['id_tabungan']."'";
		// $sql_ubah = "UPDATE tb_guru SET nm_guru = '$nm_guru',tpl = '$tpl',tgl = '$tgl',tmt = '$tmt',pddk = '$pddk',jbtan = '$jbtan' WHERE  id_guru = '$id_guru'";

    $query_ubah = mysqli_query($koneksi, $sql_ubah);
	// $query_ubah = mysqli_query($koneksi, $sql_ubah);
		mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=MyApp/data_nilai';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=MyApp/data_nilai';
            }
        })</script>";
    }
}

