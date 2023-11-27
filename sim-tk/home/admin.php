<?php
	$sql = $koneksi->query("SELECT count(id_guru) as guru  from tb_guru");
	while ($data= $sql->fetch_assoc()) {
	
		$guru=$data['guru'];
	}
?>


<?php
	$sql = $koneksi->query("SELECT count(nis) as siswa  from tb_siswa where status='Aktif'");
	while ($data= $sql->fetch_assoc()) {
	
		$siswa=$data['siswa'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT SUM(setor) as Tsetor  from tb_tabungan where jenis='ST'");
	while ($data= $sql->fetch_assoc()) {
	
		$setor=$data['Tsetor'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT SUM(tarik) as Ttarik  from tb_tabungan where jenis='TR'");
	while ($data= $sql->fetch_assoc()) {
	
		$tarik=$data['Ttarik'];
	}

	$saldo=$setor-$tarik;
?>

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Dashboard
		<small>Administrator</small>
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-red">
				<div class="inner">
					<h4>
						<?= $guru; ?>
					</h4>

					<p>Guru Aktif</p>
				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div>
				<a href="?page=MyApp/data_guru" class="small-box-footer">More info
					<i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>
		<!-- ./col -->	

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<h4>
						<?= $siswa; ?>
					</h4>

					<p>Siswa Aktif</p>
				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div>
				<a href="?page=MyApp/data_siswa" class="small-box-footer">More info
					<i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>
		<!-- ./col -->

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<h4>
						<?= rupiah($setor); ?>
					</h4>

					<p>Total Setoran</p>
				</div>
				<div class="icon">
					<i class="ion ion-bag"></i>
				</div>
				<a href="?page=data_setor" class="small-box-footer">More info
					<i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>
		<!-- ./col -->

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-red">
				<div class="inner">
					<h4>
						<?= rupiah($tarik); ?>
					</h4>
					<p>Total Penarikan</p>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
				<a href="?page=data_tarik" class="small-box-footer">More info
					<i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>
		<!-- ./col -->

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-green">
				<div class="inner">
					<h4>
						<?= rupiah($saldo); ?>
					</h4>
					<p>Total Saldo</p>
				</div>
				<div class="icon">
					<i class="ion ion-pie-graph"></i>
				</div>
				<a href="#" class="small-box-footer">More info
					<i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>
	</div>

	<!-- /.box-body -->


	<section class="content">
		<div class="row">
			<div class="box box-primary">
				<div class="box-header">
					<strong>Informasi Sekolah</strong>
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
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th width="10" align="center">No. </th>
									<th width="100">Tanggal</th>
									<th width="800">Informasi</th>
								</tr>
							</thead>
							<tbody>

				<?php
				$no = 1;
            	$sql = $koneksi->query("select * from tb_informasi");
                while ($data= $sql->fetch_assoc()) {
                ?>
								<tr>
									<td>
										<?php echo $no++; ?>
									</td>
									<td>
										<?php echo $data['tgl']; ?>
									</td>
									<td>
										<?php echo $data['isi']; ?>
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
		</div>
	</section>



	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="box box-primary">
				<div class="box-header">
					<strong>Profil Sekolah</strong>
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
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Nama Sekolah</th>
									<th>Alamat</th>
									<th>Akreditasi</th>
								</tr>
							</thead>
							<tbody>

								<?php
                  $sql = $koneksi->query("select * from tb_profil");
                  while ($data= $sql->fetch_assoc()) {
                ?>

								<tr>
									<td>
										<?php echo $data['nama_sekolah']; ?>
									</td>
									<td>
										<?php echo $data['alamat']; ?>
									</td>
									<td>
										Akreditasi
										<?php echo $data['akreditasi']; ?>
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
		</div>
	</section>