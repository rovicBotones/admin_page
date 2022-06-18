<?php 
  require('./session.php');



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
  <title>dashboard</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">HONCHO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
     
      <li class="nav-item">
   
        <a class="nav-link" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item">
   
        <a class="nav-link" href="#purchasehistory">Purchase History</a>
      </li>
    
      <li class="nav navbar-nav navbar-right">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
     
    </ul>
 
    </div></div>
</nav>



<br>

<div class="container">
  <h1>user_name</h1>
</div>


<div class="section-purchasehistory">
<div class="container">
<div id="purchasehistory" class="table-wrapper-scroll-y my-custom-scrollbar">
<table class="table table-dark table-sm table-striped table-bordered">
<p>Purchase History</p>
  
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Week 1</th>
      <th scope="col">Week 2</th>
      <th scope="col">Week 3</th>
      <th scope="col">Week 4</th>
      <th scope="col">Total Purchase of the Month</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">January</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">February</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">March</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">April</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">May</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">June</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">July</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">August</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">September</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">October</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">November</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">December</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>


  </tbody>
</table>
</div>
</div>
<br><br><br>
</div>

<div class="section-first_container">
  <div  class="container">
    <div class="row"> 
    <table id="coins" style="width:15%">
  <tr>
    <td>Coins= </td>
    <td>total_coins</td>
  </tr>
  
</table>
    </div>
  </div>
</div>

<div class="section-buttons">
  <div class="container">
    <div class="row">
      <div class="col-md-6"><button type="button" class="btn btn-success">Buy Coins</button></div>
    
    </div>
  </div>
</div>

<br><br>


    
 
</body>
</html>