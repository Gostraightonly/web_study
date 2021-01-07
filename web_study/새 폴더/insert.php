<?php
    //데이터 베이스 연결하기
    include("dbconnect.php");
    session_start();
    date_default_timezone_set("Asia/Seoul");

    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $contents = $_POST['contents'];
    $pw = addslashes($_POST['pw']);
    $wdate = date("Y-m-d H:i:s");

    $pw_hash = hash("sha256",addslashes($_POST['pw']));

    $query = "INSERT INTO post VALUES ('$id', '$name', '$title', '$contents','$pw_hash', '$wdate')";
    mysqli_query($db,$query) or die(mysqli_error($db));

    //데이터베이스와의 연결 종료
    mysqli_close($db);

    // 새 글 쓰기인 경우 리스트로..
    echo ("<meta http-equiv='Refresh' content='0; URL=list.php'>");
    //1초후에 list.php로 이동함.
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script>alert('정상적으로 저장되었습니다!!')</script>
  </body>
</html>
