<section class="content-header">
	<h1>
		Master Data
		<small>Guru</small>
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
	<div class="box box-primary">
		<div class="box-header with-border">
			<a href="?page=MyApp/add_guru" title="Tambah Data" class="btn btn-primary">
				<i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
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
							<th>Nama Guru</th>
							<th>Tempat / Tanggal Lahir</th>
							<th>Tamatan</th>
							<th>Pendidikan Terakhir</th>
							<th>Jabatan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>

						<?php
                  $no = 1;
                //   $sql = $koneksi->query("SELECT s.nm_guru, s.nama_siswa, s.jekel, s.status, s.th_masuk, k.kelas 
                //   from tb_guru s inner join tb_kelas k on s.id_kelas=k.id_kelas 
                //   order by kelas asc, nis asc");
				$sql = $koneksi->query("SELECT id_guru,nm_guru,tpl,tgl,tmt,pddk,jbtan FROM tb_guru");
                  while ($data= $sql->fetch_assoc()) {
                ?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['nm_guru']; ?>
							</td>
							<td>
								<?php echo $data['tpl']; ?> / <?php echo $data['tgl']; ?>
							</td>
							<td>
								<?php echo $data['tmt']; ?>
							</td>
							<td>
								<?php echo $data['pddk']; ?>
							</td>
							<td>
								<?php echo $data['jbtan']; ?>
							</td>

							

							<td>
								<a href="?page=MyApp/edit_guru&kode=<?php echo $data['id_guru']; ?>" title="Ubah"
								 class="btn btn-success">
									<i class="glyphicon glyphicon-edit"></i>
								</a>
								<a href="?page=MyApp/del_guru&kode=<?php echo $data['id_guru']; ?>" onclick="return confirm('Yakin Hapus Data Ini ?')"
								 title="Hapus" class="btn btn-danger">
									<i class="glyphicon glyphicon-trash"></i>
				  				</a>
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