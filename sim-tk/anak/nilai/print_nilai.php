<?php
//import koneksi ke database

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
<html>
<head>
  <title>SIM TK II</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
			<h2>DATA GURU</h2>
				<div class="data-tables datatable-dark">
					
					<!-- Masukkan table nya disini, dimulai dari tag TABLE -->
                    <?php
//import koneksi ke database
?>
<html>
<head>
  <title>Stock Barang</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
			<h2>Stock Bahan</h2>
			<h4>(Inventory)</h4>
				<div class="data-tables datatable-dark">
                <script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>
					<!-- Masukkan table nya disini, dimulai dari tag TABLE -->
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
						<h3>Nama : <?php echo $data_cek['nama_siswa']; ?></h3>
						<hr>
						<table border=1 cellpadding=3 cellspacing=3 align=center >

						<tr height="50">
							<td colspan=2><h4><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. Akhlatul karimah dan pemahaman agama dan moral (spiritual)</b></h4></td>
						</tr>
						<tr height="25">
							<td width="800"> &nbsp;&nbsp;&nbsp; Tauhid, rukun iman, rukun isalam, nabi dan rasul </td>
							<td width="200" align="center"><select name="n11" id="n11" class="form-control" required>
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
							</select></td>
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




					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="print" value="print" class="btn btn-success">
						<a href="?page=MyApp/print_nilai" class="btn btn-warning" target="_blank">Print</a>
						<a href="report/print_nilai.php" class="btn btn-primary" target="_blank">
						<i class="glyphicon glyphicon-print"></i> Cetak
        </a>
						<a href="?page=MyApp/data_nilai" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>



					
				</div>
</div>
	
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	