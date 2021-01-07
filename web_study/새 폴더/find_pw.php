<?php
  include("dbconnect.php");
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require "./PHPMailer-master/src/PHPMailer.php";
  require "./PHPMailer-master/src/SMTP.php";
  require "./PHPMailer-master/src/Exception.php";


  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  #null instance chk
  if(!$id || !$name || !$email){
    echo "<script>alert('NULL value NOT allowed.');history.back();</script>";
  }
  #랜덤 pw 생성(중복제거 못함)
  function password_generate($chars)

{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
$pw_generate = password_generate(7);
$pw_generate_hash = hash("sha256", password_generate(7));

  $update = "UPDATE info SET pw='$pw_generate_hash'where id='$id' and name='$name' and email='$email'";
  $query = "SELECT pw FROM info WHERE id='$id' and name='$name' and email='$email'";
  $res = mysqli_query($db,$query);
  $abc = mysqli_query($db,$update);
  $num = mysqli_num_rows($res);
  $arr = mysqli_fetch_array($res);


  if($num == 1)
  {

    $mail = new PHPMailer(true);
    try {

    $mail -> SMTPDebug = 2;
    $mail -> isSMTP();

    $mail -> Host = "smtp.naver.com";
    $mail -> SMTPAuth = true;
    $mail -> Username = "brian7012";
    $mail -> Password = "rnjsguswh!";
    $mail -> SMTPSecure = "ssl";
    $mail -> Port = 465;

    $mail -> CharSet = "utf-8";

    $mail -> setFrom("brian7012@naver.com", "권현조");

    $mail -> addAddress("$email", "$name");

    $mail -> isHTML(true);
    $mail -> Subject = "임시비밀번호 전송.";
    $mail -> Body = "임시비밀번호는 $pw_generate 입니다.";

    $mail -> SMTPOptions = array(
      "ssl" => array(
      "verify_peer" => false
      , "verify_peer_name" => false
      , "allow_self_signed" => true
      )
    );

    $mail -> send();
    echo "Message has been sent";
    } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error : ", $mail -> ErrorInfo;
    }
    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
  }
  else {
    echo "<script>alert('NO SUCH PW');history.back();</script>";
  }

  mysqli_close($db);

 ?>
