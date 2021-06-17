<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'link.php' ?>

   
    <style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      #sb{
        font-family: 'Creepster', cursive;
      }
      .sm{
        font-family: 'Fredericka the Great', cursive;
      }
      body{
        background: #15bd69;
      }
      .card{
        width: 75%;
        margin-left: auto;
        margin-right: auto;
        border:2px solid transparent;
        border-radius: 30px;
      }
      .alert{
        width: 60%;
        margin-left: auto;
        margin-right: auto;
        border:2px solid transparent;
        border-radius: 30px;
      }








      /* Contact */
body {
  animation: contact-bg 35s infinite;
}
@keyframes contact-bg {
  0% {
    background-color: #3d3d3d;
  }
  10%{
    background-color: #f054544f;
  }
  20% {
    background-color: #ced8e4;
  }
  30% {
    background-color: #4778b3;
  }
  40% {
    background-color: #ced8e4;
  }
  55% {
    background-color: #041a35;
  }
  75% {
    background-color: #1fdd0e;
  }
  100% {
    background-color: #dd0e76;
  }
}
 /* Contact */
@media (max-width: 600px) {
  .alert{
        width: 80%;
      }
}
      </style> 
</head>
<body>
<!--Head Nav-->
<nav>
        <div class="nav-wrapper ">
          <a href="#!" class="brand-logo" id="sb"><i class="large material-icons">account_balance</i>SB BANK</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="index.php" class="sm">Home</a></li>
            <li><a href="tabledisplay.php" class="sm">Customers Payment</a></li>
            <li><a href="alltran.php" class="sm">Transfer History</a></li>
            <li><a href="chat.php" class="sm">Chat</a></li>
            <li><a href="contact.php" class="sm">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    
      <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php" class="sm">Home</a></li>
        <li><a href="tabledisplay.php" class="sm">Customers Payment</a></li>
        <li><a href="alltran.php" class="sm">Transfer History</a></li>
        <li><a href="chat.php" class="sm">Chat</a></li>
        <li><a href="contact.php" class="sm">Contact Us</a></li>
      </ul>
<br>
<br>






<div class="container">
    <div class="card grey">
    <div class="yellow-text center-align" style="font-size:20px; font-weight:bold;">View Details</div>
    <div class="card-body">
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
          <div class="alert pink">
          <div class="row">
          <div class="col s12 m12">
          <?php

        include 'connection.php';
        $IDk = $_GET['IDs'];
        $q = "select * from bank where ID = $IDk";

        $query = mysqli_query($con,$q);

        while($res = mysqli_fetch_array($query)){
        ?>

        <div class="input-field col s12">
          <label style="color: pink; font-size:20px;">ID</label>
          <input placeholder="id" type="number" class="validate" value="<?php echo $res['ID'];  ?>" readonly required>
        </div>

        <div class="input-field col s12">
          <label style="color: pink; font-size:20px;">Account Number</label>
          <input placeholder="iacc no" type="number" class="validate" value="<?php echo $res['AccNo'];  ?>" readonly required>
        </div>

        <div class="input-field col s12">
          <label style="color: pink; font-size:20px;">Name</label>
          <input placeholder="full name" type="text" class="validate" value="<?php echo $res['Name'];  ?>" readonly required>
        </div>

        <div class="input-field col s12">
          <label style="color: pink; font-size:20px;">Email</label>
          <input placeholder="mail id" type="email" class="validate" value="<?php echo $res['Mail'];  ?>" readonly required>
        </div>

        <div class="input-field col s12">
          <label style="color: pink; font-size:20px;">Phone Number</label>
          <input placeholder="mobile no" type="number" class="validate" value="<?php echo $res['Phone'];  ?>" readonly required>
        </div>

        <div class="input-field col s12">
          <label style="color: pink; font-size:20px;">Gender</label>
          <input placeholder="gender" type="text" class="validate" value="<?php echo $res['Gender'];  ?>" readonly required>
        </div>

        <div class="input-field col s12">
          <label style="color: pink; font-size:20px;">Date Of Birth</label>
          <input placeholder="dob" type="date" class="validate" value="<?php echo $res['Dob'];  ?>" readonly required>
        </div>

        <div class="input-field col s12">
          <label style="color: pink; font-size:20px;">Total Amount</label>
          <input placeholder="amount" type="number" class="validate" value="<?php echo $res['Amount'];  ?>" readonly required>
        </div>

        <?php
 }
  ?>
      </div>
      </div>
      </div>
      </form>  
</div>
</div>
</div>

<script>
          $(document).ready(function(){
            $('.sidenav').sidenav();
      });
      </script>
</body>
</html>