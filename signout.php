<?php
session_start();
 $username = $_SESSION['username'];
if (isset($_SESSION['username'])){
	unset($_SESSION['username']);
}
session_destroy();
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
                
                <a href="login.html" style="color:rgb(0, 0, 0); font-size: 20px; font-weight: 900; float: right;">
                    <img src="images/login.png" alt="login image" />Login</a>
 
            </ul>
        </nav>

    </div>

    
    <!-- content -->

    <div class="wrapper">
		<h1><?php echo "Successfully Logout $username"; ?></h1>
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
