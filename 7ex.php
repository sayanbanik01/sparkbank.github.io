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
body{
  background-image: linear-gradient(#15bd69,rgba(60, 140, 160, 0.966));
}

      #sb{
        font-family: 'Creepster', cursive;
      }
      .sm{
        font-family: 'Fredericka the Great', cursive;
      }
.page-footer{
  padding-bottom: 1px;
}

.fa {
  
  font-size: 30px;
  
  text-align: center;
  
  padding: 10px;
  border-radius: 50%;
}
  .fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}


    </style>

    

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
 <!--Head Nav-->
 <h2 style="text-align:center;" class="sm brown-text">Transfer Money</h2>
 <div class="row">
    <form class="col s12" method="POST">
    

      <?php

        include 'connection.php';
        $IDk = $_GET['IDs'];
        $q = "select * from bank where ID = '$IDk'";

        $query = mysqli_query($con,$q);
        while($res = mysqli_fetch_array($query)){
        ?>

        

<div class="row">
    <div class="col s8 m6 offset-m3 offset-s2">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">From</span>
          
          
          <label style="color: pink; font-size:20px;">Full Name</label>
          <input placeholder="full name" name="namefrom" type="text" value="<?php echo $res['Name'];?>" readonly required>
        

        
          <label style="color: pink; font-size:20px;">Email</label>
          <input placeholder="mail id" name="emailfrom" type="email" value="<?php echo $res['Mail'];  ?>" readonly required>
       
         
        </div> 
      </div>
    </div>
  </div>

        

        
        
        <?php
 }
  ?>


<div class="row">
    <div class="col s8 m6 offset-m3 offset-s2">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">To</span>
          
          <label style="color: pink; font-size:20px;">Full Name</label>
          <input type="text" placeholder="Enter Full Name" name="nameto" required>
        
          <label style="color: pink; font-size:20px;">Acc No.</label>
          <input type="number" placeholder="Enter Account Number" name="accnoto" required>
        
          <label style="color: pink; font-size:20px;">Amount</label>
          <input type="number" placeholder="Enter Amount" name="sendmoney" required>
         
        </div> 
      </div>
    </div>
  </div>

  <div class="row">
  <div class="col  offset-m5  offset-s4">
  <button class="waves-effect waves-light pink btn" name="send"><i class="material-icons left">verified_user</i>Pay</button>
  </div>
  </div>

  
       
    </form>
    </div>
<!--Code-->

<?php
include 'connection.php';
if (isset($_POST['send']))
{
	  $name_from= $_POST['namefrom'];
	  $email_from= $_POST['emailfrom'];
    $from_search= "select * from bank where Name='$name_from' && Mail='$email_from'";
    $from_query= mysqli_query($con, $from_search);
    $from_fetch= mysqli_fetch_assoc($from_query);
    $from_accno= $from_fetch['AccNo'];

    $name_to = strtoupper(mysqli_real_escape_string($con, $_POST['nameto'])) ;
	  $accno_to= $_POST['accnoto'];
	  $to_search= "select * from bank where Name='$name_to' && AccNo='$accno_to'";
    $to_query= mysqli_query($con, $to_search);
    $to_fetch= mysqli_fetch_assoc($to_query);

	$send_money= $_POST['sendmoney'];

	if ($send_money < 0)
   {
    ?>
		    <script>
        alert("Oops! Negative money cannot be transferred");
        </script>
		<?php
    }


  
    
    else if($send_money > $to_fetch['Amount']) 
    { 
        "<script> 
                      window.location='7ex.php';
             </script>";
    }
    


    
    else if($send_money == 0)
	{
		?>
		<script>
        alert("Oops! Zero money cannot be transferred");
        </script>
		<?php
  }


  else if($from_accno == $accno_to)
	{
		?>
		<script>
        alert("Oops! Select a Valid User");
    </script>
		<?php
  }



	else
	{
		// deducting amount from sender's account
		$newbalance_from = $from_fetch['Amount'] - $send_money;
		$from_update = "update bank set Amount='$newbalance_from' where AccNo='$from_accno'";
		mysqli_query($con, $from_update);
	 

		// adding amount to reciever's account
		$newbalance_to = $to_fetch['Amount'] + $send_money;
		$to_update = "update bank set Amount='$newbalance_to' where AccNo='$accno_to'";
		mysqli_query($con, $to_update);


		// add data in transfer
		$sender = $from_fetch['Name'];
		$receiver = $to_fetch['Name'];
    $date_location= date_default_timezone_set('Asia/kolkata');
		$date = date('Y-m-d H-i-s');
		$insert_data = "insert into transfer(sender, receiver, amount, date) values ('$sender', '$receiver', '$send_money', '$date')";
		$insert_query=mysqli_query($con, $insert_data);

		if($insert_query)
		{
		?>
		<script>
        alert("Payment Successfull");
		    window.location='alltran.php';
        </script>
		<?php
		}

    $newbalance_from= 0;
		$newbalance_to= 0;
		$send_money =0;
    }

}
?>

<!--Code-->








 <!--Footer-->

<footer class="page-footer #37474f blue-grey darken-3 col s12">
<div class="container" style="text-align: center; font-family: 'Kaushan Script', cursive;">
© 2021 Presenetd by Sayan Banik
</div>
<br>
<div class="row center">
  <div class="col s4 l4"><a href="https://www.facebook.com/sayan.banik.752" class="fa fa-facebook"></a></div>
  <div class="col s4 l4"><a href="mailto:sayanbanik699@gmail.com" class="fa fa-google"></a></div>
  <div class="col s4 l4"><a href="https://www.linkedin.com/in/sayan-banik-2b9826193" class="fa fa-linkedin"></a></a></div>
</div>
</footer>

      <script>
          $(document).ready(function(){
            $('.sidenav').sidenav();
  });
      </script> 
</body>
</html>