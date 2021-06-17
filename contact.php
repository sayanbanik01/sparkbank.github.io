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
    height: 100vh;
    font-family: "Girassol",cursive;
    /*background-color: hsl(0, 0%, 94%);*/
    background-image: linear-gradient(#64605f,rgba(73, 14, 14, 0.966));
    display:  flex;
    justify-content: center;
    align-items: center;
}
.card{
    height: 350px;
    width: 470px;
    background-color: #0c3b34;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
    position: relative;
    border-radius: 20px;
    padding: 20px;
    color: aliceblue;
    
}
.card img{
    height: 400px;
    max-width: 100%;
    position: absolute;
    top: -15%;
    left: 10%;
    transform: translateX(-50%, -50%);
    transition: 0.5s;    /*transition: 0.5s;*/
}
.card h2{
    margin-top: 20px;
    color: #e5aa1d;
    transition 0.5s;
    opacity: 0;
}
.card p,a{
    font-family: "Source Sans Pro", sans-serif;
    transition 0.5s;
    opacity: 0;
    box-sizing: border-box;

}

.card p{
    width: 200px;
    margin-bottom: 25px;
    color:grey;
}

.card:hover img{
    
    /*left: -5px;*/
    right: -100%;;
    top: -30%;;
    height: 460px;
    transform: translateX(50%); 
}

.card:hover h2{
    font-size: 40px;
    margin-bottom: 15px;
    letter-spacing: 1px;
    opacity: 1;
}

.card:hover p,
.card:hover a{
    opacity: 1;
}

@media (max-width: 600px) {
    .card{width: 300px; height: 300px;}

    .card img{height: 200px; top: 15%; left: 20%;}

    .card:hover img{left: 0%; top: 15%; height: 255px; transform: translateX(50%);}

    .card:hover h2{font-size: 20px;}

    .card:hover p{font-size: 10px;}

    .card:hover a{
        font-size: 10px;
        padding: 5px 5px;
    }



}

    </style>

    
</head>
<body>
    <div class="card">
    <div class="content">
        <h2>CONTACT</h2>
        <p>
            NAME : SAYAN Banik <br>
            MOBILE NUMBER : +9170018XXXXX <br>
            MAIL ID : sayanbanik699@gmail.com
        </p>
        <a class="waves-effect waves-yellow grey pink-text text-darken-4" href="about.php" style="border-radius:100px; font-weight: bold; padding:5px; box-shadow: 2px 4px 5px red;">Read About SB BANK</a>
        <br>
        <br>
        
        <a class="waves-effect waves-yellow grey pink-text text-darken-4" href="index.php" style="border-radius:100px; font-weight: bold; padding:5px; box-shadow: 2px 4px 5px red;">HOME</a>
    </div>
    <img src="gallary\img.png" alt="img.png">
    <div>
</body>
</html>