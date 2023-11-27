<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Step 4 My CSS -->
    <link rel="stylesheet"  href="Style.css">
    <!-- Akhir CSS -->

    <title>WEB PROFIL</title>
   <!-- perbedaan css dan boostrap

    <style type="text/css">
      
      h1 {
        text-align: center;
color: blue;
      }
    </style>

     -->
    <!-- Step 2 Navbar -->
    <!-- rubah warna navbar dari bg-light jadi bg-primary kemudian navbar-light jadi navbar-dark tambahkan shadow-sm -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
      <!-- Hapus fluid untuk menggeser navbar -->
  <div class="container-fluid">
    <!-- Ganti nama bran navbar di bawah menjadi nama sendiri -->
    <a class="navbar-brand" href="#">Teguh Augani</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Tambahkan ms-auto (margin start) pada bagian "navbar-nav"  -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          DATA
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="biodata.php">Biodata</a></li>
            <li><a class="dropdown-item" href="pekerjaan.php">Pekerjaan</a></li>
            <li><a class="dropdown-item" href="portofolio.php">Portofolio</a></li>
            <li><a class="dropdown-item" href="sekolah.php">Sekolah</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php #Galery">Galery</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="index.php #Contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login/login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!--  Akhir Navbar -->


<!-- Hobi -->
<section id="About">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <p><h2>About Me</h2></p>
        </div>
      </div>
    </div>

    <div class="row text-center mb-3">
        <div class="col">
          <p><h2>DATA PORTOFOLIO</h2></p>
        </div>
    </div>

    <table class="table table-bordered">
        <thead> 
            <tr> 
                <th style="width: 10px"><center>No.</center></th>
                <th><center>Nama Lengkap</center></th>
                <th><center>Nama Portofolio</center></th>
                <th><center>Jenis Portofolio</center></th> 
            </tr> 
        </thead>
        <tbody>
        <?php
            $host="localhost";
            $dbuser="root";
            $dbpass="";
            $dbname="db_web_profil";
            $koneksi=mysqli_connect($host,$dbuser,$dbpass,$dbname);
            $no=0;
            $query=mysqli_query($koneksi,"select * from tb_portofolio
            tb_biodata join tb_biodata tb_portofolio on tb_biodata.id_biodata=tb_portofolio.id_biodata");
            while ($panggil=mysqli_fetch_array($query)) {
            $no++;
        ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $panggil['nama_lengkap'] ?></td>
                <td><?php echo $panggil['nama_portofolio'] ?></td>
                <td><?php echo $panggil['jenis_portofolio'] ?></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>


  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="1" d="M0,64L48,74.7C96,85,192,107,288,128C384,149,480,171,576,192C672,213,768,235,864,240C960,245,1056,235,1152,197.3C1248,160,1344,96,1392,64L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>
  <!-- Akhir About -->
  
<!-- Footer -->
<footer class="bg-success text-white text-center pb-5">
  <p>Create with <i class="bi bi-heart-fill text-white"> By </i><a href="https://www.instagram.com/t3guh27/" class="text-white fw-bold">Teguh Augani</a> </p>
</footer>
<!-- Akhir Footer -->

  </head>
  <body>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>