<!DOCTYPE html>
<html>
<head>
    <title>Basic Banking system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style=" background-color: #e6ccff ;height:520px; width: 1681px;padding-right: 8px;">
<section id="nav-bar">

    <nav class="navbar navbar-expand-lg navbar-light" style="height:70px; width: 1681px ;padding-right: 8px;">
    <!-- Image and text -->
    <a class="navbar-brand" href="index.php">
      <img src="img/logobank.png" alt="" width="30" height="24" class="d-inline-block align-top">
      Spark bank
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsupportedContent" aria-controls="navbarsupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse show" id="navbarsupportedContent" style>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="createuser.php">Create user</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transfermoney.php">Transfer Money</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transactionhistory.php">Transaction History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userinfo.php">Contact us</a>
        </li>
      </ul>
    </div>
</nav>
  </section>

  <!----------banner section------------>

<section id="banner" style="height:695px; width: 1681px;padding-right: 8px;">
<div class="container">
<div class="row">
<div class="col-md-6" style="margin-top:83px";>
<h2 class="promo-title">Welcome to the spark foundation</h2>
<h6 class="nav-banner">Money transfer got easy</h6> 
</div>
<div class="col-md-6  text-center">
  <img src="img/sideimage.png" class="img-fluid" style="margin-top:-10px; height:520px";>
</div> 
</div>
</div>
</section>


  

<section class="my-5" style="height:476px width:1681px padding-top:73px;">
  <div class="py-3">
    <h2 class="text-center">Our Services</h2>
  </div><br>

  <div class="row activity text-center">
  <div class="container-fluid">
    <div class="row" style="width:1352px; padding-left:360px;">
      <div class="col-lg-4 col-md-4 col-12"> 
        <div class="card">
          <img class="card-img-top" src="img/users.png" alt="Card image" height="300px" width="25">
            <div class="card-body">
            <a href="createuser.php" class="btn btn-primary" role="button" style="background-color: #663a82; color: white;">Create a user</a>
          </div>
        </div>
      </div> 

      <div class="col-lg-4 col-md-4 col-12"> 
        <div class="card">
          <img class="card-img-top" src="img/moneytransfer.png" alt="Card image" height="300px" width="25">
            <div class="card-body">
            <a href="transfermoney.php" class="btn btn-primary" role="button" style="background-color: #663a82; color: white;">Transfer Money</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12"> 
        <div class="card">
          <img class="card-img-top" src="img/historymoney.png" alt="Card image" height="300px" width="20">
            <div class="card-body">
            <a href="transactionhistory.php" class="btn btn-primary" role="button" style="background-color: #663a82; color: white;">Transaction History</a>
          </div>
        </div>
      </div>   
     </div> 
  </div>
</div>
</section>

  
  
<!--Footer Section-->
<footer class="text-center mt-5 py-2 bg-dark text-white" style="height:59px; width: 1681px;padding-right: 8px;">
        <p>&copy 2021. Made by <b>Tanvi Patel</b> <br>Tanvi Patel Foundation</p>
</footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  

</body>


<script type="text/javascript">
  $("a").click(function(){
      $("a").css("background-color","");
      $(this).css("background-color","black");
  })
</script>
</html>