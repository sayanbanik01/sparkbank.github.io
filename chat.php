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
      }
      .alert{
        width: 50%;
        margin-left: auto;
        margin-right: auto;
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
    <div class="yellow-text center-align" style="font-size:20px; font-weight:bold;">Help Center</div>
  <div class="card-body">
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
          <div class="alert pink">
          <span class="row">
          <span class="input-field col s12">
          <textarea id="textarea2" name="msg" required class="materialize-textarea" data-length="120"></textarea>
          <label for="textarea2" >Enter Query</label>
          </span>
        </span>
        <span class="row">
          
           <button type="submit" name="send" class="btn col m12 s12"> <i class="material-icons">insert_comment</i></button>
          
          </span>   
          </div>
      </form>
      
    <br>
  
    <?php
    include 'connection.php' ;
    
    if (isset($_POST['send']))
    {
      if ($con->query("insert into feed (Massage) values ('$_POST[msg]')")) {
        echo "<div class='white green-text'>Successfully send</div>";
      }else
      echo "<div class='white green-text'>Not sent Error is:".$con->error."</div>";
    }
    
    ?>  
  </div>
  
</div>

</div>





<script>
          $(document).ready(function(){
            $('.sidenav').sidenav();


            $(document).ready(function() {
    $('textarea#textarea2').characterCounter();
  });
      });
      </script>
</body>
</html>
