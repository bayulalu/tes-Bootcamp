<?php

include_once 'core/init.php';

if (isset($_POST['btn'])) {
    $nama   = $_POST['name'];
    if (insert_data($nama)) {
        // die('berhasil');
    }else{
        die('gagal');
    }
    
}

$datas = cek_data();


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
<div class="container">
    <form action="" method="post">
        <label class="last">Nama Kategori</label>
        <input type="text" name="name" required><br>
        
        <input type="submit" name="btn" value="Simpan">
    </form>
    <br>
    <div class="row">
        <div class="col-md-5">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach ($datas as  $data) :
  ?>
    <tr>
      <td><?= $data['nama']  ?></td>
      <td> <a href="hapus.php?id=<?= $data['id'] ?>">Hapus</a> || <a href="edit.php?id=<?= $data['id'] ?>">Edit</a></td>
     
    </tr>
  <?php endforeach ?>
    </tbody>
</table>
        </div>
    </div>
</div>

</body>
</html>
