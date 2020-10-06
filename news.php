<!DOCTYPE html>
<html>
<head>
  <title></title>

  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="hp.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">




</head>
<body>


  <div class="topnav">
      <a class="active" href="index.php">Home</a>
      <a href="#news">Offers</a>
      <a href="#contact">Contact</a>  
      <a href="#about">About</a>
      <?php 
            session_start();

            if(isset($_SESSION['username'])){
                    echo "<a href='logout.php' style='float: right;'>Logout</a>";
                    echo "<a href='#' style='float: right;'>{$_SESSION['username']}</a>";                    
            }else{
                    echo "<a href='signup1.php' style='float: right;'>Signup</a>";
                    echo "<a href='login.php' style='float: right;'>Login</a>";
            }
      ?>
    </div>

  <div class="container row" style="background-color:#E8F4F7 ;padding-left: 0;margin-top: 87px;margin-bottom: 87px;">
    <div class="col-xl-7" style="padding-left: 0;">
      <img src="images/mask.jpg" style="width: 104%;">      
    </div>
    <div class="col-xl-5" style="text-align: center;color:#0A8FA5 ;padding-right: 0;padding-left: 67px;padding-top: 72px;">
      <p style="font-family: 'Oswald', sans-serif;font-size: 40px;">DIDICATED TO SERVING</p>
      <p style="font-family: 'Sansita Swashed', cursive;font-size: 37px;">Safely & Responsibly</p>
      <p style="font-family: 'Oswald', sans-serif;font-size: 40px;">WITH A SMILE</p>      
    </div>    
  </div>

<div style="text-align: center;padding-left: 100px;padding-right: 100px;" class="container">
  <div>
    <h1 style="font-family: 'Sansita Swashed', cursive;font-size: 3em;text-decoration: underline;">News & Update</h1>
    <h1 class="fon">Face covering required in-store for you and our team members to help keep everyone safe</h1>
      <!-- <p>in-store for you and our team members</p> -->
      <!-- <p>to help keep everyone safe</p> -->
      <p class="fon1">As we prioritize the safety and well-being of our teams, guests, and communities, face coverings will be required for guests who enter Cup o' Joe company-owned locations. Customers who are not wearing a face covering have alternate options to receive their order, including ordering at the drive-thru or order online on Joe's site. Those with underlying medical exemptions and young children are excluded from the requirement</p>
  </div>

  <div>
    <h1 class="fon">Coffee and Community fuel us.</h1>
    <p class="fon1">It’s how we start good days and gear up for late nights. It’s how we provide comfort, warmth and stamina, and now more than ever, it’s providing purpose. Your ongoing support and appreciation allow us to keep Joe open for business and our team’s livelihoods intact. As a local coffee company with deep roots and a strong community connection, we are infinitely grateful.  In return, we pledge to continue to serve you, our guests, safely and responsibly while giving back in our communities where we can.</p>
  </div>


<p style="font-family: 'Pacifico', cursive;font-size: 31px;font-weight: 600;padding-top: 50px;padding-bottom: 50px;">Though your experience visiting us may look a little different nowadays, we are here to serve you safely, responsibly, and with a smile — even if it’s under our face coverings.</p>
<p style="font-family: 'Pacifico', cursive;font-weight: 600;font-size: 40px;padding-bottom: 20px;">LET’S KEEP EACH OTHER SAFE.</p></div>

<div class="container row">
  <div class="col-xl-6">
    <img src="images/rule1.jpg" style="width: 100%;padding-top: 30px;">
  </div>
  <div class="col-xl-6">
    <img src="images/rule2.jpg" style="width: 100%;padding-top: 30px;">
  </div>  
</div>


<div class='b row' style="color:#edc8a3;background-color: #3e2b2e">
  <div>
    <h3 class="container" style="color: red;font-family: 'Bangers', cursive;font-size:xxx-large;">
    Cup o' Joe
  </h3>
  <p style="padding-left: 20px;margin-top: -21px;color: red;">COFFEE ROASTERS</p>
  </div>
  <div>
    <ul style="list-style-type:none;">
      <li>Products</li>
      <li>Our Company</li>
      <li>Join Our Team</li>
      <li>For Bussiness</li>
      <li>For Marketing</li>  
    </ul>
  </div>
  <div>
    <h3 style="font-weight:bold">
      Follow Us On :-
    </h3>
    <a href="#" style="color:#FC67F5;text-decoration: none;" class="fab fa-instagram fa-2x"></a>
    <a href="#" style="color:blue;text-decoration: none;" class="fab fa-facebook fa-2x"></a>
    <a href="#" style="color:green;text-decoration: none;" class="fab fa-whatsapp fa-2x"></a>
    <a href="#" style="color:#6777FF;text-decoration: none;" class="fab fa-discord fa-2x"></a>
  </div>
  
</div>
<div class="footer" style="color:#edc8a3;background-color: #3e2b2e">
  <p>Trademark - Cup o' Joe 2020. All Rights Reserved<br>
</p>
</div>

<?php 
include "script.php" ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>