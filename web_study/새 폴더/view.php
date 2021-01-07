<?php
include("dbconnect.php");

session_start();
$query = "SELECT id, name, title, contents, wdate from post";
$res = mysqli_query($db,$query);
$rows = mysqli_fetch_array($res);
      ?>
      <style>
      .view_table {
      border: 1px solid #444444;
      margin-top: 30px;
      }
      .view_title {
      height: 30px;
      text-align: center;
      background-color: #cccccc;
      color: white;
      width: 1000px;
      }
      .view_id {
      text-align: center;
      background-color: #EEEEEE;
      width: 30px;
      }
      .view_id2 {
      text-align: center;
      background-color: white;
      width: 60px;
      }
      .view_name {
      text-align: center;
      background-color: #EEEEEE;
      width: 30px;
      }
      .view_name2 {
      text-align: center;
      background-color: white;
      width: 60px;
      }
      .view_wdate {
      text-align: center;
      background-color: #EEEEEE;
      width: 30px;
      }
      .view_wdate2 {
      text-align: center;
      background-color: white;
      width: 60px;
      }
      .view_content {
      padding-top: 20px;
      border-top: 1px solid #444444;
      height: 500px;
      }
      .view_btn {
      width: 700px;
      height: 200px;
      text-align: center;
      margin: auto;
      margin-top: 50px;
      }
      .view_btn1 {
      height: 50px;
      width: 100px;
      font-size: 20px;
      text-align: center;
      background-color: white;
      border: 2px solid black;
      border-radius: 10px;
      }

      </style>

<table class="view_table" align="center">
<tr>
  <td colspan="6" class="view_title"><?php echo $rows['title']?></td>
</tr>
<tr>
  <td class="view_id">ID</td>
  <td class="view_id2"><?php echo $rows['id']?></td>
  <td class="view_name">작성자</td>
  <td class="view_name2"><?php echo $rows['name']?></td>
  <td class="view_wdate">작성날짜</td>
  <td class="view_wdate2"><?php echo $rows['wdate']?></td>
</tr>


<tr>
  <td colspan="6" class="view_content" valign="top">
      <?php echo $rows['contents']
      ?>
  </td>
      </tr>
      </table>


      <!-- MODIFY & DELETE -->
<div class="view_btn">
  <button class="view_btn1" onclick="location.href='./list.php'">목록으로</button>
  <button class="view_btn1" onclick="location.href='./modify_check.php'">수정</button>
  <button class="view_btn1" onclick="location.href='./delete.php'">삭제</button>
</div>
