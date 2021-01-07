<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Find</title>
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
      <form method="POST" action="find_id.php">
        <div>
        <center>
          <h1>FIND ID</h1>
          <label>
          NAME <input type='text' name='name' placeholder='이름'><br>
            </label>

            <label>
          E-mail <input type='text' name='email'  placeholder='이메일' ><br>
        </label><br>
            <input type='submit' value='아이디 찾기'>
        </center>
        </div>
      </form><br>
      <form method="POST" action="find_pw.php">
        <div>
        <center>
          <h1>FIND PW</h1>
          <label>
            ID <input type='text' name='id' placeholder='아이디'><br>
          </label>
          <label>
          NAME <input type='text' name='name' placeholder='이름'><br>
            </label>

            <label>
          E-mail <input type='text' name='email'  placeholder='이메일' ><br>
        </label><br>
            <input type='submit' value='비밀번호 찾기'>
        </center>
        </div>
      </form>

  </body>
</html>
