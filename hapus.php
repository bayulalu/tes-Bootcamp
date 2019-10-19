<?php 
   require_once 'core/init.php';

   if (isset($_GET['id'])) {
       if (hapus_data($_GET['id'])) {
           header("Location:6b.php");
       
       }else{ 
       echo "gagal mengapus data"; 
       }
   }
?>