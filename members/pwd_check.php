<?php
include "../inc/session.php";

$pwd = $_GET["pwd"];

include "../inc/dbcon.php";

$sql = "select pwd from members where idx='$s_idx'";

$result = mysqli_query($dbcon, $sql);

$arr = mysqli_fetch_array($result);

$arrPwd = $arr["pwd"];

if($pwd === $arrPwd){
  echo "Y";
} else if ($pwd !== $arrPwd) {
  echo "N";
}

mysqli_close($dbcon);
?>