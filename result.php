
<?php

include('dbcon.php');
session_start();
if (!isset($_SESSION['name'])) {
  header('location:index.php');
}
error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
	<title>result</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<style type="text/css">
	

	.btn {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 20px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.7s;
         }

         .btn:hover {opacity: 1}
         a{
         	color: ;
          
         }
         a:hover{
                  text-decoration:none;
                  color: red;
         }
</style>
</head>
<body>

<div class="container-fluid bg-dark text-white" align="center">
  <div class="row">
    <div class="col-sm">
      <a href="#" >
    	<h1 class="btn">
      Again Test
      
      </h1></a>
    </div>
    <div class="col-sm-6">
    	<h1>
        <?php

   echo $_SESSION['name']. " Your Result ";
    ?>
     </h1>
    </div>
    
    <div class="col-sm">

      <a href="logout.php">

    	<h1 class="btn">
    		
      Log Out
    
      </h1>  </a>
    </div>
  </div>
</div>
<br>

<?php  

$result=0;
$k=1;
   

if (isset($_POST['submit'])) {
   
if (empty($_POST['quizcheck'])) {
  echo "You Dont Have Selected Any Question";
}

   if (!empty($_POST['quizcheck'])) {
     $count= count($_POST['quizcheck']);

     $select= $_POST['quizcheck'];
#print_r($select);

?>
     <div class="container">
      <h1 class="text-danger bg-warning" style="text-align: center;">
        <?php
     echo "out of 20 you select $count " ;
     ?>
</h1>
</div>
<br>

<?php

$qq= "select * from ques";
$qww= mysqli_query($con,$qq);

while ($row4=mysqli_fetch_array($qww)) {
  
  #print_r($row4['ans_id']);

  $check = $select[$k] == $row4['ans_id'];

  if ($check) {

      $result++;

  }
  $k++;
}
?>
<div class="container ">
  <h4><?php
echo "your result is ".$result; ?>
</h4>
     </div>
<?php
   }
}




 ?>
<br>









<br>


<div class="container ">
<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    See Result
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
     <div class="carousel-item active">
      
      <div class="card">

<div class="row">
    <div class="col-sm">
      
    </div>
    <div class="col-sm-8">


 <?php
 
for ($i=1; $i <21 ; $i++) { 


 $res1 = mysqli_query($con,"select * from ques where qid=$i ");

                $row1=mysqli_fetch_array($res1);


              
?>

<h5 class="  text-white bg-secondary"><?php echo " $i"; ?>. <?php echo $row1['question']; ?></h5>

          <div class="card-body text-danger ">
<?php


  $res2 = mysqli_query($con,"select * from ans where aid=$i");

                $row2=mysqli_fetch_array($res2);

              
 ?>
 Ans.  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row2['answer']; ?>

<br>


          
            
          </div>

<?php
}


 ?>
      
    </div>
    
    <div class="col-sm">
      
      </h1>
    </div>
  </div>
    </div>

  </div>
  <footer class="text-danger" style="background:; height:100%; ">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy;       2020 Sangamg145@gmail.com. &middot;  developed by  <a href="https://facebook.com/sangam.gupta.79274/">sangam Gupta (Facebook) </a> &middot;</p>
      </footer>
</div>

</div>


</body>
</html>