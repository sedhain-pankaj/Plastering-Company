<?php //file login.php
session_start();
    if(!isset($_SESSION['username']))
   {
    header("location:login.html");
   }
   else
   {
   $username=$_SESSION['username'];
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>HPS &mdash; Hopkins Plaster Studio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Plaster, cornice, Plastering, website design, software development">
  <meta name="author" content="Hopkins Plaster Studio">
  <meta name="keywords" content="Plaster and Interior Design">
  <link href="css/style.css" rel="stylesheet" type="text/css">

  <style>
  @import url(https://fonts.googleapis.com/css?family=Open+Sans);

body {
  font-family: 'Open Sans', sans-serif;
  color: black;
}

/* STRUCTURE */
.wrapper {
  padding: 80px;
  max-width: 90%;
  width: 95%;
  margin: 20px auto;
}

header{
  padding: 0 40px;
}


.columns {
  display: flex;
  font-size: 19px;
}

.column {
  flex: 1;
  border: 1px solid #A40236;
  margin: 5px;
  padding: 10px;
}

.column:first-child {
  margin-left: 0;
}

.column:last-child {
  margin-right: 0;
}

    </style>

</head>


<body>
  <div id="container">
    <!-- header -->
    <div id="header">

      <!-- logo -->
      <a href="index.html" style="display:block; margin-left: 2%; margin-right: 2%;"> 
      <img src="images/logo.png" alt="logo image"></a>

        <!-- horizontal nav bar -->

        <nav>
            <ul>
                <li><a href="index.html" style="color:rgb(0, 0, 0); font-size: 20px; font-weight: 900;">
                    Homepage</a></li>

                <li><a href="itemspage.html" style="color:rgb(0, 0, 0); font-size: 20px; font-weight: 900;">
                    Products</a></li>
                
                <li><a href="blogs.html" style="color:rgb(0, 0, 0); font-size: 20px; font-weight: 900;">
                    Blogs</a></li>

                <li><a href="contactus.html" style="color:rgb(0, 0, 0); font-size: 20px; font-weight: 900;">
                    Contact Us</a></li>

                <a href="signout.php" style="color:rgb(0, 0, 0); font-size: 20px; font-weight: 900; float: right;">
                    <img src="images/login.png" alt="login image" />Logout</a>

                <a href="cart.html" style="color:rgb(0, 0, 0); font-size: 20px; font-weight: 900;">
                    <img src="images/cart.png" alt="cart image" />Cart</a>  
            </ul>
        </nav>

    </div>

    
    <!-- content -->

    <div class="wrapper">

        <header>
          <h1>About Hopkins Plastering Studio and its Contribution in Melbourne Since 1857</h1>
        </header>
          
      <section class="columns">
        
        <div class="column">
          <p>HOPKINS PLASTER STUDIO PTY LTD successfully combines old skills with modern innovation. Much of the charm of the cities of Melbourne, Sydney,
             Adelaide, Hobart and Brisbane lies in the magnificently decorative architecture of the Victorian and Edwardian eras which has survived till
              the present. The superbly intricate plaster ceilings, ceiling roses, arches and columns, etc. that we see today, are of course only a fraction
               of the magnificent decorative interiors that abounded last century. The next time you look in wonder at a beautiful ceiling in Melbourne,
                chances are you are looking at something with a Hopkins fingerprint on it.</p>
        </div>
        
        <div class="column">
          <p>Hopkins Plaster Studio Pty Ltd is committed to keeping this architecture alive whilst also meeting modern day architectural requirements.
             The Hopkins family have been involved in this work since 1857. The original firm was established by 4 Welsh brothers whose skills in “filing”
              and stonemasonary were handed down to them by their father and whom subsequently carried on the tradition by handing them down to their sons.
              The fifth generation today is represented by Lyndon Hopkins who has had over 25 years experience in the business. Lyndon’s first cousin Picton
               Andrew Hopkins has recently joined the business and brings with him over 40 years experience as an architectural modeller.</p>
        </div>
        
        <div class="column">
          <p>The Hopkins name has been at the forefront of the industry for more than 150 years by a combination of old fashioned integrity, skilled
             workmanship, modern techniques and business practices.
  
              Ask any architect, builder or plasterer to reproduce any historic or modern architectural feature and they’ll tell you to talk to Hopkins
              Plaster Studio Pty Ltd.
              
              Please come and visit us at 20 Swift Way Dandenong Sth or call to make an appointment with our rep on site.</p>
        </div>
        
      </section>
      
      </div>

      

      <div class="about_img">
          <a href="images/abouthps2.jpg" target="_blank"><img src="images/abouthps2.jpg" alt="About HPS"></a>
          <a href="images/abouthps3.jpg" target="_blank"><img src="images/abouthps3.jpg" alt="About HPS"></a>
          <a href="images/abouthps4.jpg" target="_blank"><img src="images/abouthps4.jpg" alt="About HPS"></a>
          <a href="images/abouthps.jpg" target="_blank"><img src="images/abouthps.jpg" alt="About HPS"></a>
        </div>

      </div>



    <!-- footer -->
    <div id="footer">
      Copyright &copy; 1857-2019 Hopkins Plaster Studio Pty. Ltd.All Rights Reserved.<br>
      This document was last modified on:
      <script>
        document.write(document.lastModified);
      </script>

    </div>
  
</body>

</html>
