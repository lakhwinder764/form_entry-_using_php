<!DOCTYPE html>
<html lang="en">
<head>
  <style>
   body{

       background-image:url('lio.jpg') ;
       background-repeat: no repeat;
       background-position: center;
       background-size:cover;
       height:100%;
   }
  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>


<div class=" d-flex justify-content-center">
<form class="jumbotron mt-5 bg" method="POST">

  <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" class="form-control" placeholder="Enter email">
    <small  class="form-text text-muted">please enter your user name.</small>
  </div>
  <div class="form-group">
    <label>Degree</label>
    <input type="text" name="degree" class="form-control" placeholder="Password">
  </div>
  <div class="form-group">
    <label>mobile</label>
    <input type="mobile" name="mobile" class="form-control" placeholder="Enter email">
    <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>email</label>
    <input type="email" name="email" class="form-control" placeholder="Password">
  </div>
  <div class="form-group">
    <label>refer</label>
    <input type="text" name="refer" class="form-control" placeholder="Password">
  </div>
  <div class="form-group">
    <label>job profile</label>
    <input type="text" name="jobprofile" class="form-control" placeholder="Password">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
<a href="index1.php" >check form</a>
</html>

<?php   
   include 'index.php';
   if(isset($_POST['submit'])){
          
         $username=$_POST['username'];
         $degree=$_POST['degree'];
         $mobile=$_POST['mobile'];
         $email=$_POST['email'];
         $refer=$_POST['refer'];
         $jobprofile=$_POST['jobprofile'];
        $insertquery="insert into jobregistration(name,degree,mobile,email,refer,jobpost) values('$username','$degree','$mobile','$email','$refer','$jobprofile')";       
           $res=mysqli_query($con, $insertquery);
           if($res){
            ?>
            <script>
            alert("hello ");
            </script>
            <?php
           }
           else{
               ?>
               <script>
               alert("something went wrong");
               </script>
               <?php
           }
   }
      ?>
   
