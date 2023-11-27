<?php

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

<section class="content-header">
	<h1>
		Master Data
		<small>Nilai</small>
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
					<h3 class="box-title">Ubah Nilai</h3>
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
							<input class="form-control" name="id_nilai" value="<?php echo $data_cek['id_nilai']; ?>"
							 readonly>
							<!-- <input type='hidden' class="form-control" name="id_nilai" value="<?php echo $data_cek['id_nilai']; ?>"
							 readonly> -->
						</div>

						<div class="form-group">
							<label>Nama Siswa</label>
							<select disabled name="nis" id="nis" class="form-control select2" style="width: 100%; ">
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
						</div>
						
				</form>
			</div>
			<!-- /.box -->
</section>

<?php

if (isset ($_POST['Ubah'])){
    //mulai proses ubah
    $sql_ubah = "UPDATE tb_nilai SET
        nis='".$_POST['nis']."',
        n11='".$_POST['n11']."',
        n12='".$_POST['n12']."',
        n13='".$_POST['n13']."',
        n14='".$_POST['n14']."',
        n21='".$_POST['n21']."',
        n22='".$_POST['n22']."',
        n23='".$_POST['n23']."',
        n24='".$_POST['n24']."',
        n31='".$_POST['n31']."',
        n32='".$_POST['n32']."',
        n41='".$_POST['n41']."',
        n42='".$_POST['n42']."',
        n43='".$_POST['n43']."',
        n44='".$_POST['n44']."',
        n45='".$_POST['n45']."',
        n51='".$_POST['n51']."',
        n52='".$_POST['n52']."',
        n53='".$_POST['n53']."',
        n54='".$_POST['n54']."',
        n61='".$_POST['n61']."',
        n62='".$_POST['n62']."',
        n71='".$_POST['n71']."',
        n72='".$_POST['n72']."',
        n73='".$_POST['n73']."',
        n74='".$_POST['n74']."',
        n81='".$_POST['n81']."',
        n82='".$_POST['n82']."',
        n83='".$_POST['n83']."',
        n84='".$_POST['n84']."'
        WHERE id_nilai='".$_POST['id_nilai']."'";

		// n31,n32,n41,n42,n43,n44,n45,n51,n52,n53,n54,n61,n62,n71,n72,n73,n74,n81,n82,n83,n84
        // WHERE id_guru'";
	// $sql_ubah = "UPDATE tb_tabungan SET
	// 	nis='".$_POST['nis']."',
	// 	setor='".$setor_hasil."',
	// 	tgl='".$tanggal."'
	// 	WHERE id_tabungan='".$_POST['id_tabungan']."'";
		// $sql_ubah = "UPDATE tb_guru SET nm_guru = '$nm_guru',tpl = '$tpl',tgl = '$tgl',tmt = '$tmt',pddk = '$pddk',jbtan = '$jbtan' WHERE  id_guru = '$id_guru'";

    $query_ubah = mysqli_query($koneksi, $sql_ubah);
	// $query_ubah = mysqli_query($koneksi, $sql_ubah);
		mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=MyApp/data_nilai';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=MyApp/data_nilai';
            }
        })</script>";
    }
}

