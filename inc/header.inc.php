<?php
 include ( "./inc/connect.inc.php" ); 
 session_start();
 if (!isset($_SESSION["user_login"])) {
  
 }
 else 
 {
      $username = $_SESSION["user_login"];
 }
 ?>
<!doctype HTML>
<html>
   <head>
        <title>YoungAuthors</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css"/>
   </head>
   <body>
    <div class="headerMenu">     
      <div id="wrapper">
           <div class="logo">
               <img src="./img/logo.png" />
           </div>
           <div class="search_box">
              <form action="search.php" method="GET" id="search">
                 <input type="text" name="q" size="60" placeholder="Search for Authors..." >
              </form>             
           </div>
              <div id="menu">
               <a href="#" />Home</a>
               <a href="#" />About</a>
               <a href="#" />Register</a>
               <a href="#" />Login</a>
             </div>            
      </div>
    </div>
    
