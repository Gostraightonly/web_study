<?php
  session_start();
#DB connect
  include("dbconnect.php");

  $id = addslashes($_POST['id']);
  $pw = addslashes($_POST['pw']);
  #null instance chk
  if(!$id || !$pw){
    echo "<script>alert('NULL value NOT allowed.');history.back();</script>";
  }
  $pw_hash = hash("sha256",addslashes($_POST['pw']));
  $query = "SELECT 'id' FROM info WHERE id='$id' and pw='$pw_hash'";
  $res = mysqli_query($db,$query);
  $num = mysqli_num_rows($res);

  #login process
  if($num == 1)
  {
// session은 고정된 값, 따라서 난수화 필요
    $_SESSION['id']=$id;
    if(isset($_SESSION['id'])){
      echo "<script>alert('login as $id')</script>";
      echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    }
    else {
      echo "login fail...";
    }
  }
  else if ($num==0){
    echo "<script>alert('NO SUCH ID OR WRONG PW');history.back();</script>";
  }
  else{
    echo "<script>alert('ERROR...Contact ADMIN')</script>";
  }
  mysqli_close($db);

 ?>
