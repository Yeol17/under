<?php 
  $u_id = $_POST["u_id"];
  $pwd = $_POST["pwd"];
  $u_name = $_POST["u_name"];
  $year = $_POST["yy"];
  $month = $_POST["mm"];
  $day = $_POST["dd"];
  $birth = $year."-".$month."-".$day;
  $gender = $_POST["gender"];
  $email_id = $_POST["email_id"];
  $email_dns = $_POST["email_dns"];
  $email = $email_id.$email_dns;
  $mobile = $_POST["mobile"];
  $ps_code = $_POST["ps_code"];
  $addr_b = $_POST["addr_b"];
  $addr_d = $_POST["addr_d"];
  $gender = $_POST["gender"];
  $gender = $_POST["gender"];
  $reg_date = date("Y-m-d");
  $marketing_agree = $_POST["marketing_agree"];
  $marketing_agree = isset($_POST["marketing_agree"]) ? 'y' : 'n';

  include "../inc/dbcon.php";

  $sql = "insert into members(
    u_name, u_id, pwd, mobile, birth, email, ps_code, addr_b, addr_d, gender, reg_date, marketing_agree
  ) value(
    '$u_name', '$u_id', '$pwd', '$mobile', '$birth', '$email', '$ps_code', '$addr_b', '$addr_d', '$gender', '$reg_date', '$marketing_agree'
  );";

  // echo $sql;
  // exit;
  
  mysqli_query($dbcon,$sql);

  mysqli_close($dbcon);

  echo "
  <script type='text/javascript'>
    window.location.replace('/under/members/reg_ok.php');
  </script>";
?>
