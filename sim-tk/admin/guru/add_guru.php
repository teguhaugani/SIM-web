<section class="content-header">
	<h1>
		Master Data
		<small>Guru</small>
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
							<label>Nama Guru</label>
							<input type="text" name="nm_guru" id="nm_guru" class="form-control" placeholder="Nama Guru">
						</div>

						<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="text" name="tpl" id="tpl" class="form-control" placeholder="Tempat Lahir">
						</div>

						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" name="tgl" id="tgl" class="form-control" placeholder="Tanggal Lahir">
						</div>

						<div class="form-group">
							<label>Tamatan</label>
							<input type="date" name="tmt" id="tmt" class="form-control" placeholder="Tamatan">
						</div>

						<div class="form-group">
							<label>Pendidikan Terakhir</label>
							<input type="text" name="pddk" id="pddk" class="form-control" placeholder="Pendidikan Terakhir">
						</div>

						<div class="form-group">
							<label>Jabatan</label>
							<input type="text" name="jbtan" id="jbtan" class="form-control" placeholder="Jabatan">
						</div>


					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
						<a href="?page=MyApp/data_guru" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>

<?php

    if (isset ($_POST['Simpan'])){
    
        $sql_simpan = "INSERT INTO tb_guru (nm_guru,tpl,tgl,tmt,pddk,jbtan) VALUES (
           '".$_POST['nm_guru']."',
          '".$_POST['tpl']."',
          '".$_POST['tgl']."',
          '".$_POST['tmt']."',
          '".$_POST['pddk']."',
          '".$_POST['jbtan']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan){

      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = 'index.php?page=MyApp/data_guru';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = 'index.php?page=MyApp/add_guru';
          }
      })</script>";
    }
  }
    
