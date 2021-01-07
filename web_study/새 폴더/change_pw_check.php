<?php
session_start();
include("dbconnect.php");

$pw_bf = addslashes($_POST['pw_bf']);
$pw_af = addslashes($_POST['pw_af']);
$pw_af_check = addslashes($_POST['pw_af_check']);
$id = $_SESSION['id'];

if(!isset($pw_af) || !isset($pw_bf) || !isset($pw_af_check))
{
  echo "<script>alert('No NULL value');history.back()</script>";
}
else
{
  $pw_bf_hash = hash("sha256",$pw_bf);
  $query = "SELECT * FROM info WHERE id='$id' and pw='$pw_bf_hash'";
  $res=mysqli_query($db,$query);
  $num =mysqli_num_rows($res);

  if($num == 1)
  {
    if($pw_af === $pw_af_check)
    {
        $pw_af_hash=hash("sha256",$pw_af);
        $query1= "UPDATE info set pw ='$pw_af_hash' WHERE id='$id'";
        $res1 = mysqli_query($db, $query1);
        if(mysqli_error($query1))
        {
            echo "<script>alert('ERROR');history.back()</script>";
        }
        else {
          echo "<script>alert('pw changed')</script>";
          echo "<meta http-equiv='refresh' content='0;url=index.php'>";
        }

    }
    else {
      echo "<script>alert('check does not match... try again...');history.back()</script>";

    }
  }
  else
  {
    echo "<script>alert('Current PW is not right!');history.back()</script>";

  }
  mysqli_close($db);
}
 ?>
