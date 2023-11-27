<?php
    include "../inc/koneksi.php";
    //FUNGSI RUPIAH
    include "../inc/rupiah.php";

    $nis = $_GET['nis'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tabungan Siswa</title>
</head>

<body>
	<center>

		<h2>Tabungan Siswa</h2>
		<h3>TK TUAN KADHI II PADANG GANTING</h3>
		<!-- <p>Jl. Niaga Desa Nogosari Kecamatan Sukosari</p> -->
		<p>Rajin Pangkal Pandai. Hemat Pangkal Kaya.</p>
		<p>___________________________________________________________________</p>

		<tbody>
			<?php
                 $sql_tampil = "select * from tb_siswa 
                 where nis ='$nis'";
                 
                 $query_tampil = mysqli_query($koneksi, $sql_tampil);
                 $no=1;
                 while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
                ?>

			<tr>
				<td>NIS</td>
				<td>:</td>
				<td>
					<?php echo $data['nis']; ?>
				</td>
			</tr>
			<br>
			<tr>
				<td>Nama Siswa</td>
				<td>:</td>
				<td>
					<?php echo $data['nama_siswa']; ?>
				</td>
			</tr>
			<br>
			<br>
			<?php } ?>
		</tbody>

		<table border="1" cellspacing="0">
			<thead>
				<tr>
					<th>No.</th>
					<th>Tanggal</th>
					<th>Pemasukan</th>
					<th>Pengeluaran</th>
					<th>Petugas</th>
				</tr>
			</thead>


			<tbody>

				<?php
                $sql_tampil = "select s.nis, s.nama_siswa, t.id_tabungan, t.setor, t.tarik, t.tgl, t.petugas from 
                tb_siswa s join tb_tabungan t on s.nis=t.nis 
                where s.nis ='$nis' order by tgl asc";
                
                $query_tampil = mysqli_query($koneksi, $sql_tampil);
                $no=1;
                while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
                ?>
				<tr>
					<td>
						<?php echo $no; ?>
					</td>
					<td>
						<?php  $tgl = $data['tgl']; echo date("d/M/Y", strtotime($tgl))?>
					</td>
					<td align="right">
						<?php echo rupiah($data['setor']); ?>
					</td>
					<td align="right">
						<?php echo rupiah($data['tarik']); ?>
					</td>
					<td>
						<?php echo $data['petugas']; ?>
					</td>
				</tr>
				<?php
            $no++;
            }
        ?>
			</tbody>
			<tr>
				<td colspan="2">Total Setoran</td>
				<td colspan="3">
					<?php
                    $sql = $koneksi->query("SELECT SUM(setor) as Tsetor  from tb_tabungan where jenis='ST' and nis='$nis'");
                    while ($data= $sql->fetch_assoc()) {
                    echo rupiah($data['Tsetor']); }?>
				</td>
			</tr>
			<tr>
				<td colspan="3">Total Penarikan</td>
				<td colspan="3">
					<?php
                    $sql = $koneksi->query("SELECT SUM(tarik) as Ttarik  from tb_tabungan where jenis='TR' and nis='$nis'");
                    while ($data= $sql->fetch_assoc()) {
                    echo rupiah($data['Ttarik']); }?>
				</td>
			</tr>
			<tr>
				<td colspan="2">Saldo Tabungan</td>
				<td colspan="3">
					<?php
                    $sql = $koneksi->query("SELECT SUM(setor)-SUM(tarik) as Total  from tb_tabungan where nis='$nis'");
                    while ($data= $sql->fetch_assoc()) {
                    echo rupiah($data['Total']); }?>
				</td>
			</tr>
		</table>
		
	</center>
	<script>
		window.print();
	</script>

</body>

</html>