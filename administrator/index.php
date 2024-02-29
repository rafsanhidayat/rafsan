<html>
<body>
	<style>
            body {
            margin: 0;
            padding: 0;
            background: url(../assets/yos.jpeg);
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
                }
    </style>
</body>
</html>
<?php
include "header.php";
include "navbar.php";
?>
<div class="container">
<div class="card bg-primary-subtle mt-5">
	<div class="card-body">
		<h4 class="text-center">SELAMAT DATANG</h4>
	</div>
</div>
</div>
<div class="container">
	<div class="mt-5">
		<div class="row">
			<div class="col-sm-4">
				<div class="card bg-info">
					<div class="card-body bg-transparent">
						Data Barang
						<?php
						include '../koneksi.php';
						$data_produk = mysqli_query($koneksi,"SELECT * FROM produk");
						$jumlah_produk = mysqli_num_rows($data_produk);
						?>
						<h2><?php echo $jumlah_produk; ?></h2>
						<a href="data_barang.php" class="btn btn-outline-dark btn-sm"><h5>Detail</h5></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card bg-secondary">
					<div class="card-body bg-transparent">
						Data Pembelian
						<?php
						include '../koneksi.php';
						$data_penjualan = mysqli_query($koneksi,"SELECT * FROM penjualan");
						$jumlah_penjualan = mysqli_num_rows($data_penjualan);
						?>
						<h2><?php echo $jumlah_penjualan; ?></h2>
						<a href="pembelian.php" class="btn btn-outline-dark btn-sm"><h5>Detail</h5></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card bg-success">
					<div class="card-body bg-transparent">
						Data Pengguna
						<?php
						include '../koneksi.php';
						$data_petugas = mysqli_query($koneksi,"SELECT * FROM petugas");
						$jumlah_petugas = mysqli_num_rows($data_petugas);
						?>
						<h2><?php echo $jumlah_petugas; ?></h2>
						<a href="data_pengguna.php" class="btn btn-outline-dark btn-sm"><h5>Detail</h5></a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
include "footerr.php";
?>
</div>