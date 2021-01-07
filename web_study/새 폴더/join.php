<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Join</title>
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
</nav><br><br>

      <form method="POST" action="join-checkup.php">
        <center>
        <div>
          <font size=10px>JOIN</font>
        </div><br>
        <div>
          <label>
          ID <input type='text' name='id' placeholder='아이디'><br>
          </label>
          <label>
          PW <input type='password' name='pw'  placeholder='비밀번호' ><br>
          </label>
          <label>
          E-mail <input type='text' name='email'  placeholder='이메일' ><br>
        </label>
          <label>
            NAME <input type='text' name='name'  placeholder='이름' ><br>
          </label><br><br>
            <input type='submit' value='회원가입'>
        </div>
      </center>
      </form>
  </body>
</html>
