
<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
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
<br><br>
    <?php
    if(isset($_SESSION['id'])){
      echo "<script>alert('이미 로그인되어 있습니다.');history.back()</script>";
    }

    if(!isset($_SESSION['id']) || !isset($_SESSION['name'])){?>
<center>
      <form method="POST" action="login-checkup.php">
        <div>
      <font size=10px>LOGIN</font>
    </div><br>
    <div>
          <label>
          ID <input type='text' name='id' placeholder='아이디'><br>
            </label>
            <!--login pw-->
            <label>
          PW <input type='password' name='pw'  placeholder='비밀번호' ><br><br>
        </label>
            <input type='submit' value='로그인'>
            <?php
      } ?>
    </div>
      </form>
        <br><box><a href="find.php">Find ID or PW</a></box>
      </center>
  </body>
</html>
