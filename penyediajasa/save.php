<?php
if (isset($_POST['save'])) {
   include_once('config.php');
   $name = $_POST['name'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];

   $sql = "INSERT INTO suppliers SET name='$name', address='$address', phone='$phone', email='$email'";
   $result = mysqli_query($con, $sql);
   if ($result) {
    header('location: ?m=penyediajasa');
   } else {
    include('index.php?m=penyediajasa');
    echo '<script language="Javascript">';
         echo 'alert("Data gagal di tambahkan")';
    echo '</script>' ;   
   }
   
} else {
    echo "Jangan langsung eksekusi ke file ini, klik <a href='?m=penyediajasa&s=add'>disini</a>";
}
