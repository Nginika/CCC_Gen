<?php
	# php session recorded
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Café</title>
    <link rel="icon" href="img/Logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

</head>
<body>
    <!-- Nav Section -->
    <nav>
        <div class="hero-logo">
            <a href="index.php">
                <img src="img/Logo.png" alt="">
            </a>
        </div>
        <div class="hero-nav nav-links" id="nav-links">
            <div class="nav-left">
            <li><a href="index.php">Home</a></li>
            <li><a href="html/card-library.php">Card Library</a></li>
            <li><a href="html/documentations.php">Documentations</a></li>
            <li><a href="html/about.php">About</a></li>
	    </div>
	    <div class="nav-right">
		<!-- checks if a user is logged in and chooses what to display on the navbar -->
		<?php if($_SESSION['firstname']) { ?>
		<li class="signin" id="in-out"><a id="in-out-link" href="php/logout.php">Sign Out</a></li>
	    <button class="herobtn1 navbtn" id="reg-dash"><a id="reg-dash-link" href="html/card-gen.html">Dashboard</a></button>

		<?php } else { ?>
		<li class="signin" id="in-out"><a id="in-out-link" href="html/sign-in.html">Sign In</a></li>
	    <button class="herobtn1 navbtn" id="reg-dash"><a id="reg-dash-link" href="html/sign-up.html">Register</a    ></button>
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
            <h1>Create Test Credit Cards Samples</h1>
            <p>We help you create dummy credit card samples with card numbers, CVV, and card name - for eCommerce data testing purposes.</p>
            <button class="herobtn"><a href="php/auth.php">Try It</a></button>
        </div>
        <div class="heroImg-container">
            <img src="img/heroimage.png" alt="" class="heroimg">
        </div>
    </section>

    <!-- Card Samples Section -->
    <section class="cardsamples">
        <img src="img/Credit card samples.png" alt="">
    </section>

    <!-- Billy Section -->
    <section class="billy">
        <div class="billy-container">
            <img src="img/billy.png" alt="" class="billy-img">
        </div>
        <div class="billy-content">
            <h2>How it works</h2>
            <p>Our card details are randomly generated using the Luhn (MOD 10) algorithm. All real credit cards follow this algorithm, they have fixed prefixes and can be easily identified (i.e VISA cards always start with a '4'). If you want to learn more about how the Luhn checksum formula works then check out an indepth breakdown. To try our tool, simply Create your account for free, select a credit card design of your choose, generate your card code and download your card to your user account.</p>
        </div>
    </section>

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
            <img src="img/karim.png" alt="" class="karim-img">
        </div>
    </section>

    <!-- Others Think Section -->
    <section class="others-think">
        <div class="users">
            <div class="container one">
                <img src="img/user1.png" alt=""><h3>Card café is the best. I love the card designs, the navigation is simple and the platform is easy to use.</h3>
            </div>
            <div class="container two">
                <img src="img/user2.png" alt=""><h3>Card cafe is the best. I love the card designs, the navigation is simple and the platform is easy to use.</h3>
            </div>
            <div class="container three">
                <img src="img/user3.png" alt=""><h3>Card cafe is the best. I love the card designs, the navigation is simple and the platform is easy to use.</h3>
            </div>
        </div>
        <div class="container-right">
            <h2>What Others Think About Our Platform</h2>
            <h3>You’re probably still wondering how a credit card generator is useful when they cannot be used to purchase anything, right? Well it turns out there are loads of reasons why they’re useful, check out what our users are saying about the platform</h3>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <h2>Frequently Asked Questions</h2>
        <h3>If you are not sure weather draft is suitable for you or not, do not worry. We are here to explain everything you might want to know</h3>

        <div class="questions">
            <h4>What is a credit card generator? <img src="img/Plus-icon 1.png" alt="" class="plus one-plus" >
            <span><br /> A  credit card generator creates valid credit card numbers that can be used for software data testing and other verification purposes. They cannot be used to purchase anything.</span></h4>
            <h4>How does a credit card generator work? <img src="img/Plus-icon 1.png" alt="" class="plus two-plus">
            <span><br /> Credit cards follow a specific format known as the Luhn algorithm (MOD 10). Each credit card issuer like VISA have their own prefixes. A credit card generator uses the Luhn checksum to create a valid card number.</span></h4>
            <h4>Can I buy items with these credit card numbers? <img src="img/Plus-icon 1.png" alt="" class="plus three-plus">
            <span><br />No, generated credit card numbers can only be used for software testing and education purposes. They will NOT work if you try to purchase anything.</span></h4>
            <h4>Do you offer any credit card numbers that have money on them? <img src="img/Plus-icon 1.png" alt="" class="plus four-plus">
            <span><br />No, we do not offer any credit cards that have money on them. There are a number of online banks such as Revolut & Starling Bank which offer virtual credit & debit cards. Our card numbers are for programming and verification purposes only.</span></h4>
            <h4>What does CVV mean? <img src="img/Plus-icon 1.png" alt="" class="plus five-plus">
            <span><br />The CVV Number ("Card Verification Value") is a 3 digit number on VISA, MasterCard and Discover credit/debit cards. On American Express cards it is a 4 digit numeric code. It is used in credit and debit cards for the purpose of verifying the owner's identity & reducing the risk of fraud. The CVV is also known as the card verification code (CVC) or card security code (CSC).</span></h4>
        </div>
    </section>

    <footer>
            <img src="img/Logo.png" alt="">
            <h3>The cc_gen is an online digital library of credit card design which enable users to view, download and make use of credit cards samples as a resource in their own project.</h3>
            <div class="hero-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="html/card-library.html">Card Library</a></li>
                <li><a href="html/documentations.php">Documentations</a></li>
                <li><a href="html/about.html">About</a></li>
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
