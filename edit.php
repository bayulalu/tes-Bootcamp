<?php 
require_once 'core/init.php';

$id = $_GET['id'];
if (isset($_GET['id'])) {
	$data = tampilkan_per_id($id);

	while ($row = mysqli_fetch_assoc($data)) {
		$nama_awal = $row['nama'];
		
	}
}

if (isset($_POST['btn'])) {
	$nama = $_POST['name'];
    if (edit_data($nama,$id)) {
        echo "<script language='JavaScript'>alert('Edit Data Berhasil');
                document.location = '6b.php';
            </script>";
    }
	
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
<body>
<br>
<h1 class="text-center"> Edit Kategori</h1>
<div class="container">
    <form action="" method="post">
        <label class="last">Nama Kategori</label>
        <input type="text" value="<?= $nama_awal?>" name="name" placeholder="nama" required><br>
        
        <input type="submit" name="btn" value="Edit">
    </form>
    <br>
    
</div>

</body>
</html>