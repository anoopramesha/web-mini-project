<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    
     body{
            background-image: url('Movies.jpg');
        }
    html { overflow-y: scroll; }
    
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    border-radius: 10px;
     position:absolute;
    top:30%;
    left: 35%;
    
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    
}

li a:hover:not(.active) {
    background-color: black;
}

.active {
    background-color: red;
}
 .carousel-inner > .item > img,
 .carousel-inner > .item > a > img {
     display: block;
     max-width: 1200px !important;
     height: 400px !important;
 }
    </style>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/Users/sriganesh/Documents/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script src="/Users/sriganesh/Downloads/jquery.min.js"></script>
  <script src="/Users/sriganesh/Documents/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
<img src="Media/Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 4%; right:37%">
    
<ul>
  <li><a  class="active" href="HomePage.html">Home</a></li>
  <li><a  href="MoviesPage.html">Movies</a></li>
  <li><a href="BookingHistory.html">Booking History</a></li>
  <li><a href="AboutPage.html">About</a></li>
    <li><a href="Logout.php" >LogOut</a>  </li>
</ul>

<div class="container">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="position: absolute; top: 40%;left: 5%">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="width:100% height:500px">
      <div class="item active">
        <img src="KGFPoster.jpg" alt="KGF" style="width:100%;">
          <div class="carousel-caption">
          <h3>KGF</h3>
        </div>
      </div>

      <div class="item">
        <img src="RichiePoster.jpg" alt="Richie" style="width:100%;">
          <div class="carousel-caption">
          <h3>Richie</h3>
        </div>
      </div>
    
      <div class="item">
        <img src="SaahoPoster.jpg" alt="Saaho" style="width:100%;">
          <div class="carousel-caption">
          <h3>Saaho</h3>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
</html>
