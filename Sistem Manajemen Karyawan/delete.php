<?php
session_start();
if(!$_SESSION['name'])
{
header("location:login.php");
}

include 'conn.php';

$no = $_SESSION['no'] ;
//echo $no;
$q = " DELETE FROM employee WHERE no = '$no' ";

mysqli_query($conn,$q);

header("location:display.php");
?>