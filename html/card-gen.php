<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Card</title>
    <link rel="icon" href="../img/Logo.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/documentations.css">
    <link rel="stylesheet" href="../css/card-gen.css">
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
            </div>
            <div class="nav-right">
                <li class="signin"><a href="../php/logout.php">Sign Out</a></li>
            <button class="herobtn1 navbtn"><a href="">Dashboard</a></button>
            <li><a href="about.php">About</a></li>
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
    <a href="card-library.php"><i class="fa fa-long-arrow-left"></i> Back</a>
 </header>

<!-- main section -->
 <main>
    <div class="card-doc">
        <div class="card-design">
            <div class="vector">
                <img src="../img/Card Vector.png" alt="" class="vector">
            </div>
	    <h2 class="holder-name"> <?php echo $_SESSION['firstname'].' '.$_SESSION['surname']; ?></h2>
            <h3 class="card-num">xxxx  xxxx  xxxx  xxxx</h3>
            <img src="../img/Card Seal.png" alt="" class="seal">
            <div class="c-card">
                <h3 class="expire"></h3> <img src="" alt="" class="cardbrand">
            </div>
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
        <h2>Ready To Create & Test  Beautifully Designed Credit Cards?</h2>
        <h3>Card Brand</h3>
        <select name="" id="" class="brandOption">
            <option value='none'>--select card brand-- </option>
        </select><br>
        <p class="brandInfo"></p>
       <div class="btns">
        <a href="" class="herobtn" id="generate">Generate</a> 
        <a href="" class="herobtn" id="download">Download</a>
       </div>
    </div>
 </main>
    
    <!-- footer section -->
    <footer>
        <img src="../img/Logo.png" alt="">
        <h3>The cc_gen is an online digital library of credit card design which enable users to view, download and make use of credit cards samples as a resource in their own project.</h3>
        <div class="hero-nav">
            <li><a href="../index.php">Home</a></li>
            <li><a href="html/card-library.php">Card Library</a></li>
            <li><a href="html/documentations.php">Documentations</a></li>
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
<script src="../script/card-gen.js"></script>
</body>
</html>
