<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'link.php' ?>

    <title>Document</title>
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
      
      
      
section{
    height: 100vh;
    font-family: "Girassol",cursive;
    display:  flex;
    justify-content: center;
    align-items: center;
    background-image: linear-gradient(to left,rgb(218, 18, 101),rgb(103, 214, 28));
}

.about{
    height: 400px;
    width: 600px;
    overflow: scroll;
    background-color: #0c3b34;
    border-radius: 20px;
    padding: 20px;
    color: aliceblue;
    text-indent: 100px;
    position: relative;
    text-align: justify;   
}




.about:hover{
    color: grey;
    font-variant: small-caps;
  } 

  @media (max-width: 600px) {
    .about{
    top: 150px;
    height: 400px;
    width: 300px;
    overflow: scroll;
    background-color: #0c3b34;
    position: relative;
    border-radius: 20px;
    padding: 20px;
    color: aliceblue;
    text-indent: 50px;
    position: fixed;
}
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
.griphy{
  width: 100%;
  height: 100px;
  
  /*background: transparent;*/
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


    </style>
</head>
<body>
    <!--NAV-->
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


   <!--body-->


   
        <section>
          <div class="flow-text about">
          A bank is a financial institution where customers can save or borrow money. Banks also invest money to build up their reserve of money. What they do is regulated by laws. Those laws differ in different countries. The people who work at a bank are called bank employees. Certain banks deal directly with the public and they are the only ones which an ordinary person will deal with. Other banks deal with investments and international currency trading.
         <br><br>Customer's money may be placed in the bank for safe keeping. Banks may give loans to customers under an agreement to pay the money back to the bank at a later time, with interest. An example is getting a mortgage to buy a house or apartment. Banks also can use the money they have from deposit accounts to invest in businesses in order to make more money.
          </div>
        </section>

             
             
             
             
    
        <div class="griphy" style="background-image: linear-gradient(to left,rgb(218, 18, 101),rgb(103, 214, 28));">
          <a href="https://www.animatedimages.org/cat-walking-1635.htm"><img src="https://www.animatedimages.org/data/media/1635/animated-walking-image-0019.gif" alt="animated-walking-image-0019" /></a>
          </div>

    <!--Footer-->
    <footer class="page-footer #37474f blue-grey darken-3" style="background-image: linear-gradient(to right,rgb(216, 8, 42),yellow); ">

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