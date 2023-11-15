<?php

include "../inc/session.php";
include "../inc/login_check.php";
include "../inc/dbcon.php";

$sql = "delete from members where idx='$s_idx';";

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

session_destroy();

echo "
<script>
alert(\"정상 처리 되었습니다\");
location.replace('/under/');
</script>
";
?>