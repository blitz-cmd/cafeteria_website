<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Signup</title>  
  <link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="signup.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body>


<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand mr-auto mr-lg-0 fas fa-coffee" href="index.php" style="padding-right: 20px;font-size: 30px;"><span style="padding-left: 20px;">Cup o' Joe</span></a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link dep" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link dep" href="news.php">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link dep" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link dep" href="#">Contact Us</a>
      </li> 
      <?php  
            session_start();
            if(isset($_SESSION['username'])){ 
                echo '<li class="nav-item">
                <a class="nav-link dep" href="#">'.$_SESSION["username"].'</a>
                </li>';
                echo '<li class="nav-item">
                <a class="nav-link dep" href="logout.php">Logout</a>
                </li>';}else{
      
                echo '<li class="nav-item">
                  <a class="nav-link dep" href="login.php">Login</a>
                </li>';  
                echo '<li class="nav-item">
                  <a class="nav-link dep" href="signup.php">SignUp</a>
                </li>';
              } ?>     
    </ul>

    
  </div>
</nav>




  <div class="container">
    <div class="row1">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
              <div class="form-label-group">
                <input type="text" autocomplete="off" id="inputUserame" name="username" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUserame">Username</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" autocomplete="off" name="email" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Email</label>
              </div>
              
              

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" name="cpassword" class="form-control" placeholder="Password" required>
                <label for="inputConfirmPassword">Re-enter</label>
              </div>
              
              <div class="g-recaptcha" data-sitekey="<<your recaptcha api key>>" style="padding-left: 34px; padding-bottom: 15px;"></div>


              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Register</button>
              <a class="d-block text-center mt-2 small" href="login.php">Have an account? Sign In</a>
              <hr class="my-4">
              <div style="text-align: center;">

              <?php 
              include "dbcon.php";

              if(isset($_POST['submit'])){
                $username=mysqli_real_escape_string($con,$_POST['username']);
                $email=mysqli_real_escape_string($con,$_POST['email']);
                $password=mysqli_real_escape_string($con,$_POST['password']);
                $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);
                $a=0;

                $pass=password_hash($password, PASSWORD_BCRYPT);
                $emailquery="select * from signup where email='$email'";
                $query=mysqli_query($con,$emailquery);
                $emailcount=mysqli_num_rows($query);

                $secretkey="<<your recaptcha secret key>>";
                $responsekey=$_POST['g-recaptcha-response'];
                $userip=$_SERVER['REMOTE_ADDR'];
                $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$responsekey&remoteip=$userip";
                $response=file_get_contents($url);
                $response=json_decode($response);
                date_default_timezone_set('Asia/Kolkata');
                $date = date('d-m-Y H:i:s'); 
                // echo $response;

                if($response->success){
                if($emailcount>0){
                  echo "<span>*email already exist</span>";
                }else{
                  if($password===$cpassword){
                    $insertquery="insert into signup (username,email,password,cdate) values ('$username','$email','$pass','$date')";
                    $iquery=mysqli_query($con,$insertquery);

                      if($iquery){ 
                      echo "<p id='hgf'>Account created successfully!</p>";
                      $a=1;
                      $_SESSION['pdetails']="signup";
                      }else{
                        echo "<span>Error!cannot create account</span>";
                      }
                  }else{
                    echo "<span>*password not matching!<span>";
                  }
                  }
                }else{
                  echo "<span>Invalid recaptcha</span>";
                }}
             ?>


           </div>


              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php  include "footer.php";?>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script>
            $(window).bind("resize", function () {
            console.log($(this).width())
            if ($(this).width() < 415) {
                $('.card-body').removeClass('card-body').addClass('card-body container')
            } else {
                $('.card-body').removeClass('card-body container').addClass('card-body')
            }
            }).trigger('resize');

            $(function () {
          'use strict'

          $('[data-toggle="offcanvas"]').on('click', function () {
          $('.offcanvas-collapse').toggleClass('open')
           })
          })
    </script>
    
</html>