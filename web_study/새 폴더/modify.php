
<html>
<head>
<title>글 수정하기</title>
<style>

td { font-size : 9pt; }


</style>
</head>

<body topmargin=0 leftmargin=0 text=#464646>
<center>
<BR>
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form action=update.php method=post>
<table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
    <tr>
        <td height=20 align=center bgcolor=#999999>
            <font color=white><B>글 수 정 하 기</B></font>
        </td>
    </tr>
    <?php
        //데이터 베이스 연결하기
        include("dbconnect.php");

        $pw = addslashes($_POST['pw']);
        $pw_hash = hash("sha256",addslashes($_POST['pw']));

        // 먼저 쓴 글의 정보를 가져온다.
        $query = "SELECT * FROM post where pw='$pw_hash'";
        $res = mysqli_query($db,$query);
        $arr = mysqli_fetch_array($res);

        if ($arr[4] == $pw){
        echo "<script>alert('확인되었습니다.')</script>";
        }
        else {
          echo "<script>alert('비밀번호가 일치하지 않습니다.')</script>";
        }
    ?>

<!-- 입력 부분 -->
<tr>
    <td bgcolor=white>&nbsp;
    <table>
      <tr>
          <td width=60 align=left>ID</td>
          <td align=left >
              <INPUT name=id value= <?php
              $user_id = $arr[0];
              echo "$user_id";?>>
          </td>
      </tr>
        <tr>
            <td width=60 align=left >이름</td>
            <td align=left >
                <INPUT type=text name=name size=20 value=<?php
                echo "$arr[1]";
                ?>
                >
            </td>
        </tr>

        <tr>
            <td width=60 align=left >제 목</td>
            <td align=left >
                <INPUT type=text name=title size=60 value=<?php
                echo "$arr[2]";
                ?>>
            </td>
        </tr>

        <tr>
            <td width=60 align=left >내용</td>
            <td align=left >
                <textarea name=contents cols=65 rows=15 value=<?php
                echo "$arr[3]";
                ?>></textarea>
            </td>
        </tr>
        <tr>
            <td width=60 align=left >비밀번호</td>
            <td align=left >
                <INPUT type=password name=pw size=20 maxlength=20>
            </td>
        </tr>
        <tr>
            <td colspan=10 align=center>
                <INPUT type=submit value="글 저장하기">
                &nbsp;&nbsp;
                <INPUT type=reset value="다시 쓰기">
                &nbsp;&nbsp;
                <INPUT type=button value="되돌아가기"
                onclick="history.back(-1)"> <!--버튼이 클릭되었을때 발생하는 이벤트로 자바스크립트를 실행함. 이렇게 하면 바로 이전페이지로 감-->
            </td>
        </tr>
    </table>
</td>
</tr>
<!-- 입력 부분 끝 -->
</table>
</form>
</center>
</body>
</html>
