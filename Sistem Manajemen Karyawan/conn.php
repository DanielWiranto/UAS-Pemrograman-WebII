<?php

$host="localhost";
$user="root";
$pass="";
$database="pgw_db";

$conn=mysqli_connect($host, $user, $pass);
if ($conn) {
   $buka=mysqli_select_db($conn,$database);
   echo "database terhubung";
   if (!$buka) {
       echo"database salah"; 
   }
}else{
    echo "Koneksi gagal";
}
?>