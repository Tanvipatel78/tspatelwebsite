<!DOCTYPE html>
<html>
<head>
    <title>Basic Banking system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color :  #e6ccff !important;">
<?php
  include 'navbar.php';
?>

<section class="my-5">
  <div class="py-5">
      <h2 class="text-center">Contact Us</h2>
  </div>

  <div class="w-50 m-auto">
    <form action="userinfo.php" method="POST">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email-Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile No</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments" autocomplete="off"></textarea>
      </div>
      <button type="submit" class="btn-secondary" name="submit">Submit</button>
      <button type="submit" class="btn-secondary" name="submit">Reset</button> 
      
     </form>
  </div>
</section> 
<!--Footer Section-->
<footer class="text-center mt-5 py-2 bg-dark text-white">
        <p>&copy 2021. Made by <b>Tanvi Patel</b> <br>Tanvi Patel Foundation</p>
</footer>

</body>
</html> 

<?php 

include 'config.php';
if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $comment=$_POST['comments'];
    $sql="insert into userinfodata(username,email,mobile,comments) values('{$name}','{$email}','{$mobile}', '{$comment}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Thanks,For your comments');
                               window.location='index.php';
                     </script>";
                    
    }
  }

?>