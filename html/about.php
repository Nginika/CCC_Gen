<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="icon" href="../img/Logo.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/about.css">
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
            <button class="herobtn1 navbtn" id="reg-dash"><a id="reg-dash-link" href="card-gen.html">Dashboard</a></button>

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
    <section class="about-details">
        <div class="us-img">
            <img src="../img/about-img.png" alt="">
        </div>
        <div class="us-info">
            <h1>About Us</h1>
            <p>Card cafe is a project aimed at solving the diffcultiies users most especially developers encounter with using their real credit cards for eCommerce or software testing purpose. It allows users to be able to generate credit cards that can only be used for eCommerce purpose, software testing and data verification purposes. Instead of using a real credit card, you can use our 100% valid credit cards to safely test your websites & apps. Using our card numbers means no money will be deducted from any account whenever an application is being tested. It allows you to validate all payment testing scenarios such as credit card number length, format, type, issuing network etc. This project was carried out as a portfoilio project in partial fulfilment of <a href="https://www.alxafrica.com/software-engineering/" target="_blank">ALX Holberton School of Software Engineering Program.</a></p>
        </div>
    </section>

     <!-- Card Samples Section -->
     <section class="cardsamples">
        <img src="../img/Credit card samples.png" alt="">
    </section>

    <!-- devs section -->
    <section class="devs-section">
        <h1>Authors</h1>
        <p>Below are the developers who collaborated and made this project a reality.</p>
        <div class="dev up">
            <div class="dev-img">
                <img src="../img/Charles.jpg" alt="">
            </div>
            <div class="dev-about">
                <h2>Charles Obimnaeto Egesionu</h2>
                <p>A programming enthusiast and a fullstack software engineer (ALX Holberton School Alumni) who specializes on Frontend Software Engineering, eager to contribute to team success through hard work, reliability, innovative ideas, and excellent
                    organizational skills. Currently Exploring the world of Technology through Frontend Web Development and Software Engineering. </p>
                <h3 class="stacks">Stacks: <span>HTML</span>  <span>CSS</span>   <span>Tailwind CSS</span>  <span>JavaScript</span>  <span>ReactJS</span>  <span>C</span>  <span>Python</span> <span>Mysql</span></h3>

                <h3 class="hobbies">Hobbies: <span>Coding</span> <span>Music</span> <span>Movies</span></h3>

                <h3 class="dev-socials">Contacts:
                <a href="https://www.linkedin.com/in/charles-obimnaetochukwu-egesionu/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                <a href="https://twitter.com/naetocharlie/" target="_blank"><i class="fa fa-twitter-square"></i></a>
                <a href="https://github.com/IamNaeto" target="_blank"><i class="fa fa-github-square"></i></a>
                <a href="https://naetocodes.vercel.app/" target="_blank"><i class="fa fa-link"></i></a>
                </h3>
            </div>
        </div>
        <div class="dev down">
            <div class="dev-img">
                <img src="../img/Jane.jpeg" alt="">
            </div>
            <div class="dev-about">
                <h2>Janefrancis Nginika Ugochukwu</h2>
                <p>A passonate programming enthusiast and a fullstack software engineer (ALX Holberton School Alumni) who specializes on Backend Software Engineering with a keen purpose of contributing, changing the world and making life worth living through tech. Currently Exploring the world of Technology through Backend Web Development and Software Engineering.</p>
                <h3 class="stacks">Stacks: <span>HTML</span> <span>CSS</span> <span>Bootstrap </span> <span>JavaScript</span> <span>Django </span> <span>C</span> <span>Python</span> <span>Mysql</span> <span>Php</span> </h3>

                <h3 class="hobbies">Hobbies: <span>Coding</span> <span>Music</span> <span>Movies</span></h3>
                <h3 class="dev-socials">Contacts: 
                    <a href="https://www.linkedin.com/in/ugochukwu-nginika" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                    <a href="https://twitter.com/jane_filz" target="_blank"><i class="fa fa-twitter-square"></i></a>
                    <a href="https://github.com/Nginika" target="_blank"><i class="fa fa-github-square"></i></a>
                    <a href="" target="_blank"><i class="fa fa-link"></i></a>
                </h3>
            </div>
        </div>

    </section>
    <!-- Footer Section -->
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
</body>
</html>
