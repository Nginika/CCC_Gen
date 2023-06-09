<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentations</title>
    <link rel="icon" href="../img/Logo.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/documentations.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>
<body>
    <!-- Nav Section -->
<nav>
    <div class="hero-logo">
        <a href="../index.php">
            <img src="../img/Logo.png" alt="">
        </a>
    </div>
    <div class="hero-nav nav-links" id="nav-links">
        <div class="nav-left">
        <li><a href="../index.php">Home</a></li>
        <li><a href="card-library.php">Card Library</a></li>
        <li><a href="documentations.php">Documentations</a></li>
        <li><a href="about.php">About</a></li>
        </div>
        <div class="nav-right">
		 <?php if($_SESSION['username']) { ?>
                <li class="signin" id="in-out"><a id="in-out-link" href="../php/logout.php">Sign Out</a></li>
            <button class="herobtn1 navbtn" id="reg-dash"><a id="reg-dash-link" href="dashboard.php">Dashboard</a></button>

                <?php } else { ?>
                <li class="signin" id="in-out"><a id="in-out-link" href="sign-in.html">Sign In</a></li>
            <button class="herobtn1 navbtn" id="reg-dash"><a id="reg-dash-link" href="sign-up.html">Register</a></button>
                <?php } ?>
	</div>
    </div>
    <div class="menu-bar">
        <div class="hamburger-menu">
          <div class="ham-bar bar-top"></div>
          <div class="ham-bar bar-mid"></div>
          <div class="ham-bar bar-bottom"></div>
    </div>
 </nav>

 <!-- back section -->
 <header>
    <a href="card-library.html"><i class="fa fa-long-arrow-left"></i> Back</a>
 </header>

<!-- main section -->
 <main>
    <div class="card-doc">
        <div class="card-design">
            <div class="vector">
                <img src="../img/Card Vector.png" alt="" class="vector">
            </div>
            <h2>Card Holder’s Name</h2>
            <h3>xxxx  xxxx  xxxx  xxxx</h3>
            <img src="../img/Card Seal.png" alt="" class="seal">
        </div>
        <p>Business credit card</p>
        <div class="card-color">
            <div class="left-color"></div>
            <div class="mid-color"></div>
            <div class="right-color"></div>
            <div class="last-color"></div>
        </div>
    </div>
    <div class="card-doc-about">
        <h2>Create & Test  Beautifully Designed Credit Cards</h2>
        <p>Our Credit Card Generator tool's primary purpose is for software testing and data verification purposes. Instead of using a real credit card, you can use our 100% valid credit cards to safely test your websites & apps. Using our card numbers means no money will be deducted from any account whenever an application is being tested. It allows you to validate all payment testing scenarios such as credit card number length, format, type, issuing network etc.</p>
        <a href="../php/auth.php" class="herobtn">Try It</a>
    </div>
 </main>

  <!-- Features -->
  <section class="features">
    <div class="features-text">
        <h2>Features</h2>
        <ul>
            <li>Generate thousands of dummy credit card numbers & details using our free bulk generator tool.</li>
            <li> Download and instantly save card samples to your account.</li>
            <li>Each card is generated with your name as it appears on your account.</li>
            <li>All major card issuers supported including VISA, Mastercard, Discover & American Express.</li>
            <li>Suitable for all forms of data testing and verification purposes such as Stripe & PayPal Payments.</li>
        </ul>
    </div>
    <div class="features-img">
        <img src="../img/Dark Blue Credit Card.png" alt="" class="karim-img">
    </div>
</section>

 <!-- footer section -->
    <footer>
        <img src="../img/Logo.png" alt="">
        <h3>The cc_gen is an online digital library of credit card design which enable users to view, download and make use of credit cards samples as a resource in their own project.</h3>
        <div class="hero-nav">
            <li><a href="../index.php">Home</a></li>
            <li><a href="card-library.php">Card Library</a></li>
            <li><a href="documentations.php">Documentations</a></li>
            <li><a href="about.php">About</a></li>
        </div>
        <div class="socials">
            <a href="#">
                <i class="fa fa-facebook-square" ></i>
            </a>
            <a href="#">
                <i class="fa fa-twitter-square" ></i>
            </a>
            <a href="#">
                <i class="fa fa-instagram" ></i>
            </a>
        </div>
        <h5>Copyright © 2023. CC_Gen. All rights reserved.</h5>
</footer>

<script src="../script/script.js"></script>
<script src="../script/documentations.js"></script>
</body>
</html>
