<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Go Straight Only</title>
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
        <?php

            if(!isset($_SESSION['id'])) {
               echo "<div class = login><a href=\"login.php\">[Login]</a> / <a href=\"join.php\">[Join]</a></div>";
            }
            else
             {
              $user_id = $_SESSION['id'];
              echo "<div class=login><strong>$user_id</strong>님 환영합니다.";
              echo "<a href=\"logout.php\">[Logout]</a> / <a href=\"change_pw.php\">[Change PW]</a></div>"
              ;
            }
        ?>
      <nav id="menu">
              <ul>
                      <li><a class="menuLink" href="about_me.php">About me</a></li>
                      <li><a class="menuLink" href="daily.php">Daily</a></li>
                      <li><a class="menuLink" href="brainstorming.php">Brainstorming</a></li>
                      <li><a class="menuLink" href="project.php">Project</a></li>
                      <li><a class="menuLink" href="questions.php">Questions</a></li>
              </ul>
      </nav>



    </body>
</html>
