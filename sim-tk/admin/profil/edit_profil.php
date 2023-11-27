<?php
    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_profil WHERE id_profil='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<section class="content-header">
	<h1>
		Profil Sekolah
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
					<h3 class="box-title">Ubah Profil</h3>
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
							<input type='hidden' class="form-control" name="id_profil" value="<?php echo $data_cek['id_profil']; ?>"
							 readonly/>
						</div>

						<div class="form-group">
							<label>Nama Sekolah</label>
							<input class="form-control" name="nama_sekolah" value="<?php echo $data_cek['nama_sekolah']; ?>"
							/>
						</div>

						<div class="form-group">
							<label>alamat</label>
							<input class="form-control" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
							/>
						</div>

						<div class="form-group">
							<label>Akreditasi</label>
							<input type="text" class="form-control" name="akreditasi" value="<?php echo $data_cek['akreditasi']; ?>"
							/>
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="?page=MyApp/data_profil" title="Kembali" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>

<?php

if (isset ($_POST['Ubah'])){
    //mulai proses ubah
    $sql_ubah = "UPDATE tb_profil SET
        nama_sekolah='".$_POST['nama_sekolah']."',
        alamat='".$_POST['alamat']."',
        akreditasi='".$_POST['akreditasi']."'
        WHERE id_profil='".$_POST['id_profil']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = 'index.php?page=MyApp/data_profil';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = 'index.php?page=MyApp/data_profil';
          }
      })</script>";
    }
}

