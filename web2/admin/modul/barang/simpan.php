<?php
include "sesi_admin.php";
if(isset($_POST['simpan'])){
	include "../koneksi.php";
	$kode_brg = $_POST['kode_brg'];
	$nama_brg = $_POST['nama_brg'];
	$stok = $_POST['stok'];
	$rak = $_POST['rak'];
	$supplier = $_POST['supplier'];
	
		$sql = "INSERT INTO tb_barang SET kode_brg='$kode_brg', nama_brg='$nama_brg', stok='$stok', rak='$rak', supplier='$supplier'";
			mysqli_query($koneksi,$sql);
	if($sql){
		 echo '<script>window.history.back()</script>';
		//echo "berhasil";
	}else{
		var_dump($sql);
		echo "gagal";
	}
}else{
	echo "gagal";
}
?>
