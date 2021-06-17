<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "spark";

$con = mysqli_connect($server,$user,$pass,$db );


if(!($con)){
    ?>
    <script>
        alert("Connection Unsuccessfull");
    </script>
    <?php
}

?>