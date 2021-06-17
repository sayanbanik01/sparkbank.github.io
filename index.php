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


  /*carosel style*/
    #one{
      background-image: linear-gradient(rgb(201, 15, 102),rgb(0, 255, 191));
    }
    #two{
      background-image: linear-gradient(rgb(255, 0, 200),rgb(43, 255, 0));
      }
    #three{
      background-image: linear-gradient(rgb(89, 0, 255),rgb(229, 255, 0));
    }
    #four{
      background-image: linear-gradient(rgb(90, 88, 84),rgb(255, 153, 0));
    }
  /*carosel style*/


      /*Footer*/
      body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }


  .fa {
  
  font-size: 15px;
  
  text-align: center;
  
  padding: 5px;
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

.griphy{
  width: 100%;
  height: 100px;
  position: relative;
}
.griphy img{
  width: 100px;
  height: 100px;
  position: absolute;
  left: 0;
  top: -10px;
  animation: grpy 5s linear infinite ;
}
@keyframes grpy {
  from{left: 0%;}
  to{left: 95%;}
  
}
@media (max-width:600px) {
  h2{
    font-size: 30px;
  }
  h4{
    font-size: 25px;
  }
}

/*about*/
@font-face{
  font-family: about;
  src: url('gallary/go3v2.ttf');
}
#About{
  font-family: about;
  font-size: 50px;
  text-align: center;
  color: #4b4a48e7;
  text-shadow: 2px 4px 5px orange;
}

.icon{
  font-size: 50px;
  transition: all;
  transition-duration: 1s;
  transition-timing-function: linear;
  color: pink;
}
.icon:hover{
  color: red;
  font-size: 120px;
}

@media (max-width: 600px) {
  #About{
    font-size: 40px;
  }
  .icon{
    font-size: 30px;
  }
  .icon:hover{
    font-size: 60px;
  }
}

/*Benifits*/
.benifits{
  text-shadow: 2px 4px 5px red;
  transition: transform 2s;
  color: grey;
}

.benifits:hover{
  transform: rotate(90deg);
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
<!--  ------------------- -->

    <div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
    <a href="goprof.php" class="btn waves-effect waves-light brown" type="submit" name="action" style="border-radius: 30px; box-shadow: 5px 5px 10px black"> Customers <i class="material-icons right">touch_app</i> </a>
    </div>
    <div class="carousel-item red" id="one">
      <h2 class="orange-text"> WELCOME TO SB BANK </h2>
      <p class="green-text"> Presenetd by Sayan Banik </p>
    </div>
    <div class="carousel-item amber white-text" id="two">
    <h2 class="grey-text"> WELCOME TO SB BANK </h2>
      <p class="brown-text text-darken-2 "> Presenetd by Sayan Banik </p>
    </div>
    <div class="carousel-item green white-text" id="three">
    <h2 class="blue-text"> WELCOME TO SB BANK </h2>
      <p class="yellow-text"> Presenetd by Sayan Banik </p>
    </div>
    <div class="carousel-item blue white-text" id="four">
    <h2 class="teal-text"> WELCOME TO SB BANK </h2>
      <p class="light-green-text"> Presenetd by Sayan Banik </p>
    </div>
  </div>
      




<!--  ------------------- -->

     <section style="background-image: linear-gradient(to left, rgb(27, 63, 141),rgb(38, 168, 114));">

      <!--Benifits-->
      
      <h1 class="center-align benifits">Benefits</h2>
      
      <br>
      <div class="row">
        <div class="col m6 s12"><img src="gallary/6617.jpg" alt="BANK" class="responsive-img" style="border-radius:10%;"></div>
        <div class="col m6 s12">
          <h4 style="color: rgb(197, 6, 95);">Immediate Transfers :</h4>
          <div><hr></div>
          <br>
          <p style=" color: pink; text-indent: 100px; text-align: justify;">Whether you need to repay a friend for a concert ticket or move a large sum from checking to savings, online banking transfers sometimes happen almost immediately. Online accounts allow consumers to move money quickly between their own accounts, between financial institutions and between some business and personal accounts — without ever stepping foot in a branch or physically handling a check or cash. Some big banks are even offering services similar to Venmo and PayPal where consumers can send money to friends through a mobile app.</p>
          <br>
          <a class="waves-effect waves-light btn"><i class="material-icons left">thumb_up</i>Thanks for Reading</a>
        </div>
      </div>

<!--Create New Account-->

<h1 class="center-align benifits">Create New Account</h2>
<br>
<div class="row">
    <div class="col s12 m6 offset-m3">
      <div class="card blue-grey darken-1" style="border-radius: 40px;">
        <div class="card-content green-text">
         <!-- <span class="card-title center-align brown-text sm">Create New Account</span>
          <br>-->
          <form class="row sb" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="col m12 s12">Full Name : <input type="text" name="name" placeholder="Enter Your Full Name" required> </div>
            <div class="col m12 s12">Email Id : <input type="email" name="mail" placeholder="Enter Email Id" required> </div>
            <div class="col m12 s12">Mobile Number : <input type="Enter Mobile Number" name="phone" required> </div>
            <div class="col m12 s12" > Your Gender :<br>
                <label class="col m4 s4">   
                <input type="radio" name="gender" value="male" required> 
                <span>MALE</span> 
                </label>
                <label class="col m4 s4 offset-s2">
                <input type="radio" name="gender" value="female" required> 
                <span>FEMALE</span>
                </label>
                <label class="col m4 s4 offset-s2">    
                <input type="radio" name="gender" value="other" required> 
                <span>OTHER</span>
                </label>
            </div>
            <div class="col m12 s12">DOB : <input type="date" name="dob" required> </div>
            <div class="col m12 s12">Amount : <input type="number" name="amount" required> </div>
            <br>
            <div class="col m12 s12 offset-l4 offset-s3" >
              <button type="submit" name="submit" class="btn pink darken-4 waves-effect waves-green"  style="border-radius: 30px; box-shadow: 5px 5px 10px black"><i class="material-icons left">person_add</i>Submit</button>
             </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  <!--Code-->
  <?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $Name = strtoupper(mysqli_real_escape_string($con, $_POST['name'])) ;
    $Mail = mysqli_real_escape_string($con, $_POST['mail']) ;
    $Phone = mysqli_real_escape_string($con, $_POST['phone']) ;
    $Gender = ucwords(mysqli_real_escape_string($con, $_POST['gender'])) ;
    $Dob = mysqli_real_escape_string($con, $_POST['dob']) ;
    $Amount = mysqli_real_escape_string($con, $_POST['amount']) ;

$emailquery = "select * from bank where Mail = '$Mail' ";
$query = mysqli_query($con, $emailquery);
if((mysqli_num_rows($query))>0){
  ?>
  <script>
    alert('Already Email Exist');
  </script>
      <?php
}
else{
        $Accno= rand(18127001,18127500);
        $insert = "insert into bank(AccNo, Name, Mail, Phone, Gender, Dob, Amount) values ($Accno, '$Name', '$Mail', '$Phone', '$Gender', '$Dob', '$Amount')";
        $insert_query = mysqli_query($con, $insert);

        if($insert_query)
        {
            ?>
            <script>
                alert("New Account Created Successfully");
                /*location.replace("index.php);*/
                window.location='tabledisplay.php';
            </script>
            <?php
        } 
        else
        {
            ?>
            <script>
                alert("Account Not Created Successfull");
            </script>
            <?php
        }

    }
}



?>
  <!--Code-->

<!--Create New Account-->

      <!--About Us-->
      <div id="About">About Us<i class="fa fa-heart icon"></i></div>


      <div class="griphy">
         <a href="https://www.animatedimages.org/cat-walking-1635.htm"><img src="https://www.animatedimages.org/data/media/1635/animated-walking-image-0019.gif" alt="animated-walking-image-0019" /></a>
      </div>
</section>
      <!--Footer-->
      <footer class="page-footer" style="background-image: linear-gradient(to right,rgb(216, 8, 42),yellow);">

         

          <div class="container" style="text-align: center; font-family: 'Kaushan Script', cursive;">
          © 2021 Presenetd by Sayan Banik
          </div>
          
          
          <div class="row center">
            <div class="col s4 l4"><a href="https://www.facebook.com/sayan.banik.752" target="blank" class="fa fa-facebook"></a></div>
            <div class="col s4 l4"><a href="mailto:sayanbanik699@gmail.com" target="blank" class="fa fa-google"></a></div>
            <div class="col s4 l4"><a href="https://www.linkedin.com/in/sayan-banik-2b9826193" target="blank" class="fa fa-linkedin"></a></a></div>
          </div>
        
      </footer>






      
      <script>
          $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
  
  });
      </script>
</body>
</html>