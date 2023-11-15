<?php
session_start();

$u_id = $_POST['id'];
$pwd = $_POST['pwd'];

include "../inc/dbcon.php";

$sql = "select idx, u_name, u_id, pwd from members where u_id='$u_id'";

$result = mysqli_query($dbcon, $sql);

$target = mysqli_num_rows($result);

if (!$target) {
  echo "<script>location.herf = \"/under/login/login.php?target=$target&1\";</script>";
} else {
  $arr = mysqli_fetch_array($result);
  $g_pwd = $arr["pwd"];
}
if($pwd != $g_pwd) {
  $target = 0;
  echo "<script>location.href = \"/under/login/login.php?target=$target&2\";</script>";
} else {
  $_SESSION["s_idx"] = $arr["idx"];
  $_SESSION["s_name"] = $arr["u_name"];
  $_SESSION["s_id"] = $arr["u_id"];
}
mysqli_close($dbcon);
echo "
<script>
  location.href = \"/under/index.php\";
</script>";
?>
