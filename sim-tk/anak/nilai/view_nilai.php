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
					<h3 class="box-title">Tampilkan Nilai</h3>
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
							<!-- <label>ID</label> -->
							<input type='hidden' class="form-control" name="id_nilai" value="<?php echo $data_cek['id_nilai']; ?>"
							 readonly>
						</div>

						<!-- <div class="form-group">
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
						</div> -->
						<?php  $query = "select * from tb_siswa"; ?>
						<!-- <h3>Nama : <?php echo $data_cek['nama_siswa']; ?></h3> -->
						<?php
						if (isset($data_cek['nama_siswa'])) {
							echo '<h3>Nama : ' . $data_cek['nama_siswa'] . '</h3>';
						} else {
							echo '<h3> Nama : -' . '</h3>';
						}
						?>
						<hr>
						<table border=1 cellpadding=3 cellspacing=3 align=center >

						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. Akhlatul karimah dan pemahaman agama dan moral (spiritual)</b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Tauhid, rukun iman, rukun isalam, nabi dan rasul </td>
							<!-- <td width="200" align="center"><select name="n11" id="n11" class="form-control" required>
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
							</select></td> -->
							<!-- <td align="center"><?php echo $data_cek['n11']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n11'])) {
							echo $data_cek['n11'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Hormat kepada orang tua dan guru </td>
							<td align="center"><?php
						if (isset($data_cek['n12'])) {
							echo $data_cek['n12'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>
						<tr height="25">
							<td > &nbsp;&nbsp;&nbsp; Kemampuan hafalan surah pendek, hadits ringan, doa sehari-hari, bacaan sholat </td>
							<!-- <td align="center"><?php echo $data_cek['n13']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n13'])) {
							echo $data_cek['n13'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>
						<tr height="35">
							<!-- <td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n14']; ?> </td> -->
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php
						if (isset($data_cek['n14'])) {
							echo $data_cek['n14'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>


						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Fisik / Motorik / Physical </b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Menjaga kebersihan diri dan lingkungan </td>
							<!-- <td width="200" align="center"><?php echo $data_cek['n21']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n21'])) {
							echo $data_cek['n21'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Mengenal makanan sehat </td>
							<!-- <td align="center"><?php echo $data_cek['n22']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n22'])) {
							echo $data_cek['n22'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Memiliki keseimbangan tubuh dan aktif </td>
							<!-- <td align="center"><?php echo $data_cek['n23']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n23'])) {
							echo $data_cek['n23'];
						} else {
							echo ' ';
						}
						?></td>
							<td align="center"></td>
						</tr>
						<tr height="35">
							<!-- <td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n24']; ?> </td> -->
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php
						if (isset($data_cek['n24'])) {
							echo $data_cek['n24'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>


						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. Kognitif (Bahasa Indonesia, Bahsa Arab, Bahasa Inggris)	 </b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Menggunakan bahasa yang baik dan benar </td>
							<!-- <td width="200" align="center"><?php echo $data_cek['n31']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n31'])) {
							echo $data_cek['n31'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>
						<tr height="35">
							<!-- <td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n32']; ?> </td> -->
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php
						if (isset($data_cek['n32'])) {
							echo $data_cek['n32'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>


						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. Pengetahuan Umum	 </b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Mengamati semesta </td>
							<!-- <td width="200" align="center"><?php echo $data_cek['n41']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n41'])) {
							echo $data_cek['n41'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Mengenal konsep angka dan waktu </td>
							<!-- <td align="center"><?php echo $data_cek['n42']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n42'])) {
							echo $data_cek['n42'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Mampu menulis angka minimal 1-10 </td>
							<!-- <td align="center"><?php echo $data_cek['n43']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n43'])) {
							echo $data_cek['n43'];
						} else {
							echo ' ';
						}
						?></td>
							<td align="center"></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Mengenal konsep geometri </td>
							<!-- <td align="center"><?php echo $data_cek['n44']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n44'])) {
							echo $data_cek['n44'];
						} else {
							echo ' ';
						}
						?></td>
							<td align="center"></td>
						</tr>
						<tr height="35">
							<!-- <td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n45']; ?> </td> -->
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php
						if (isset($data_cek['n45'])) {
							echo $data_cek['n45'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>

						
						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. Seni	 </b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Dapat mewarnai gambar dengan baik </td>
							<!-- <td width="200" align="center"><?php echo $data_cek['n51']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n51'])) {
							echo $data_cek['n51'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Dapat mengambar dengan baik </td>
							<!-- <td align="center"><?php echo $data_cek['n52']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n52'])) {
							echo $data_cek['n52'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Dapat membuat kerajinan tangan sederhana </td>
							<!-- <td align="center"><?php echo $data_cek['n53']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n53'])) {
							echo $data_cek['n53'];
						} else {
							echo ' ';
						}
						?></td>
							<td align="center"></td>
						</tr>
						<tr height="35">
							<!-- <td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n54']; ?> </td> -->
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php
						if (isset($data_cek['n54'])) {
							echo $data_cek['n54'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>

						
						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6. Karakter </b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Kesopanan, kejujuran, kedisiplinan, kerapian, kemandirian, kerajinan, kesehatan </td>
							<!-- <td width="200" align="center"><?php echo $data_cek['n61']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n61'])) {
							echo $data_cek['n61'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>
						<tr height="35">
							<!-- <td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n62']; ?> </td> -->
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php
						if (isset($data_cek['n62'])) {
							echo $data_cek['n62'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>

						
						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7. Emosi </b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Mampu mengendalikan diri </td>
							<!-- <td width="200" align="center"><?php echo $data_cek['n71']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n71'])) {
							echo $data_cek['n71'];
						} else {
							echo ' ';
						}
						?></td>
							
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Memiliki kesabaran </td>
							<!-- <td align="center"><?php echo $data_cek['n72']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n72'])) {
							echo $data_cek['n72'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Dapat Mengekspresikan diri </td>
							<!-- <td align="center"><?php echo $data_cek['n73']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n73'])) {
							echo $data_cek['n73'];
						} else {
							echo ' ';
						}
						?></td>
							<td align="center"></td>
						</tr>
						<tr height="35">
							<!-- <td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n74']; ?> </td> -->
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php
						if (isset($data_cek['n74'])) {
							echo $data_cek['n74'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>


						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8. Sosial </b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Memiliki kepedulian </td>
							<!-- <td width="200" align="center"><?php echo $data_cek['n81']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n81'])) {
							echo $data_cek['n81'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Kemampuan berinteraksi </td>
							<!-- <td align="center"><?php echo $data_cek['n82']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n82'])) {
							echo $data_cek['n82'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Memiliki keberanian </td>
							<!-- <td align="center"><?php echo $data_cek['n83']; ?></td> -->
							<td align="center"><?php
						if (isset($data_cek['n83'])) {
							echo $data_cek['n83'];
						} else {
							echo ' ';
						}
						?></td>
							<td align="center"></td>
						</tr>
						<tr height="35">
							<!-- <td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n84']; ?> </td> -->
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php
						if (isset($data_cek['n84'])) {
							echo $data_cek['n84'];
						} else {
							echo ' ';
						}
						?></td>
						</tr>


						</table><br>
						<hr>




					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<!-- <input type="submit" name="Ubah" value="Ubah" class="btn btn-success"> -->
						<a href="?page=data_nilaia" class="btn btn-warning">Kembali</a>
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

