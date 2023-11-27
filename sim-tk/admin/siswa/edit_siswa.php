<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_siswa WHERE nis='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<section class="content-header">
	<h1>
		Master Data
		<small>siswa</small>
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
					<h3 class="box-title">Ubah siswa</h3>
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
							<label>NIS</label>
							<input type='text' class="form-control" name="nis" value="<?php echo $data_cek['nis']; ?>"
							 readonly>
						</div>

						<div class="form-group">
							<label>Nama siswa</label>
							<input class="form-control" name="nama_siswa" value="<?php echo $data_cek['nama_siswa']; ?>"
							/>
						</div>

						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select name="jekel" id="jekel" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['jekel'] == "LK") echo "<option value='LK' selected>LK</option>";
                                else echo "<option value='LK'>LK</option>";
                                
                                if ($data_cek['jekel'] == "PR") echo "<option value='PR' selected>PR</option>";
                                else echo "<option value='PR'>PR</option>";
                            ?>
							</select>
						</div>

						<div class="form-group">
							<label>Kelas</label>
							<select name="id_kelas" id="id_kelas" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                    // ambil data dari database
                                    $query = "select * from tb_kelas";
                                    $hasil = mysqli_query($koneksi, $query);
                                    while ($row = mysqli_fetch_array($hasil)) {

                                    //mengecek data yang dipilih sebelumnya
                                    ?>
								<option value="<?php echo $row['id_kelas'] ?>" <?=$data_cek[
								 'id_kelas']==$row[ 'id_kelas'] ? "selected" : null ?>>
									<?php echo $row['kelas'] ?>
								</option>
								<?php
                            }
                            ?>
							</select>
						</div>

						<div class="form-group">
							<label>Th Masuk</label>
							<input class="form-control" name="th_masuk" value="<?php echo $data_cek['th_masuk']; ?>">
						</div>

						<div class="form-group">
							<label>Status</label>
							<select name="status" id="status" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
                                //cek data yg dipilih sebelumnya
                                if ($data_cek['status'] == "Aktif") echo "<option value='Aktif' selected>Aktif</option>";
                                else echo "<option value='Aktif'>Aktif</option>";
                                
                                if ($data_cek['status'] == "Lulus") echo "<option value='Lulus' selected>Lulus</option>";
                                else echo "<option value='Lulus'>Lulus</option>";

                                if ($data_cek['status'] == "Pindah") echo "<option value='Pindah' selected>Pindah</option>";
                                else echo "<option value='Pindah'>Pindah</option>";
                            ?>
							</select>
						</div>


					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="?page=MyApp/data_siswa" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>

<?php

if (isset ($_POST['Ubah'])){
    //mulai proses ubah
    $sql_ubah = "UPDATE tb_siswa SET
        nama_siswa='".$_POST['nama_siswa']."',
        jekel='".$_POST['jekel']."',
        id_kelas='".$_POST['id_kelas']."',
        th_masuk='".$_POST['th_masuk']."',
        status='".$_POST['status']."'
        WHERE nis='".$_POST['nis']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=MyApp/data_siswa';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=MyApp/data_siswa';
            }
        })</script>";
    }
}

