<section class="content-header">
	<h1>
		Master Data
		<small>Informasi</small>
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
					<h3 class="box-title">Tambah Informasi</h3>
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
						<?php 
							$tanggal_sekarang = date("Y-m-d");?>

						<div class="form-group">
							<label>Tanggal</label>
							<td><?php echo '<input type="date" class="form-control" name="tgl" value="' . $tanggal_sekarang . '">'; ?></td>
  
							<!-- <input type="date" name="tgl" id="tgl" class="form-control" placeholder="tanggal"> -->
						</div>

						<div class="form-group">
							<label>Informasi</label>
							<textarea name="isi" id="isi" cols="30" rows="10" class="form-control"></textarea>
							<!-- <input type="text" name="isi" id="isi" class="form-control" placeholder="Input Informasi"> -->
						</div>


					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
						<a href="?page=MyApp/data_informasi" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>

<?php

    if (isset ($_POST['Simpan'])){
    
        $sql_simpan = "INSERT INTO tb_informasi (tgl,isi) VALUES (
           '".$_POST['tgl']."',
          '".$_POST['isi']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan){

      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = 'index.php?page=MyApp/data_informasi';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = 'index.php?page=MyApp/add_informasi';
          }
      })</script>";
    }
  }
    
