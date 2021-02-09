<?php include('..\dbcon.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="text-right container"><a href="..\index.php">  Homepage</a></div>
	<div class="container text-center bg-warning" style="width: 300px; margin-top: 5%;">



<h2>Admin Login</h2>

		<form action="" method="POST">
			<br>
			<img src="std.png" style="width: 90px;height: 70px;text-align: center;border: 1px solid;border-radius:35px 35px 35px 35px; background-color: pink;">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
</form>
		
		<?php


session_start();
if (isset($_POST['submit'])) {


$qu1= mysqli_query($con, "select * from admin");

$rows1=mysqli_fetch_array($qu1);


			header('location:adpage.php');

	$_SESSION['email']= $_POST['email'];

		$_SESSION['password'] = $_POST['password'];

 if (isset($_POST['password']) && ($_POST['password']==$rows1['password'])) {

 	header('location:adpage.php');

  		}
	else{

			header('location:admin.php');

			
	}

	}	?>

	
	


	</div>

</body>
</html>