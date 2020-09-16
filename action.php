
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SHIVANGI SRIVASTAVA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color:white;">

<div class="container">
  
<?php 

include 'connect.php';


  $x =$_POST['name'];
  $y=$_POST['email'];
  $z=$_POST['number'];
  $p=$_POST['message'];
  

   $sql= "INSERT INTO `ni` (`name`, `email`, `phone`, `message`) VALUES (' ".$x."','".$y."','".$z."' ,'".$p."')";
  
   $execute =mysqli_query($conn,$sql);
   
   if($execute){
       echo '<div class="alert alert-success" STYLE="margin:20px;text-align:center;">
       <strong>YOUR MESSAGE IS RECEIVED !<br> WE WILL CONTACT YOU SOON ! </strong>
     </div>' ;
   }
   else {
       echo "note done";
   }
   ?>

</body>
</html>









