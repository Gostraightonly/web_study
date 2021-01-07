<?php
session_start();

if(!isset($_SESSION['id']))
{
  echo "<script>alert('please login');history.back();</script>";
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Change Pw</title>
     <link rel="stylesheet" href="style.css">
   </head>
   <body>
     <div class = logo><strong>G</strong>o<br>
     <strong>S</strong>traight<br>
     <strong>O</strong>nly.
   </div>
   <div class = title><h1><a href="index.php">
   Go Straight Only.
 </a></h1></div>
 <nav id="menu">
         <ul>
                 <li><a class="menuLink" href="about_me.php">About me</a></li>
                 <li><a class="menuLink" href="daily.php">Daily</a></li>
                 <li><a class="menuLink" href="brainstorming.php">Brainstorming</a></li>
                 <li><a class="menuLink" href="project.php">Project</a></li>
                 <li><a class="menuLink" href="questions.php">Questions</a></li>
         </ul>
 </nav>
     <center>
     <h1>Change <?php echo $_SESSION['id']; ?>'s pw</h1>
     <form class="change" action="change_pw_check.php" method="post" >
       <p>Current pw : <input type="password" name="pw_bf" placeholder="current pw"></p>
       <p>New pw : <input type="password" name="pw_af" placeholder="new pw"></p>
       <p>Check new pw : <input type="password" name="pw_af_check" placeholder="check new pw"</p>
       <br><br>
       <input type="submit" value="submit">
     </form>
</center>
   </body>
 </html>
