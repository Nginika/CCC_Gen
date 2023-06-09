<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Library</title>
    <link rel="icon" href="../img/Logo.png">
    <link rel="stylesheet" href="../css/card-library.css">
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
		<li class="signin"><a href="../php/logout.php">Sign Out</a></li>
            <button class="herobtn1 navbtn"><a href="../index.php">Dashboard</a></button>
		<?php } else { ?>
		 <li class="signin"><a href="sign-in.html">Sign In</a></li>
            <button class="herobtn1 navbtn"><a href="sign-up.html">Register</a></button>
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
    
    <!-- Hero Landing Section -->
    <section class="hero-landing">
        <div class="hero-landing-content">
            <h1>The Best Card Collection For You</h1>
            <p>Our Credit Card Generator tool's primary purpose is for software testing and data verification purposes. Instead of using a real credit card, you can use our 100% valid credit cards to safely test your websites & apps.</p>
        </div>
        <div class="img-box">
            <img src="../img/Credit Card.png" alt="" class="heroimg">
        </div>
    </section>

        <!-- Card Samples Section -->
        <section class="cardsamples">
            <img src="../img/Credit card samples.png" alt="">
        </section>

        <!-- Card Collection Section -->
        <section class="card-collection">
            <h2>Our Card Collections</h2>
            <div class="collection-content">
                <div class="card">
                    <div class="cardimg">
                        <img src="../img/Dark Blue Credit Card.png" alt="" class="bluecard front">
                        <img src="../img/Dark Blue Credit Card Back.png" alt="" class="back bluecard-back">
                    </div>
                    <div class="hr"></div>
                    <div class="cardbtn">
                        <img src="../img/Download.png" alt=""><span>30</span>
                        <img src="../img/Comment.png" alt=""><span>25</span>
                        <img src="../img/Eye Open.png" alt=""><span class="last-span">200</span>
                    </div>
                    <button class="herobtn"><a href="documentations.html">View Card</a></button>
                </div>

                <div class="card">
                    <div class="cardimg">
                        <img src="../img/Pattern Credit Card.png" alt="" class="front">
                        <img src="../img/Pattern Credit Card Back.png" alt="" class="back">
                    </div>
                    <div class="hr"></div>
                    <div class="cardbtn">
                        <img src="../img/Download.png" alt=""><span>30</span>
                        <img src="../img/Comment.png" alt=""><span>25</span>
                        <img src="../img/Eye Open.png" alt=""><span class="last-span">200</span>
                    </div>
                    <button class="herobtn"><a href="documentations.html">View Card</a></button>
                </div>

                <div class="card">
                    <div class="cardimg">
                        <img src="../img/Preach Credit Card.png" alt="" class="front">
                        <img src="../img/Preach Credit Card Back.png" alt="" class="back">
                    </div>
                    <div class="hr"></div>
                    <div class="cardbtn">
                        <img src="../img/Download.png" alt=""><span>30</span>
                        <img src="../img/Comment.png" alt=""><span>25</span>
                        <img src="../img/Eye Open.png" alt=""><span class="last-span">200</span>
                    </div>
                    <button class="herobtn"><a href="documentations.html">View Card</a></button>
                </div>
            </div>


            <div class="collection-content">
                <div class="card">
                    <div class="cardimg">
                        <img src="../img/Dark Peach Credit Card.png" alt="" class="front">
                        <img src="../img/Dark Blue Credit Card Back.png" alt="" class="back">
                    </div>
                    <div class="hr"></div>
                    <div class="cardbtn">
                        <img src="../img/Download.png" alt=""><span>30</span>
                        <img src="../img/Comment.png" alt=""><span>25</span>
                        <img src="../img/Eye Open.png" alt=""><span class="last-span">200</span>
                    </div>
                    <button class="herobtn"><a href="documentations.html">View Card</a></button>
                </div>

                <div class="card">
                    <div class="cardimg">
                        <img src="../img/Light Blue Credit Card.png" alt="" class="front">
                        <img src="../img/Light Blue Credit Card Back.png" alt="" class="back">
                    </div>
                    <div class="hr"></div>
                    <div class="cardbtn">
                        <img src="../img/Download.png" alt=""><span>30</span>
                        <img src="../img/Comment.png" alt=""><span>25</span>
                        <img src="../img/Eye Open.png" alt=""><span class="last-span">200</span>
                    </div>
                    <button class="herobtn"><a href="documentations.html">View Card</a></button>
                </div>

                <div class="card">
                    <div class="cardimg">
                        <img src="../img/Orange Credit Card.png" alt="" class="front">
                        <img src="../img/Orange Credit Card Back.png" alt="" class="back">
                    </div>
                    <div class="hr"></div>
                    <div class="cardbtn">
                        <img src="../img/Download.png" alt=""><span>30</span>
                        <img src="../img/Comment.png" alt=""><span>25</span>
                        <img src="../img/Eye Open.png" alt=""><span class="last-span">200</span>
                    </div>
                    <button class="herobtn"><a href="documentations.html">View Card</a></button>
                </div>
            </div>


            <div class="collection-content">
                <div class="card">
                    <div class="cardimg">
                        <img src="../img/Purple Credit Card.png" alt="" class="front">
                        <img src="../img/Purple Credit Card Back.png" alt="" class="back">
                    </div>
                    <div class="hr"></div>
                    <div class="cardbtn">
                        <img src="../img/Download.png" alt=""><span>30</span>
                        <img src="../img/Comment.png" alt=""><span>25</span>
                        <img src="../img/Eye Open.png" alt=""><span class="last-span">200</span>
                    </div>
                    <button class="herobtn"><a href="documentations.html">View Card</a></button>
                </div>

                <div class="card">
                    <div class="cardimg">
                        <img src="../img/Red Credit Card.png" alt="" class="front">
                        <img src="../img/Red Credit Card Back.png" alt="" class="back">
                    </div>
                    <div class="hr"></div>
                    <div class="cardbtn">
                        <img src="../img/Download.png" alt=""><span>30</span>
                        <img src="../img/Comment.png" alt=""><span>25</span>
                        <img src="../img/Eye Open.png" alt=""><span class="last-span">200</span>
                    </div>
                    <button class="herobtn"><a href="documentations.html">View Card</a></button>
                </div>

                <div class="card">
                    <div class="cardimg">
                        <img src="../img/Dark Blue Credit Card.png" alt="" class="bluecard front">
                        <img src="../img/Dark Blue Credit Card Back.png" alt="" class="back">
                    </div>
                    <div class="hr"></div>
                    <div class="cardbtn">
                        <img src="../img/Download.png" alt=""><span>30</span>
                        <img src="../img/Comment.png" alt=""><span>25</span>
                        <img src="../img/Eye Open.png" alt=""><span class="last-span">200</span>
                    </div>
                    <button class="herobtn"><a href="documentations.html">View Card</a></button>
                </div>
            </div>

        </section>
    
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
