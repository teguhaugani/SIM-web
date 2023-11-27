<section class="content-header">
	<h1>
		Master Data
		<small>Nilai Sementara</small>
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
			<a href="?page=MyApp/add_nilais" title="Tambah Data" class="btn btn-primary">
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
							<th>NIS</th>
							<th>Nama Siswa</th>
							<th>Aksi</th>
							<!-- <th>n11</th>
							<th>n12</th>
							<th>n13</th>
							<th>n14</th>
							<th>n21</th>
							<th>n22</th>
							<th>n23</th>
							<th>n24</th>
							<th>n31</th>
							<th>n32</th>
							<th>n41</th>
							<th>n42</th>
							<th>n43</th>
							<th>n44</th>
							<th>n45</th>
							<th>n51</th>
							<th>n52</th>
							<th>n53</th>
							<th>n54</th>
							<th>n61</th>
							<th>n62</th>
							<th>n71</th>
							<th>n72</th>
							<th>n73</th>
							<th>n74</th>
							<th>n81</th>
							<th>n82</th>
							<th>n83</th>
							<th>n84</th> -->
						</tr>
					</thead>
					<tbody>

						<?php
                  $no = 1;
                //   $sql = $koneksi->query("SELECT s.nm_guru, s.nama_siswa, s.jekel, s.status, s.th_masuk, k.kelas 
                //   from tb_guru s inner join tb_kelas k on s.id_kelas=k.id_kelas 
                //   order by kelas asc, nis asc");
				// $sql = $koneksi->query("SELECT id_tabung,nis,na,na FROM tb_tabung");
				$sql = $koneksi->query("select s.nis, s.nama_siswa, t.id_nilai, t.n11, t.n12, t.n13, t.n14, t.n21, t.n22, t.n23, t.n24, t.n31, t.n32, t.n41, t.n42, t.n43, t.n44, t.n45, t.n51, t.n52, t.n53, t.n54, t.n61, t.n62, t.n71, t.n72, t.n73, t.n74, t.n81, t.n82, t.n83, t.n84 from 
				  tb_siswa s join tb_nilai t on s.nis=t.nis 
				  where id_nilai");
				//   , t.n21, t.n22, t.n23, t.n24, t.n25, t.n31, t.n32, t.n33, t.n41, t.n42, t.n43, t.n44, t.n45, t.n46, t.n51, t.n52, t.n53, t.n54, t.n55, t.n61, t.n62, t.n63, t.n71, t.n72, t.n73, t.n74, t.n75, t.n81, t.n82, t.n83, t.n84, t.n85
				//   $sql = $koneksi->query("select s.nis, s.nama_siswa, t.id_tabungan, t.setor, t.tgl, t.petugas from 
				//   tb_siswa s join tb_tabungan t on s.nis=t.nis 
				//   where jenis ='ST' order by tgl desc, id_tabungan desc");
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
								<!-- <a href="?page=MyApp/edit_nilais&kode=<?php echo $data['id_nilai']; ?>" title="Ubah"
								 class="btn btn-success">
									<i class="glyphicon glyphicon-edit"></i>
								</a> -->
								<a href="?page=MyApp/del_nilais&kode=<?php echo $data['id_nilai']; ?>" onclick="return confirm('Yakin Hapus Data Ini ?')"
								 title="Hapus" class="btn btn-danger">
									<i class="glyphicon glyphicon-trash"></i>
				  				</a>
								<!-- <a href="?page=MyApp/view_nilais&kode=<?php echo $data['id_nilai']; ?>" title="Lihat"
								 class="btn btn-success">
									<i class="glyphicon"><img src="images/lht.png" width=15 height=20></i>
								</a> -->
								<!-- <a href="?page=MyApp/cetak_nilais&kode=<?php echo $data['id_nilai']; ?>" title="Print" target="_blank"
								 class="btn btn-default">
									<i class="glyphicon glyphicon-print"></i>
								</a> -->
							</td>
							<!-- <td>
								<?php echo $data['n11']; ?>
							</td>
							<td>
								<?php echo $data['n12']; ?>
							</td>
							<td>
								<?php echo $data['n13']; ?>
							</td>
							<td>
								<?php echo $data['n14']; ?>
							</td>
							<td>
								<?php echo $data['n21']; ?>
							</td>
							<td>
								<?php echo $data['n22']; ?>
							</td>
							<td>
								<?php echo $data['n23']; ?>
							</td>
							<td>
								<?php echo $data['n24']; ?>
							</td>
							<td>
								<?php echo $data['n31']; ?>
							</td>
							<td>
								<?php echo $data['n32']; ?>
							</td>
							<td>
								<?php echo $data['n41']; ?>
							</td>
							<td>
								<?php echo $data['n42']; ?>
							</td>
							<td>
								<?php echo $data['n43']; ?>
							</td>
							<td>
								<?php echo $data['n44']; ?>
							</td>
							<td>
								<?php echo $data['n45']; ?>
							</td>
							<td>
								<?php echo $data['n51']; ?>
							</td>
							<td>
								<?php echo $data['n52']; ?>
							</td>
							<td>
								<?php echo $data['n53']; ?>
							</td>
							<td>
								<?php echo $data['n54']; ?>
							</td>
							<td>
								<?php echo $data['n61']; ?>
							</td>
							<td>
								<?php echo $data['n62']; ?>
							</td>
							<td>
								<?php echo $data['n71']; ?>
							</td>
							<td>
								<?php echo $data['n72']; ?>
							</td>
							<td>
								<?php echo $data['n73']; ?>
							</td>
							<td>
								<?php echo $data['n74']; ?>
							</td>
							<td>
								<?php echo $data['n81']; ?>
							</td>
							<td>
								<?php echo $data['n82']; ?>
							</td>
							<td>
								<?php echo $data['n83']; ?>
							</td>
							<td>
								<?php echo $data['n84']; ?>
							</td> -->

							

							<!-- <td>
								<a href="?page=MyApp/edit_nilai&kode=<?php echo $data['id_nilai']; ?>" title="Ubah"
								 class="btn btn-success">
									<i class="glyphicon glyphicon-edit"></i>
								</a>
								<a href="?page=MyApp/del_nilai&kode=<?php echo $data['id_nilai']; ?>" onclick="return confirm('Yakin Hapus Data Ini ?')"
								 title="Hapus" class="btn btn-danger">
									<i class="glyphicon glyphicon-trash"></i>
									</>
							</td> -->
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