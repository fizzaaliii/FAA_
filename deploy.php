<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg" />
        <link rel="shortcut icon" href="favicon/favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
        <link rel="manifest" href="favicon/site.webmanifest" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Grand+Hotel&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <title>Admin Page</title>
  
  <style>
    /* Reset default margin and padding */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    /* Full height for the body */
    html, body {
      height: 100%;
      font-family: Arial, sans-serif;
    }

    /* Categories section */
    .categories {
      display: flex;
      flex-direction: column; /* Stacks categories vertically */
      width: 100%; /* Full width */
    }

    /* Each category fills the full width and adjusts height */
    .category {
      width: 100%; /* Full width */
 /* Full screen height for each category */
      position: relative;
      overflow: hidden; /* Ensures no overflow */
    }

    /* Image styles to make them responsive */
    .category img {
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      object-fit: cover; /* Ensures the image covers the entire container without distortion */
      transition: transform 0.3s ease, filter 0.3s ease; /* Smooth zoom and filter transitions */
    }

    /* Hover effect on images */
    .category img:hover {
      transform: scale(1.1); /* Slight zoom effect */
      filter: brightness(80%); /* Darkens the image */
    }

    /* Button styles */
    .category .btn {
      position: absolute;
      top: 50%; /* Center vertically */
      left: 50%; /* Center horizontally */
      transform: translate(-50%, -50%); /* Translate for perfect centering */
      padding: 15px 30px;
      background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 18px;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    /* Button hover effect */
    .category .btn:hover {
      background-color: rgba(0, 0, 0, 0.9);
      transform: translate(-50%, -50%) scale(1.1); /* Slightly enlarges the button */
    }
    .search::placeholder{
                color: white;
                font-family: 'Times New Roman', Times, serif;
                font-size: medium;
            }
            .search:hover{
                transition: opacity 0.2s ease;
                opacity: 0.5;
            }
            .FAA:hover{
                opacity: 0.5;
            }
            .icon1:hover{
                transition: opacity 0.2s ease;
                opacity: 0.5;
            }
            .search-button:hover{
                transition: opacity 0.2s ease;
                opacity: 0.5;
            }
            .navigation:hover{
                border-bottom: 2px solid maroon;
            }
            .shop-btn:hover{
                transition: opacity 0.2s ease;
                opacity: 0.5;
                cursor: pointer;
            }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .category {
         /* Reduce height for tablets */
      }

      .category .btn {
        font-size: 16px; /* Adjust font size for smaller screens */
      }
    }

    @media (max-width: 480px) {
      .category {
 /* Further reduce height for mobile devices */
      }

      .category .btn {
        font-size: 14px; /* Smaller font size for smaller screens */
        padding: 10px 20px;
      }
    }
  </style>
</head>
<body>

  <header style="display: flex; align-items: center; justify-content: space-between; padding: 1rem; background-color: white; border-radius: 2px;">
    <img src="logo.jpg" alt="Website Logo" height="120" style="margin-right: 2rem;">
    <div style="display: flex; justify-content: flex-end; align-items: center; gap: 1rem;">
        
      <a >
        <i class="icon1 fas fa-user" style="font-size: 1.3em; color: rgb(172, 32, 32); cursor: pointer;"></i>
      </a>
      <a >
        <i class="icon1 fas fa-shopping-cart" style="font-size: 1.3em; color: rgb(172, 32, 32); cursor: pointer;"></i>
      </a>
      <i class="icon1 fas fa-heart" style="font-size: 1.3em; color: rgb(172, 32, 32); cursor: pointer;"></i>
      <i class="icon1 fas fa-envelope" style="font-size: 1.3em; color: rgb(172, 32, 32); cursor: pointer;"></i>
    </div>
    
  </header>

        <div style="width: 100%; background-color: white; display: flex;
        justify-content: center; align-items: center; gap: 5%; font-size: 1.3em;
        padding-top: 0.8em; padding-bottom: 0.8em;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         border-top: 0px;">
            <div class="navigation" style="color: black; cursor: pointer;">
                <a href="admin_page.php" style="margin: 0; padding: 0; text-decoration: none;
                color: inherit;">Home</a>
            </div>
            <div class="navigation" style="color: black; cursor: pointer;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; position: relative;">
               <a href="mens.html" style="margin: 0; padding: 0; text-decoration: none;
                color: inherit;">Men's Clothing</a>   
            </div>
            <div class="navigation" style="color: black; cursor: pointer;">
                <a href="womens.html" style="margin: 0; padding: 0; text-decoration: none;
                color: inherit;">Women's Clothing</a>
            </div>
            <div class="navigation" style="color: black; cursor: pointer;">
                <a href="acc.html" style="margin: 0; padding: 0; text-decoration: none;
                color: inherit;">Accessories</a>
            </div>
            <div class="navigation" style="color: black; cursor: pointer;">
                <a href="fragnances.html" style="margin: 0; padding: 0; text-decoration: none;
                color: inherit;">Fragrances</a>
            </div>
            <div class="navigation" style="color: black; cursor: pointer;">
                <a href="Scarfs&shawls.html" style="margin: 0; padding: 0; text-decoration: none;
                color: inherit;">Scarfs & Shawls</a>
            </div>
        </div>
        

  <!-- Categories Section -->
  <section class="categories">
    <div class="category">
      <a href="admin_page.php">
      <img style="width: 100%;" src="home.jpg" alt="Home Page">
      </a>
      <a href="admin_page.php">
        <button class="btn">Explore Home</button>
      </a>
    </div>

    <div class="category">
      <a href="womens.html">
        <img src="women.png" alt="Women's Collection">
      </a>
      <a href="womens.html">
        <button class="btn">Shop Women</button>
      </a>
    </div>
    <div class="category">
      <a href="mens.html">
        <img src="men.png" alt="Men's Collection">
      </a>
      <a href="mens.html">
        <button class="btn">Shop Men</button>
      </a>
    </div>
    <div class="category">
      <a href="fragrances.html">
        <img src="frag.png" alt="Fragrances">
      </a>
      <a href="fragnances.html">
        <button class="btn">Shop Fragrances</button>
      </a>
    </div>
    <div class="category">
      <a href="acc.html">
        <img src="acc.jpg" alt="Accessories">
      </a>
      <a href="acc.html">
        <button class="btn">Shop Accessories</button>
      </a>
    </div>
  </section>
  <footer style="background-color: #fff; color: maroon; padding: 20px; text-align: center; border-top: 1px solid #ddd;">
    <!-- Footer Text -->
    <p style="margin-bottom: 20px;"> 2024 FAA Store. All Rights Reserved.</p>
  
    <!-- Navigation Links -->
    <nav style="margin-bottom: 20px;">
      <a href="about.html" style="color: maroon; margin: 0 20px; text-decoration: none; font-weight: bold;">About Us</a>
      <a href="contact.html" style="color: maroon; margin: 0 20px; text-decoration: none; font-weight: bold;">Contact</a>
      <a href="privacy.html" style="color: maroon; margin: 0 20px; text-decoration: none; font-weight: bold;">Privacy Policy</a>
    </nav>
  
    <!-- Social Media Icons -->
    <div style="margin-bottom: 20px;">
      <a href="https://facebook.com" target="_blank" style="margin: 0 15px;">
        <img src="facebook.png" alt="Facebook" style="width: 30px; height: 30px;">
      </a>
      <a href="https://twitter.com" target="_blank" style="margin: 0 15px;">
        <img src="twitter.png" alt="Twitter" style="width: 30px; height: 30px;">
      </a>
      <a href="https://instagram.com" target="_blank" style="margin: 0 15px;">
        <img src="instagram.png" alt="Instagram" style="width: 30px; height: 30px;">
      </a>
    </div>
   
  </footer>
  
  

</body>
</html>