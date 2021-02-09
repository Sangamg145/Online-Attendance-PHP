<?php 

include('dbcon.php')
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	

<?php 
  $name= $_POST['name'];
  $ag= $_POST['ag'];

$in="insert into answ values('','$name','$ag')";

 $data= mysqli_query($con,$in);
 ?>

 <form action="sanga.php" method="POST">
<input type="text" name="name">
<input type="text" name="ag">
<input type="submit" name=" submit">
</form>

</body>
</html>