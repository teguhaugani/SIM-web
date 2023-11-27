<?php
    // include "../../../inc/koneksi.php";
    //FUNGSI RUPIAH
    // include "../inc/rupiah.php";
$koneksi = new mysqli ("localhost","root","","db_simtk2");

    // $id_nilai = $_GET['id_nilai'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Nilai Siswa</title>
</head>

<body>
	<center>

		<h2>Nilai Siswa</h2>
		<h3>TK TUAN KADHI II PADANG GANTING</h3>
		<!-- <p>Jl. Niaga Desa Nogosari Kecamatan Sukosari</p> -->
		<!-- <p>Rajin Pangkal Pandai. Hemat Pangkal Kaya.</p>
		<p>___________________________________________________________________</p> -->

		<tbody>
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
						<h3>Nama : <?php echo $data_cek['nama_siswa']; ?></h3>
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
							<td align="center"><?php echo $data_cek['n11']; ?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Hormat kepada orang tua dan guru </td>
							<td align="center"><?php echo $data_cek['n12']; ?></td>
						</tr>
						<tr height="25">
							<td > &nbsp;&nbsp;&nbsp; Kemampuan hafalan surah pendek, hadits ringan, doa sehari-hari, bacaan sholat </td>
							<td align="center"><?php echo $data_cek['n13']; ?></td>
						</tr>
						<tr height="35">
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n14']; ?> </td>
						</tr>


						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Fisik / Motorik / Physical </b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Menjaga kebersihan diri dan lingkungan </td>
							<td width="200" align="center"><?php echo $data_cek['n21']; ?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Mengenal makanan sehat </td>
							<td align="center"><?php echo $data_cek['n22']; ?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Memiliki keseimbangan tubuh dan aktif </td>
							<td align="center"><?php echo $data_cek['n23']; ?></td>
							<td align="center"></td>
						</tr>
						<tr height="35">
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n24']; ?> </td>
						</tr>


						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. Kognitif (Bahasa Indonesia, Bahsa Arab, Bahasa Inggris)	 </b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Menggunakan bahasa yang baik dan benar </td>
							<td width="200" align="center"><?php echo $data_cek['n31']; ?></td>
						</tr>
						<tr height="35">
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n32']; ?> </td>
						</tr>


						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. Pengetahuan Umum	 </b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Mengamati semesta </td>
							<td width="200" align="center"><?php echo $data_cek['n41']; ?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Mengenal konsep angka dan waktu </td>
							<td align="center"><?php echo $data_cek['n42']; ?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Mampu menulis angka minimal 1-10 </td>
							<td align="center"><?php echo $data_cek['n43']; ?></td>
							<td align="center"></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Mengenal konsep geometri </td>
							<td align="center"><?php echo $data_cek['n44']; ?></td>
							<td align="center"></td>
						</tr>
						<tr height="35">
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n45']; ?> </td>
						</tr>

						
						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. Seni	 </b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Dapat mewarnai gambar dengan baik </td>
							<td width="200" align="center"><?php echo $data_cek['n51']; ?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Dapat mengambar dengan baik </td>
							<td align="center"><?php echo $data_cek['n52']; ?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Dapat membuat kerajinan tangan sederhana </td>
							<td align="center"><?php echo $data_cek['n53']; ?></td>
							<td align="center"></td>
						</tr>
						<tr height="35">
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n54']; ?> </td>
						</tr>

						
						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6. Karakter </b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Kesopanan, kejujuran, kedisiplinan, kerapian, kemandirian, kerajinan, kesehatan </td>
							<td width="200" align="center"><?php echo $data_cek['n61']; ?></td>
						</tr>
						<tr height="35">
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n62']; ?> </td>
						</tr>

						
						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7. Emosi </b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Mampu mengendalikan diri </td>
							<td width="200" align="center"><?php echo $data_cek['n71']; ?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Memiliki kesabaran </td>
							<td align="center"><?php echo $data_cek['n72']; ?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Dapat Mengekspresikan diri </td>
							<td align="center"><?php echo $data_cek['n73']; ?></td>
							<td align="center"></td>
						</tr>
						<tr height="35">
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n74']; ?> </td>
						</tr>


						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8. Sosial </b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Memiliki kepedulian </td>
							<td width="200" align="center"><?php echo $data_cek['n81']; ?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Kemampuan berinteraksi </td>
							<td align="center"><?php echo $data_cek['n82']; ?></td>
						</tr>
						<tr height="25">
							<td> &nbsp;&nbsp;&nbsp; Memiliki keberanian </td>
							<td align="center"><?php echo $data_cek['n83']; ?></td>
							<td align="center"></td>
						</tr>
						<tr height="35">
							<td colspan=2> &nbsp;&nbsp;&nbsp;<b> Catatan : </b><?php echo $data_cek['n84']; ?> </td>
						</tr>


						</table><br>
						<hr>


			</tbody>
			
		</table>
		
	</center>
	<script>
		window.print();
	</script>

</body>

</html>