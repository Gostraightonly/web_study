<?php
  include("dbconnect.php");

  $name = $_POST['name'];
  $email = $_POST['email'];
  #null instance chk
  if(!$name || !$email){
    echo "<script>alert('NULL value NOT allowed.');history.back();</script>";
  }

  $query = "SELECT id FROM info WHERE name='$name' and email='$email'";
  $res = mysqli_query($db,$query);
  $num = mysqli_num_rows($res);
  $arr = mysqli_fetch_array($res);

  if($num == 1)
  {
echo "<script>alert('Your id is $arr[0]')</script>";
echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    }
  else {
    echo "<script>alert('NO SUCH ID');history.back();</script>";
  }

  mysqli_close($db);

 ?>
