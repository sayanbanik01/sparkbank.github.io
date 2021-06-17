<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="height=device-height, initial-scale=1.0">
    <?php include 'link.php' ?>
    <title>Document</title>

    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    /*navbar*/
    #sb{
        font-family: 'Creepster', cursive;
      }
      .sm{
        font-family: 'Fredericka the Great', cursive;
      }
      /*navbar*/






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

table,tr,td{
  border: 1px solid grey;
  border-collapse: collapse;
}
 /*End of Contact*/ 
    </style>

    
</head>
<body>

<!--Head Nav-->
<div class="navbar-fixed">
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
      </div>
    
      <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php" class="sm">Home</a></li>
        <li><a href="tabledisplay.php" class="sm">Customers Payment</a></li>
        <li><a href="alltran.php" class="sm">Transfer History</a></li>
        <li><a href="chat.php" class="sm">Chat</a></li>
        <li><a href="contact.php" class="sm">Contact Us</a></li>
      </ul>
   <!-- Contact -->
   
   <div class="row">
   <div class="col s10 m10 offset-s1 offset-m1 ">
   <br><br>
   <h1 class="grey-text center-align sm"> Customers Details </h1>
   <br>
   <table class=" highlight centered table-bordered">
   
   <tr class="brown lime-text centered">
 
   <th class="center-align"> Id </th>
   <th class="center-align"> Full Name </th>
   <th class="center-align"> View Details </th>

   </tr >

 <?php

 include 'connection.php'; 
 $q = "select * from bank";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
    <tr class="center-align white-text">
    <td> <?php echo $res['ID'];  ?> </td>
    <td> <?php echo $res['Name'];  ?> </td>
    <td> <a href="6.php?IDs=<?php echo $res['ID']; ?>" class="waves-effect waves-light btn"> <i class="material-icons">local_library</i> </a> </td>

 </tr>

 <?php
 }
  ?>
 
 </table>  

 </div>
 </div>

  
  <!-- End of Contact -->

  <script>
          $(document).ready(function(){
            $('.sidenav').sidenav();
  });
      </script>
</body>
</html>