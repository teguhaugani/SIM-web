<!-- Content Header (Page header) -->
<?php
    $nis = $data["nis"];
?>

<?php
	$sql = $koneksi->query("SELECT SUM(setor) as Tsetor  from tb_tabungan where jenis='ST' and nis='$nis'");
	while ($data= $sql->fetch_assoc()) {
	
		$setor=$data['Tsetor'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT SUM(tarik) as Ttarik  from tb_tabungan where jenis='TR' and nis='$nis'");
	while ($data= $sql->fetch_assoc()) {
	
		$tarik=$data['Ttarik'];
	}
?>

<?php
	$saldo=$setor-$tarik
?>


<section class="content-header">
	<h1>
		Tabungan
		<small>Siswa</small>
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
<!-- Main content -->



<section class="content">

	<!-- /.box-header -->



	<div class="box box-primary">
		<div class="box-header">
			<div class="form-group">
				<label>Saldo Tabungan</label>
				<!-- <input type="text" name="saldo" id="saldo" class="form-control" placeholder="Saldo" readonly> -->
				<input type="text" name="saldo" id="saldo" class="form-control" value="<?php echo $saldo ?>" readonly>
				<!-- <td class="form-control"><?php echo $saldo ?></td> -->
			</div>
			<!-- <a href="?page=view_tabungana" class="btn btn-primary">
				<i class="glyphicon glyphicon-arrow-left"></i> Kembali</a> -->
			<!-- <a href="./report/cetak-tabungan.php?nis=<?php echo $nis ?>" target=" _blank"
			 class="btn btn-default">
				<i class="glyphicon glyphicon-print"></i> Cetak</a> -->
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
		<div class="box-body">
			<div class="table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>NIS</th>
							<th>Nama</th>
							<th>Tanggal</th>
							<th>Setoran</th>
							<th>Tarikan</th>
						</tr>
					</thead>
					<tbody>

						<?php

                  $no = 1;
				  $sql = $koneksi->query("select s.nis, s.nama_siswa, t.id_tabungan, t.setor, t.tarik, t.tgl, t.petugas from 
				  tb_siswa s join tb_tabungan t on s.nis=t.nis 
				  where s.nis ='$nis' order by tgl asc");
                  while ($data= $sql->fetch_assoc()) {
                ?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['nis']; ?>
							</td>
							<td>
								<?php echo $data['nama_siswa']; ?>
							</td>
							<td>
								<?php  $tgl = $data['tgl']; echo date("d/M/Y", strtotime($tgl))?>
							</td>
							<td align="right">
								<?php echo rupiah($data['setor']); ?>
							</td>
							<td align="right">
								<?php echo rupiah($data['tarik']); ?>
							</td>
						</tr>
						<?php
                  }
                ?>
					</tbody>

				</table>
			</div>
		</div>
	</div>
</section>

