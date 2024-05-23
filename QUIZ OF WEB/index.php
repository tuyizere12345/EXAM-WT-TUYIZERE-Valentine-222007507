<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con); // Corrected function call
?> 


 


 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="vave.css">
</head>
<body>
    
<nav>
        <h>menu</h>
        <div class="menu-icon" onclick="toggleMenu()">&#9776;</div> <!-- Unicode for three horizontal lines -->
        <ul class="menu">
            <li><a href="hm.html">create business account</a></li>
            <li><a href="pro.html">add your restaurant</a></li>
            <li><a href="co.html">signup to deliver</a></li>
            <li><a href="about.html">about Us</a></li>
            <li><a href="login.php">Login</a></li> <!-- Add a Login link -->
            <li><a href="signup.php">Signup</a></li> <!-- Add a Signup link -->
        </ul>
    </nav>

    
    
    
    <script src="c.js"></script>

    
    
    
    <script>
        // JavaScript to toggle the menu
        function toggleMenu() {
            var ul = document.querySelector('nav ul');
            ul.classList.toggle('active');
        }
    </script>
        
        <h1>Welcome to Health food delivery service website</h1>
        <img src="image.jpeg">
        <p>Order delicious and nutritious meals delivered right to your doorstep.</p>
        <div class="container">
            <div class="text container">
                <p>At Health food delivery serviceS, we believe in the power of healthy eating to transform our lives.<br> Our mission is to provide delicious and nutritious meals that make it easy for you to <br>nourish your body and soul, while saving you time and effort.</p>
                <p>We are a team of passionate foodies who believe in the power of healthy eating.<br> Our mission is to make nutritious meals accessible to everyone.</p>
    <h2>How It Works</h2>
    <br>Choose Your Meals: Browse our menu and select from a variety of<br> healthy options based on your dietary preferences.
        <br>Place Your Order: Add your favorite meals to your cart and proceed to checkout<br>. You can choose to receive your meals weekly or customize your delivery schedule.
        <br>Enjoy Your Meals: Sit back, relax, and wait for your freshly <br>prepared meals to be delivered to your doorstep. All you have to do is heat and eat!

            </div>
        </div>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="vave.css">
</head>
<body>

    <nav>
        <ul> 

        <li><a href="hm.html">Home</a></li>
        <li><a href="pro.html">Our Product</a></li>
        <li><a href="co.html">Contact Us</a></li>
        <li><a href="about.html">about Us</a></li>
        </ul>
        </nav>
        <h1>about us</h1>
        <div class="container">
            <div class="text container">
                <img src="ft4.jpg">

          <img src="gfb.jpg"> 
          <img src="myt.jpg"> 
          <p>We are a team of passionate foodies who believe in the power of healthy eating. Our mission is to make nutritious meals accessible to everyone.</p>
          <p>we deliver a variety of balanced meals for breakfast, lunch, and dinner.</p>
          <p> we deliver food which has high qwality</p>
          <p> there is flexible to everyone</p>
          <p> it is free entry and exit</p>
        </div>
        </div>
    
        <div class="container">
            <div class="text container">
                <p>Our health food delivery service aims to provide nutritious and delicious meals delivered right to your doorstep. <br>We source fresh ingredients and create balanced meals for your convenience.</p>
                <p>Check out our weekly menu offering a variety of healthy options for breakfast, lunch, and dinner. <br>Our meals are curated by nutritionists to ensure you get the best of both taste and health.</p>
                <p>Have any questions or feedback? feel free to ask us.</p>
              <p> tel number: 0786666543 / 0723345678 /073098765.</p>
             <p> email vava@32.</p>
           </div>
        </div>
        <div class="container">
            <div class="text container">
                <img src="picture1.jpg">
                <img src="food2.jpg">
                <img src="food.jpg">
                <img src="C:\Users\user\Desktop\QUIZ OF WEB\9011ddce6d8d4d46b5743dd7da0d621e.jpg">
                <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Sed et erat at purus tincidunt viverra. Fusce vitae velit id lacus.
                <li>Healthy meal plans</li>
                <li>Fresh organic ingredients</li>
                <li>Customized nutrition programs</li>
                </div>
        </div> 

        <div class="con">
            <div class="tex">
             <p> <li><a href="hm.html">create business account</a></li>
            <li><a href="pro.html">add your restaurant</a></li>
            <li><a href="co.html">signup to deliver</a></li>
            <li><a href="about.html">about Us</a></li>
            <li><a href="login.php">Login</a></li> <!-- Add a Login link -->
            <li><a href="signup.php">Signup</a></li> <!-- Add a Signup link -->
        
        
        </p>   
            </div>
            <div class="te"> 
            <script src="https://kit.fontawesome.com/c618e882ef.js" crossorigin="anonymous"></script>
            <a href="https://www.facebook.com/UberEats/"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/ubereats/"><i class="fa-brands fa-instagram"></i></a>
        </div> 
        </div>
</body>
</html>