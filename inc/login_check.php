<?php 
  if (!$s_idx) {
    echo "
      <script>
<<<<<<< HEAD
        alert(\"올바르지 않은 접근입니다.\")
        location.replace('../login/login.php');
      </script>
    ";
=======
        alert(\"잘못된 접근입니다.\")
        location.href = \"http://localhost/web_project/index.php\";
      </script>
    ";
    exit;
>>>>>>> d7601436c5cd5eeaee193b4c8ec111731a8d9983
  } 
?>