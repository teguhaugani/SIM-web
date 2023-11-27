<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_guru WHERE id_guru='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

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

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Ubah Guru</h3>
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
							<input type='hidden' class="form-control" name="id_guru" value="<?php echo $data_cek['id_guru']; ?>"
							 readonly>
						</div>

						<div class="form-group">
							<label>Nama Guru</label>
							<input class="form-control" name="nm_guru" value="<?php echo $data_cek['nm_guru']; ?>"
							/>
						</div>

						<div class="form-group">
							<label>Tempat Lahir</label>
							<input class="form-control" name="tpl" value="<?php echo $data_cek['tpl']; ?>"
							/>
						</div>

						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" class="form-control" name="tgl" value="<?php echo $data_cek['tgl']; ?>"
							/>
						</div>

						<div class="form-group">
							<label>Tamatan</label>
							<input type="date" class="form-control" name="tmt" value="<?php echo $data_cek['tmt']; ?>"
							/>
						</div>

						<div class="form-group">
							<label>Pendidikan Terakhir</label>
							<input class="form-control" name="pddk" value="<?php echo $data_cek['pddk']; ?>"
							/>
						</div>

						<div class="form-group">
							<label>Jabatan</label>
							<input class="form-control" name="jbtan" value="<?php echo $data_cek['jbtan']; ?>"
							/>
						</div>



					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="?page=MyApp/data_guru" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>

<?php

if (isset ($_POST['Ubah'])){
    //mulai proses ubah
    $sql_ubah = "UPDATE tb_guru SET
        nm_guru='".$_POST['nm_guru']."',
        tpl='".$_POST['tpl']."',
        tgl='".$_POST['tgl']."',
        tmt='".$_POST['tmt']."',
        pddk='".$_POST['pddk']."',
        jbtan='".$_POST['jbtan']."'
        WHERE id_guru='".$_POST['id_guru']."'";
        // WHERE id_guru'";

		// $sql_ubah = "UPDATE tb_guru SET nm_guru = '$nm_guru',tpl = '$tpl',tgl = '$tgl',tmt = '$tmt',pddk = '$pddk',jbtan = '$jbtan' WHERE  id_guru = '$id_guru'";

    $query_ubah = mysqli_query($koneksi, $sql_ubah);

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=MyApp/data_guru';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=MyApp/data_guru';
            }
        })</script>";
    }
}

