<?php

include('dbcon.php');

session_start();
if (!isset($_SESSION['name'])) {
  header('location:index.php');
}

//$result = mysqli_query($con,"SELECT * FROM registration WHERE name = 'Sangam Gupta'");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		body{
			background-image: url(2.jpg);
			background-size: cover;
		}
	</style>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-light bg-info ">
  
  </h2>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    	<img src="22.png" style="width: 90px;height: 60px;">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Student</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">News</a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php
    ">Log-Out</a>
      </li>

      <h2 style="color: white; margin-left: 100px;">
        <?php
      echo $_SESSION['name'];

     

        ?>

  </h2>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<?php

//if ($data) {
   //	            echo "Data Inserted Into DataBase";
 //  }

//echo "<br>Your Email Is : $email";
 //   echo "<br>Your password is : $password ";


?>
<div class="container-fluid">
<h1 class="text-center text-danger">
<?php
echo "Hello ".$_SESSION['email']." Start Your Test";
?>

</h1>
<br>

</div>
</a>
<div class="container">
<h2>Before Test Read The Term of Exam</h2>
<p>Multiple-choice exams can usually be graded by one or two people in about an hour if you use a scanner and software to grade and analyze the exams.</p>
Scantron grading software provides a number of test analysis options, including item-by-item analysis of question responses.<p> If students are doing worse than chance on a particular question, it is likely that the question was poorly worded. In this case you should either give credit for more than one answer or toss the question out (by giving everyone credit).
With other formats, it is often a good idea to divide the exam questions among graders.</p>
<p> This is more likely to provide grading consistency and make it possible for a grader to spot patterns of deviation for a single question or problem.<p></p> For all exam formats, you may think that you have written the perfect question with only one correct answer, but always be prepared for alternative answers. Consider allowing students to submit regrade petitions justifying their solutions.</p>
</div>
<br>
<div class="container col-lg-6 text-center">
<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Click Here To Start Your Test
  </a>
</p>
<form action="result.php" method="post">
<div class="collapse" id="collapseExample">
  <div class="card card-body">
     <div class="carousel-item active">
      
      <div class="card container ">


<?php
for ($i=0; $i <30; $i++) { 
  # code...

 $qu1="select * from ques where qid=$i";

   $qer1=mysqli_query($con,$qu1);
   while ($rows1=mysqli_fetch_array($qer1)) {
?>
          <h5 class=" text-center text-white bg-secondary"><?php echo " $i"; ?>. <?php echo $rows1['question'] ?></h5>

          <?php 
               $qu2="select * from answ where ans_id=$i";

                $qer2=mysqli_query($con,$qu2);

                while ($rows2=mysqli_fetch_array($qer2)) {

           ?>

          <div class="card-body text-danger " style="margin-left: 50px;">
    <input type="radio" name="quizcheck[<?php echo $rows2['ans_id']  ?>]" value="<?php echo $rows2['aid'] ?>" >
            <?php echo $rows2['answer'] ?>
            
          </div>

<?php }
       }}
     
 ?>

    </div>
  </div>
  <br><div class="text-center container" style="width: 200px;">
  <input class="text-white bg-success" type="submit" value="SUBMIT" name="submit">
</div>
 </form>

 
  <br>
</div>
</div>
<br>
<footer class="text-danger" style="background:; height:100%; ">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy;       2020 Sangamg145@gmail.com. &middot;  developed by  <a href="https://facebook.com/sangam.gupta.79274/">sangam Gupta (Facebook) </a> &middot;</p>
      </footer>
</div>

</div>
</body>
</html>