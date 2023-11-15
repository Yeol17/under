<?php 
include "../inc/session.php";
include "../inc/login_check.php";

$type = $_GET['type'];
$pwd = $_GET['pwd'];

include "../inc/dbcon.php";

if ($type == 1) { // 정보수정
  $email = $_POST["email"];
  $mobile = $_POST["mobile"];
  $ps_code = $_POST["ps_code"];
  $addr_b = $_POST["addr_b"];
  $addr_d = $_POST["addr_d"];
  $sql = "update members set "; 
  $sql .= "email='$email', mobile='$mobile', ps_code='$ps_code', ";
  $sql .= "addr_b='$addr_b', addr_d='$addr_d'";
  $sql .= "where idx='$s_idx'";
}
if ($type == 2) { // 비밀번호 수정
  $pw_new = $_POST["pw_new"];
  $sql = "";
}

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo 
"<script>
alert(\"변경 되었습니다.\")
location.href = \"myPage.php\";
</script>";
?>