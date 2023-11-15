<?php 
  if (!$s_idx) {
    echo "
      <script>
        alert(\"올바르지 않은 접근입니다.\")
        location.replace('../login/login.php');
      </script>
    ";
  } 
?>