<?php
if (isset($_GET['id'])) {
   include_once('config.php');
   $id = $_GET['id'];

   $sql = "DELETE FROM suppliers WHERE id='$id'";
   $result = mysqli_query($con, $sql);
   if ($result) {
    header('location: ?m=penyediajasa');
   } else {
    include('index.php?m=penyediajasa');
    echo '<script language="Javascript">';
         echo 'alert("Data gagal dihapus")';
    echo '</script>' ;   
   }
   
} else {
    echo "Jangan langsung eksekusi ke file ini, klik <a href='?m=penyediajasa'>disini</a>";
}
