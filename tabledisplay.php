<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include 'link.php' ?>
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

#sb{
        font-family: 'Creepster', cursive;
   }
.sm{
        font-family: 'Fredericka the Great', cursive;
   }

body {
  margin: 0;
  font-family: Arial;
  font-size: 10px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  /*min-width: 100%; 
  min-height: 100%;*/
  height: 100vh;
  width: 100%;
  object-fit: cover;
}

.content {
  position: absolute;
  top: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}


table,th,td{
  border: 2px solid grey;
  border-collapse: border;
}
th{
  text-align: center;
}
@media (min-width:800px) {
  #myVideo {
  width: 100%;
}
}
@media (max-width:300px){
  a#sb
  {
    display: none;
  }
}

</style>
</head>
<body>

<video autoplay muted loop id="myVideo">
  <source src="gallary/pexels-mikhail-nilov-7722577.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
 <!--Head Nav-->
 <nav class="transparent ">
        <div class="nav-wrapper ">
          <a class="brand-logo" id="sb"><i class="large material-icons">account_balance</i>SB BANK</a>
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


 <div class="container">
 <div class="col l12">
 <br><br>
 <h1 class="green-text center-align" style="text-shadow: 5px 4px 5px pink;" > Payment </h1>
 <br>
 <table class="table highlight centered">
 
 <tr class="blue-grey white-text">
 <th> Id </th>
 <th> Full Name </th>
 <th> View Details </th>
 <th> Pay Now </th>
 </tr >

 <?php

 include 'connection.php'; 
 $q = "select * from bank";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="yellow-text text-darken-2">
 <td> <?php echo $res['ID'];  ?> </td>
 
 <td> <?php echo $res['Name'];  ?> </td>
 
 <td> <button class="btn-danger btn"> <a href="6.php?IDs=<?php echo $res['ID']; ?>" class="white-text"> <i class="material-icons">local_florist</i> </a>  </button> </td>
 <td> <button class="btn-danger btn"> <a href="7ex.php?IDs=<?php echo $res['ID']; ?>" class="white-text"> <i class="material-icons">account_balance_wallet</i> </a>  </button> </td>
 
 </tr>

 <?php
 }
  ?>
 
 </table>  
 </div>
 </div>
</div>

<script>
          $(document).ready(function(){
            $('.sidenav').sidenav();
  });
      </script>
</script>

</body>
</html>
