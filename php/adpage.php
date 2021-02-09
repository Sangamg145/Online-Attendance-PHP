<?php
	session_start();	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="row bg-dark text-white text-center">
<div class="col-sm-11" ><h2>

	Welcome <?php echo $_SESSION['email']."  your password is " .$_SESSION['password'];
	?>
</h2>


</div>

<div class="col-sm-1">
 <h3><a href="admin.php"> Logout </a></h3>
</div>

</div>
<br>
<div class=" bg-danger">
	<div class="container card card-body bg-info">
     <div class="carousel-item active">
      
      <div class="card container bg-warning" style="width: 850px;">

<div class="row">
    <div class="col-sm-10">
      <h4>Add New Ques</h4> 
    </div>
    <div class="col-sm-2">
 <h5><a href=""> Add </a></h5>
</div>
</div>
<div class="row">
    <div class="col-sm-10">
      <h4>Delete Ques</h4> 
    </div>
    <div class="col-sm-2">
 <h5><a href=""> Delete </a></h5>
</div>
</div>
</div>
</div>
</div>

</div>
</body>
</html>