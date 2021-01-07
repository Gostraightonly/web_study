<?php
#DB connect
  include("dbconnect.php");
    session_start();
  $id = addslashes($_POST['id']);
  $pw = addslashes($_POST['pw']);
  $email = addslashes($_POST['email']);
  $name = addslashes($_POST['name']);
  echo "$id,$pw,$email,$name";
  #null instance chk
  if(!$id || !$pw || !$email || !$name)
  {
    echo "<script>alert('No NULL values...');history.back();</script>";
    exit();
  }
  $pw_hash = hash("sha256",addslashes($_POST['pw']));
  #same id check
  $chk = "SELECT 'id' FROM info WHERE id='$id'";
  $res = mysqli_query($db,$chk);
  $num = mysqli_num_rows($res);

  $chkemail = "SELECT 'email' FROM info WHERE email='$email'";
  $abc = mysqli_query($db,$chkemail);
  $def = mysqli_num_rows($abc);

  if ($num != 0) {
    echo "<script>alert('ID already Exists...');history.back();</script>";
    exit();
  }
  else if ($def !=0){
    echo "<script>alert('email already Exists...');history.back();</script>";
    exit();
  }
  else{
    $query = "INSERT INTO info VALUES ('$id','$pw_hash','$email','$name')";
    mysqli_query($db,$query);
    echo "<script>alert('join successfully')</script>";
    #login 처리
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
  }

  mysqli_close($db);

 ?>
