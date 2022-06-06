<?php

session_start();
if(!$_SESSION['name'])
{
header("location:login.php");
}

error_reporting(0);
include 'conn.php';

$no = $_GET['no'];
$name = ucfirst($_POST['name']);
$age = $_POST['age'];
$salary = $_POST['salary'];
$keahlian = ucfirst($_POST['keahlian']);
$dob = date("Y-m-d",strtotime($_POST['dob']));
$doj = date("Y-m-d",strtotime($_POST['doj']));
$date_of_birth = $dob;
$date_of_join = $doj;

$q="select * from employee where no = $no";
$query = mysqli_query($conn,$q);
$res=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>

<style>
body{
	background-image:linear-gradient(rgba(71,71,71,0.7),rgba(71,71,71,0.7)),url(https://lingkunganhidup.jakarta.go.id/jakartaberketahanan/wp-content/uploads/2020/06/01fa8d29-1334-4616-bc0e-7786872d59a5_169.jpeg);

  	
	background-size: cover;
  	background-position: center;
  	
	height: 100vh;
}


</style>


</head>
<body>

<br>


<div>
<h2 class="text-white"><center><font size="10">Sistem Manajemen Karyawan</font></center></h2>

</div><br>
<div class="col-lg-6 m-auto">
	
	<form method="post">
		<br><div>
			<div class="card-header bg-dark">
				<h1 class="text-white text-center">Masukkan Data Karyawan</h1>
			</div><br>

			<input type="hidden" name="no" value="<?php echo $res['no']; ?>">
			<label>Nama</label>
			<input type="text" name="name" class="form-control" value="<?php echo $res['name']; ?>" required><br>

			<label>Umur</label>
			<input type="text" name="age" class="form-control" value="<?php echo $res['age']; ?>" required pattern="[0-9]{1,15}"
        title="this field accepts only numbers"><br>

			<label>Gaji</label>
			<input type="text" name="salary" class="form-control" value="<?php echo $res['salary']; ?>" required pattern="[0-9]{1,15}"
        title="this field accepts only numbers"><br>

			<label>keahlian</label>
			<input type="text" name="keahlian" class="form-control" value="<?php echo $res['keahlian']; ?>" required><br>

            <label>Tanggal Lahir</label>
			<input type="text" name="dob" class="form-control"
			value="<?php echo $res['date_of_birth']; ?>" placeholder="date-month-year" required><br>

			<label>Tanggal Bergabung</label>
			<input type="text" name="doj" class="form-control" value="<?php echo $res['date_of_join']; ?>" placeholder="date-month-year" required><br>

			<div class="row">
				<div class="col-md-3"><button class="btn btn-success" name="done">update</button></div>
         
			    <div class="col-md-3"><input type="button" class="btn btn-danger" name="delete" value="Delete" onclick="deleteme(<?php $_SESSION['no'] = $no; ?>)"></div>
			    <div class="col-md-3"><button class="btn btn-success" name="view">Present</button></div>

	<script type="text/javascript">
		
function deleteme(delid)
{
      if(confirm("Are you sure you want to delete ?"))
      {
      	window.location.href="delete.php";
      }
}

	</script>
		    </div><br>
		    <a href="display.php"><input type="button" name="" value="Back to records" class="btn btn-primary col-lg-12"></a>
		</div>
	</form>
</div>
<?php


if(isset($_POST['done']))
{
$q2="update employee set name = '$name' , age = $age , salary = $salary , keahlian = '$keahlian' , date_of_birth = '$date_of_birth' , date_of_join = '$date_of_join' where no = $no";
mysqli_query($conn,$q2);
//header("location:display.php");
header("refresh:0");
}

if(isset($_POST['delete']))
{
	$_SESSION['no'] = $no;
	header("location:delete.php");
}

if (isset($_POST['view'])) {

$_SESSION['no'] = $no;
	header("location:hadir1.php");

}
?>
</body>
</html>