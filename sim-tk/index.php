<?php
    //Mulai Sesion
    session_start();
    if (isset($_SESSION["ses_username"])==""){
		header("location: login.php");
    
    }else{
      $data_id = $_SESSION["ses_id"];
      $data_nama = $_SESSION["ses_nama"];
      $data_user = $_SESSION["ses_username"];
      $data_level = $_SESSION["ses_level"];
    }

    //KONEKSI DB
    include "inc/koneksi.php";
    //FUNGSI RUPIAH
	include "inc/rupiah.php";
	//Profil Sekolah
	$sql = $koneksi->query("SELECT * from tb_profil");
	while ($data= $sql->fetch_assoc()) {
	
		$nama=$data['nama_sekolah'];
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SIM TK II</title>
	<link rel="icon" href="images/logo.jpg">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/select2.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="hold-transition skin-red sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="index.php" class="logo">
				<span class="logo-lg">
					<!-- <img src="images/logo.jpg" width="45px"> -->
					<b>SIM TK II PAGAN</b>
				</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown messages-menu">
							<a class="dropdown-toggle" data-toggle="dropdown">
								<span>
									<b>
										<?= $nama; ?>
									</b>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<!-- =============================================== -->

		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				</<b>
				<div class="user-panel">
					<div class="pull-left image">
						<img src="dist/img/avatar.png" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>
							<?php echo $data_nama; ?>
						</p>
						<span class="label label-success">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>
				</br>
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">MAIN NAVIGATION</li>
					<li hidden class="header">Nis : <?php echo $_SESSION['ses_username'] ?></li>
					<?php
						$data['id_nilai'] = $_SESSION['ses_username'];
						$data['nis'] = $_SESSION['ses_username'];
					?>
					<!-- <li class="header">Nis : <?php echo $data['nis']  ?></li> -->
					<!-- <a href="?page=view_nilaia&kode=<?php echo $data['id_nilai']; ?>" title="Lihat"
								 class="btn btn-success">
									<i class="glyphicon"><img src="images/lht.png" width=15 height=20></i>
								</a> -->
					

					<!-- Level  -->
					<?php
          if ($data_level=="Administrator"){
        ?>

					<li class="treeview">
						<a href="?page=admin">
							<i class="fa fa-dashboard"></i>
							<span>Dashboard</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>

					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i>
							<span>Master Data</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<!-- <li>
								<a href="?page=MyApp/data_nilai">
									<i class="fa fa-users"></i>Nilai</a>
							</li> -->
							<li>
								<a href="?page=MyApp/data_guru">
									<i class="fa fa-users"></i>Guru</a>
							</li>
							<li>
								<a href="?page=MyApp/data_siswa">
									<i class="fa fa-users"></i>Siswa</a>
							</li>
							<!-- <li>
								<a href="?page=MyApp/data_nilais">
									<i class="fa fa-users"></i>Nilai Sementara</a>
							</li> -->
							<li>
								<a href="?page=MyApp/data_Kelompok">
									<i class="fa fa-feed"></i>Kelompok</a>
							</li>
						</ul>
					</li>

					<!-- <li class="treeview">
						<a href="#">
							<i class="fa fa-refresh"></i>
							<span>Transaksi</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">

							<li>
								<a href="?page=data_setor">
									<i class="fa fa-arrow-circle-o-down"></i>Setoran</a>
							</li>
							<li>
								<a href="?page=data_tarik">
									<i class="fa fa-arrow-circle-o-up"></i>Penarikan</a>
							</li>
							<li>
								<a href="?page=view_kas">
									<i class="fa  fa-pie-chart"></i>Info Kas</a>
							</li>
						</ul>
					</li> -->

					<!-- <li class="treeview">
						<a href="?page=view_tabungan">
							<i class="fa fa-book"></i>
							<span>Tabungan</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li> -->

					<!-- <li class="treeview">
						<a href="?page=MyApp/data_nilai">
							<i class="fa fa-book"></i>
							<span>Nilai</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li> -->


					<li class="treeview">
						<a href="?page=MyApp/data_informasi">
							<i class="fa fa-file"></i>
							<span>Informasi</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>

					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i>
							<span>Laporan</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<!-- <li>
								<a href="?page=MyApp/data_nilai">
									<i class="fa fa-users"></i>Nilai</a>
							</li> -->
							<li>
								<a href="?page=laporan">
									<i class="fa fa-book"></i>Laporan Buku Tabungan Siswa</a>
							</li>
							<li>
								<a href="?page=view_tabungan">
									<i class="fa fa-file"></i>Laporan Tabungan Siswa</a>
							</li>
							<li>
								<a href="?page=MyApp/data_nilaip">
									<i class="fa fa-file"></i>Laporan Nilai Siswa</a>
							</li>
						</ul>
					</li>

					<!-- <li class="treeview">
						<a href="?page=laporan">
							<i class="fa fa-file"></i>
							<span>Laporan</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li> -->

					<li class="header">SETTING</li>

					<li class="treeview">
						<a href="?page=MyApp/data_pengguna">
							<i class="fa fa-user"></i>
							<span>Pengguna Sistem</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>

					<li class="treeview">
						<a href="?page=MyApp/data_profil">
							<i class="fa fa-bank"></i>
							<span>Profil Sekolah</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>

					<?php
          } elseif($data_level=="Guru"){
        ?>

					<li class="treeview">
						<a href="?page=guru">
							<i class="fa fa-dashboard"></i>
							<span>Dashboard</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>

					<!-- <li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i>
							<span>Master Data</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
						
							<li>
								<a href="?page=MyApp/data_guru">
									<i class="fa fa-users"></i>Guru</a>
							</li>
							<li>
								<a href="?page=MyApp/data_siswa">
									<i class="fa fa-users"></i>Siswa</a>
							</li>
							<li>
								<a href="?page=MyApp/data_Kelompok">
									<i class="fa fa-feed"></i>Kelompok</a>
							</li>
						</ul>
					</li> -->

					<!-- <li class="treeview">
						<a href="#">
							<i class="fa fa-refresh"></i>
							<span>Transaksi</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">

							<li>
								<a href="?page=data_setor">
									<i class="fa fa-arrow-circle-o-down"></i>Setoran</a>
							</li>
							<li>
								<a href="?page=data_tarik">
									<i class="fa fa-arrow-circle-o-up"></i>Penarikan</a>
							</li>
							<li>
								<a href="?page=view_kas">
									<i class="fa  fa-pie-chart"></i>Info Kas</a>
							</li>
						</ul>
					</li> -->

					<!-- <li class="treeview">
						<a href="?page=view_tabungan">
							<i class="fa fa-book"></i>
							<span>Tabungan</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li> -->

					<li class="treeview">
						<a href="?page=MyApp/data_nilai">
							<i class="fa fa-book"></i>
							<span>Nilai</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>

					<!-- <li class="treeview">
						<a href="?page=MyApp/data_informasi">
							<i class="fa fa-file"></i>
							<span>Informasi</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li> -->

					<!-- <li class="treeview">
						<a href="?page=laporan">
							<i class="fa fa-file"></i>
							<span>Laporan</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li> -->

					<li class="header">SETTING</li>


			<?php
           } elseif($data_level=="Bendahara"){
			?>
	
						<li class="treeview">
							<a href="?page=bendahara">
								<i class="fa fa-dashboard"></i>
								<span>Dashboard</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>
	
						<li class="treeview">
							<a href="#">
								<i class="fa fa-refresh"></i>
								<span>Transaksi</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
	
								<li>
									<a href="?page=data_setor">
										<i class="fa fa-arrow-circle-o-down"></i>Setoran</a>
								</li>
								<li>
									<a href="?page=data_tarik">
										<i class="fa fa-arrow-circle-o-up"></i>Penarikan</a>
								</li>
								<li>
									<a href="?page=view_kas">
										<i class="fa  fa-pie-chart"></i>Info Kas</a>
								</li>
							</ul>
						</li>
	
						<li class="treeview">
							<a href="?page=view_tabungan">
								<i class="fa fa-book"></i>
								<span>Tabungan</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>
	
						<!-- <li class="treeview">
							<a href="?page=laporan">
								<i class="fa fa-file"></i>
								<span>Laporan</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li> -->
	
						<li class="header">SETTING</li>
	
	
				<?php
			   }elseif($data_level=="Anak"){
        ?>

					<li class="treeview">
						<a href="?page=anak">
							<i class="fa fa-dashboard"></i>
							<span>Dashboard</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>

					<li class="treeview">
						<a href="?page=data_tabungana&kode=<?php echo $data['nis']; ?>">
							<i class="fa fa-book"></i>
							<span>Tabungan</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>
					<!-- <li class="treeview">
						<a href="?page=view_tabungana">
							<i class="fa fa-book"></i>
							<span>Tabungan</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li> -->

					<li class="treeview">
						<!-- <a href="?page=data_nilaia"> -->
						<a href="?page=view_nilaia&kode=<?php echo $data['id_nilai']; ?>">
							<i class="fa fa-file"></i>
							<span>Nilai</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>

					

					<li class="header">SETTING</li>

					<?php
            }
          ?>

					<li>
						<a href="logout.php" onclick="return confirm('Anda yakin keluar dari aplikasi ?')">
							<i class="fa fa-sign-out"></i>
							<span>Logout</span>
							<span class="pull-right-container"></span>
						</a>
					</li>


			</section>
			<!-- /.sidebar -->
		
		</aside>

		<!-- =============================================== -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<!-- Main content -->
			<section class="content">
				<?php 
      if(isset($_GET['page'])){
          $hal = $_GET['page'];
  
          switch ($hal) {
              //Klik Halaman Home Pengguna
              case 'admin':
                  include "home/admin.php";
                  break;
              case 'guru':
                  include "home/guru.php";
                  break;
			  case 'bendahara':
				  include "home/bendahara.php";
				  break;
			  case 'anak':
				  include "home/anak.php";
				  break;
        
              //Pengguna
              case 'MyApp/data_pengguna':
                  include "admin/pengguna/data_pengguna.php";
                  break;
              case 'MyApp/add_pengguna':
                  include "admin/pengguna/add_pengguna.php";
                  break;
              case 'MyApp/edit_pengguna':
                  include "admin/pengguna/edit_pengguna.php";
                  break;
              case 'MyApp/del_pengguna':
                  include "admin/pengguna/del_pengguna.php";
				  break;
				  
				//Profil
              case 'MyApp/data_profil':
                  include "admin/profil/data_profil.php";
                  break;
              case 'MyApp/edit_profil':
                  include "admin/profil/edit_profil.php";
                  break;


              //Kelas
              case 'MyApp/data_Kelompok':
                  include "admin/Kelompok/data_Kelompok.php";
                  break;
              case 'MyApp/add_Kelompok':
                  include "admin/Kelompok/add_Kelompok.php";
                  break;
              case 'MyApp/edit_Kelompok':
                  include "admin/Kelompok/edit_Kelompok.php";
                  break;
              case 'MyApp/del_Kelompok':
                  include "admin/Kelompok/del_Kelompok.php";
                  break;

				//Nilai
				case 'MyApp/data_nilai':
					include "admin/nilai/data_nilai.php";
					break;
				case 'MyApp/add_nilai':
					include "admin/nilai/add_nilai.php";
					break;
				case 'MyApp/edit_nilai':
					include "admin/nilai/edit_nilai.php";
					break;
				case 'MyApp/del_nilai':
					include "admin/nilai/del_nilai.php";
					break;
				case 'MyApp/view_nilai':
						include "admin/nilai/view_nilai.php";
						break;
				case 'MyApp/cetak_nilai':
						include "admin/nilai/cetak-nilai.php";
						break;
				case 'MyApp/print_nilai':
						include "admin/nilai/print_nilai.php";
						break;

				//Nilai sementara
				case 'MyApp/data_nilais':
					include "admin/nilais/data_nilai.php";
					break;
				case 'MyApp/add_nilais':
					include "admin/nilais/add_nilai.php";
					break;
				case 'MyApp/edit_nilais':
					include "admin/nilais/edit_nilai.php";
					break;
				case 'MyApp/del_nilais':
					include "admin/nilais/del_nilai.php";
					break;
				case 'MyApp/view_nilais':
						include "admin/nilais/view_nilai.php";
						break;
				case 'MyApp/cetak_nilais':
						include "admin/nilais/cetak-nilai.php";
						break;
				case 'MyApp/print_nilais':
						include "admin/nilais/print_nilai.php";
						break;

				//Nilai Print
				case 'MyApp/data_nilaip':
					include "admin/nilaip/data_nilai.php";
					break;
				case 'MyApp/add_nilaip':
					include "admin/nilaip/add_nilai.php";
					break;
				case 'MyApp/edit_nilaip':
					include "admin/nilaip/edit_nilai.php";
					break;
				case 'MyApp/del_nilaip':
					include "admin/nilaip/del_nilai.php";
					break;
				case 'MyApp/view_nilaip':
						include "admin/nilaip/view_nilai.php";
						break;
				case 'MyApp/cetak_nilaip':
						include "admin/nilaip/cetak-nilai.php";
						break;
				case 'MyApp/print_nilaip':
						include "admin/nilaip/print_nilai.php";
						break;

				
						
				//Guru
				case 'MyApp/data_guru':
					include "admin/guru/data_guru.php";
					break;
				case 'MyApp/add_guru':
					include "admin/guru/add_guru.php";
					// include "admin/nilai/add_nilai.php";
					break;
				case 'MyApp/edit_guru':
					include "admin/guru/edit_guru.php";
					break;
				case 'MyApp/del_guru':
					include "admin/guru/del_guru.php";
					break;

					//Informasi
				case 'MyApp/data_informasi':
					include "admin/informasi/data_informasi.php";
					break;
				case 'MyApp/add_informasi':
					include "admin/informasi/add_informasi.php";
					break;
				case 'MyApp/edit_informasi':
					include "admin/informasi/edit_informasi.php";
					break;
				case 'MyApp/del_informasi':
					include "admin/informasi/del_informasi.php";
					break;

              //Siswa
              case 'MyApp/data_siswa':
                  include "admin/siswa/data_siswa.php";
                  break;
              case 'MyApp/add_siswa':
                  include "admin/siswa/add_siswa.php";
                  break;
              case 'MyApp/edit_siswa':
                  include "admin/siswa/edit_siswa.php";
                  break;
              case 'MyApp/del_siswa':
                  include "admin/siswa/del_siswa.php";
				  break;
				  
				//Setor
              case 'data_setor':
                  include "petugas/setor/data_setor.php";
                  break;
              case 'add_setor':
                  include "petugas/setor/add_setor.php";
                  break;
              case 'edit_setor':
                  include "petugas/setor/edit_setor.php";
                  break;
              case 'del_setor':
                  include "petugas/setor/del_setor.php";
				  break;
				  
				//Tarik
              case 'data_tarik':
                  include "petugas/tarik/data_tarik.php";
                  break;
              case 'add_tarik':
                  include "petugas/tarik/add_tarik.php";
                  break;
              case 'edit_tarik':
                  include "petugas/tarik/edit_tarik.php";
                  break;
              case 'del_tarik':
                  include "petugas/tarik/del_tarik.php";
				  break;
				  
				//Tabungan
				case 'data_tabungan':
					include "petugas/tabungan/data_tabungan.php";
					break;
				case 'view_tabungan':
					include "petugas/tabungan/view_tabungan.php";
					break;

				//Tabungananak
				case 'data_tabungana':
					include "anak/tabungan/data_tabungan.php";
					break;
				case 'view_tabungana':
					include "anak/tabungan/view_tabungan.php";
					break;

				//Nilai Anak
				case 'data_nilaia':
					include "anak/nilai/data_nilai.php";
					break;
				case 'view_nilaia':
					include "anak/nilai/view_nilai.php";
					break;

				//kas
				case 'kas_tabungan':
					include "petugas/kas/data_kas.php";
					break;
				case 'kas_full':
					include "petugas/kas/kas_full.php";
					break;
				case 'view_kas':
					include "petugas/kas/view_kas.php";
					break;

				//laporan
				case 'laporan':
					include "petugas/laporan/view_laporan.php";
					break;

				
             

          
              //default
              default:
				  echo "<center><br><br><br><br><br><br><br><br><br>
				  <h1> Halaman tidak ditemukan !</h1></center>";
                  break;    
          }
      }else{
        // Auto Halaman Home Pengguna
          if($data_level=="Administrator"){
              include "home/admin.php";
              }
                  elseif($data_level=="Guru"){
                      include "home/guru.php";
                      }
					elseif($data_level=="Bendahara"){
						include "home/bendahara.php";
						}
						elseif($data_level=="Anak"){
							include "home/anak.php";
							}
							}
    ?>



			</section>
			<!-- /.content -->
		</div>

		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
			</div>
			<strong>Copyright &copy;
				<a href="https://www.proyekit.com/">TEGUH AUGANI, A.Md.Kom.</a></strong> 
		</footer>
		<div class="control-sidebar-bg"></div>

		<!-- ./wrapper -->

		<!-- jQuery 2.2.3 -->
		<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap 3.3.6 -->
		<script src="bootstrap/js/bootstrap.min.js"></script>

		<script src="plugins/select2/select2.full.min.js"></script>
		<!-- DataTables -->
		<script src="plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

		<!-- AdminLTE App -->
		<script src="dist/js/app.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="dist/js/demo.js"></script>
		<!-- page script -->


		<script>
			$(function() {
				$("#example1").DataTable();
				$('#example2').DataTable({
					"paging": true,
					"lengthChange": false,
					"searching": false,
					"ordering": true,
					"info": true,
					"autoWidth": false
				});
			});
		</script>

		<script>
			$(function() {
				//Initialize Select2 Elements
				$(".select2").select2();
			});
		</script>
</body>

</html>