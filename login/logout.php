<?php
session_start();
session_destroy();

echo "
<script>
  location.href = '/under/index.php';
</script>
";
?>