<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require "./PHPMailer-master/PHPMailer-master/src/PHPMailer.php";
require "./PHPMailer-master/PHPMailer-master/src/SMTP.php";
require "./PHPMailer-master/PHPMailer-master/src/Exception.php";
$mail = new PHPMailer(true);
try {
// 서버세팅


$new_pw =
//디버깅 설정을 0 으로 하면 아무런 메시지가 출력되지 않습니다
$mail -> SMTPDebug = 2; // 디버깅 설정
$mail -> isSMTP(); // SMTP 사용 설정
// 지메일일 경우 smtp.gmail.com, 네이버일 경우 smtp.naver.com
$mail -> Host = "smtp.naver.com";               // 네이버의 smtp 서버
$mail -> SMTPAuth = true;                         // SMTP 인증을 사용함
$mail -> Username = "brian7012";    // 메일 계정 (지메일일경우 지메일 계정)
$mail -> Password = "rnjsguswh!";                  // 메일 비밀번호
$mail -> SMTPSecure = "ssl";                       // SSL을 사용함
$mail -> Port = 465;                                  // email 보낼때 사용할 포트를 지정

$mail -> CharSet = "utf-8"; // 문자셋 인코딩

// 보내는 메일
$mail -> setFrom("brian7012@naver.com", "권현조");

// 받는 메일
$mail -> addAddress("brian643683@gmial.com", "권현조");


// 메일 내용
$mail -> isHTML(true); // HTML 태그 사용 여부
$mail -> Subject = "임시비밀번호 입니다.";  // 메일 제목
$mail -> Body = "";     // 메일 내용

// Gmail로 메일을 발송하기 위해서는 CA인증이 필요하다.
// CA 인증을 받지 못한 경우에는 아래 설정하여 인증체크를 해지하여야 한다.
$mail -> SMTPOptions = array(
  "ssl" => array(
  "verify_peer" => false
  , "verify_peer_name" => false
  , "allow_self_signed" => true
  )
);
// 메일 전송
$mail -> send();
echo "Message has been sent";
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error : ", $mail -> ErrorInfo;
}
?>
