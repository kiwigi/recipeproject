<?php
  include_once 'dbConnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">

<!--firebase scripts-->
<script src="https://www.gstatic.com/firebasejs/8.0.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.0.2/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.0.2/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.0.2/firebase-analytics.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#about">About</a></li>
        <li><a href="profile.html">Profile</a></li>
        <li><a href="recipes.html">Browse recipes</a></li>
        <li><div class="search-container">
          <form action="/action_page.php">
            <input type="text" placeholder="Search recipes.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Welcome!</h1>
            <p>Welcome to the recipe project.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<div id="features" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2>Our features</h2>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Convinient recipes</h3>
          <img src="img/specials/1.jpg" class="img-responsive" alt="">
          <p>Search for recipes by entering ingridients you already have at home!</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>We cater to your allergies</h3>
          <img src="img/specials/2.jpg" class="img-responsive" alt="">
          <p>List an allergy on your profile and we will make sure recipe results do not contain ingridients that you are allergic to.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>We care</h3>
          <img src="img/specials/3.jpg" class="img-responsive" alt="">
          <p>We care about your diatary restrictions! Simply list them on your profile and your serch results will be free from those restrictions.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-6 about-img"> </div>
      <div class="col-xs-12 col-md-3 col-md-offset-1">
        <div class="about-text">
          <div class="section-title">
            <h2>Our Goal:</h2>
          </div>
            <p>As a consequence of our glowingly busy lives, many people do not know how to prepare meals. Many university students live off instant noodles and take-out which is unhealthy and could lead to obesity. Most of the time, this is done as a result of not having the knowledge and resources to be able to prepare their own meals. This dilemma does not only affect university students. People that are uneducated in the art of cooking to the extent that they do not recall the names of food they find delicious or wish to make need a reliable way to find the recipes to these foods. Furthermore, people educated in the art of cooking need a way to find new foods to make with the ingredients they have on hand.
            We need an easy and simple way to make cooking more accessible in today's busy society. 
            </p>
            <p>
              Our solution will provide a quick, easy and accessible way to cook. The user will enter a list of ingredients that they currently have. Their user profile should contain personal information like allergies and dietary restrictions. Our solution will take in these parameters, search the database for a set of compatible recipes, and then return said recipes. From the list of recipes, the user may select one of the recipes and it will list the ingredients required as well as basic instructions on how to prepare the meal. The compatibility of a recipe will depend on how many of the ingredients entered match up with the ingredients needed for the recipe as well as any dietary restrictions that the user may have. 
            </p>
          </div>
        </div>
      </div>
      </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="col-md-6">
      <p>&copy; 2017 Gusto. All rights reserved. Design by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
    </div>
    <div class="col-md-6">
      <div class="social">
        <ul>

        </ul>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
