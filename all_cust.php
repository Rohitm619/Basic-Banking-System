<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Welcome to Sample Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-color:#212529;">
<?php include 'spin.php'; ?>
<style>
            .nav-link:hover {
                text-decoration: underline;
            }
        </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top"
        style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
        <div class="container-fluid">
        <a href="home.php"><img src="statics\logo.png" alt="" style="height: 80px; margin-left:25px; margin-top:10px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <b>
                <ul class="navbar-nav ">
                    <li class="nav-item nav-links" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; ">
                        <a class="nav-link text-nowrap" href="send_money.php">Send Money</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap active" href="all_cust.php">View All Customers</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="contact_us.php">Contact Us</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; margin-right:75px;">
                        <a class="nav-link text-nowrap" href="about_us.php">About Us</a>
                    </li>
                </ul>
            </b>
        </div>
    </nav>

<style>
    th,td{
        text-align:center;
    }
</style>

<center>



<div class="container" style="margin-top: 10%; padding:10px 80px 10px 80px; ">
<div style="width:80%; background-color:rgba(0,0,0,.5); padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
<h1 style=" color:white;">All Customers</h1>
</div>
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbrohit";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Connection not established: ".mysqli_connect_error());
    }else{
    
        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($conn, $sql);
?>
<table class="table table-dark" style="margin-top: 30px;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Account No</th>
      <th scope="col">Balance</th>
      <th scope="col">Send Money From</th>
    </tr>
  </thead>

  <style>
      .mybtn{
               
               box-shadow: 2px 2px 10px black;
               border-radius: 30px;
               font-weight:bold;
               background-color:lightgreen;
               color:green; 
            }

            .mybtn:active{
                background-color:green;
               color:lightgreen; 
            }
</style>
<?php
echo "<tbody>";
        while($row = mysqli_fetch_assoc($result)){
        echo    '
            <tr>
              <td>'.$row['name'].'</td>
              <td>'.$row['email'].'</td>
              <td>'.$row['accno'].'</td>
              <td>'.$row['blc'].'</td>
              <td style="padding:10px 10px 10px 10px"><a href="send_money.php"
              <button type="button" class="btn mybtn btn-outline-light">Send Money</button>
              </a></td>
            </tr>';
    }
    
    }
    echo "</tbody>";
?>
</div>
</center>

<!--
    <center>
        <footer class="footer navbar-fixed-bottom" style="color:white; height: 100px; margin: 50px 0 0 0; background-color:#212529; box-shadow: 10px 0px 0px 0px white; padding:10px 0 5px 0;">
        <div class="container">
 Copyright
<form action=""><input type="email" name="" id="">
<input type="submit" class="" value="Submit" style="border-radius:30px; color:white; border:2px solid white; padding:2px 5px 2px 5px; background-color:#212529;">
</form>
<div class="footer-copyright text-center py-3">Sparks Bank © 2021 Copyright All Rights Reserved
</div>
 Copyright

    </footer>
    </center>

     Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>