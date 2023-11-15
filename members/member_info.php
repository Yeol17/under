<?php
include "../inc/session.php";
include "../inc/login_check.php";

$pwd = $_POST["pw-input"];

include "../inc/dbcon.php";

$sql = "select * from members where idx='$s_idx'";

$result = mysqli_query($dbcon, $sql);

$arr = mysqli_fetch_array($result);


if ($arr["gender"] == 'm') {
  $gender = '남자';
} else if ($arr["gedner"] == 'f') {
  $gender = '여자';
} else {
  $gender = '';
}
// 01012345678
$mobile = substr($arr["mobile"],0,3)."-".substr($arr["mobile"],3,4)."-".substr($arr["mobile"],-4,4);

?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>under70</title>

  <!-- RESET -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">

  <!-- FONTS & ICONS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <!-- CSS -->
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="../css/member_info.css">

  <script src="../js/common.js" defer></script>
  <script src="../js/member_info.js" defer></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

  <!-- POST CODE -->
  <link rel="stylesheet" href="/under/css/psCode.css">
  <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js" defer></script>
  
  <script src="/under/js/psCode.js" defer></script>
<body>
  <div class="wrap">
    <!--HEADER-->
    <?php 
    include "../inc/header.php";
    ?>
    
    <!--CONTENT-->
    <main id="main" class="content">

      <section class="change_membership">

        <h2 class="modify_tit">회원 정보 수정</h2> 
        <div class="change_info_guide clearfix">
          <input type="radio" name="edit_user" id="edit_user-info" class="edit_tap edit_user-info" checked>
          <label for="edit_user-info">일반정보수정</label>
          <input type="radio" name="edit_user" id="edit_user-password" class="edit_tap edit_user-password">
          <label for="edit_user-password">비밀번호 수정</label>
        </div>
        <div class="change_info">

          <div class="info">
            <form action="edit.php?type=1" method="post" class="info_form">
              <div class="cont1">
                <div class="user_id col empty_right">
                  <label for="" class="input_label">아이디</label>
                  <div class="input_wrap">
                    <input type="text" value="<?php echo $arr["u_id"] ?>" readonly class="read-only">
                  </div>
                </div>
                <div class="user_name col empty_right">
                  <label for="" class="input_label">이름</label>
                  <div class="input_wrap">
                    <input type="text" value="<?php echo $arr["u_name"] ?>" readonly class="read-only">
                  </div>
                </div>
                <div class="user_gen col">
                  <label for="" class="input_label">성별</label>
                  <div class="input_wrap">
                    <input type="text" value="<?php echo $gender ?>" readonly class="read-only">
                  </div>
                </div>
                <div class="user_birth col">
                  <label for="" class="input_label">생년월일</label>
                  <div class="input_wrap">
                    <input type="text" value="<?php echo $arr["birth"] ?>" readonly class="read-only">
                  </div>
                </div>
              </div>
              <div class="cont2 clearfix">
                <div class="user_email col">
                  <label for="email" class="input_label">이메일</label>
                  <div class="input_wrap">
                    <input type="text" name="email" id="email" value="<?php echo $arr["email"] ?>">
                  </div>
                </div>
                <div class="user_phone col">
                  <label for="mobile" class="input_label">휴대폰</label>
                  <div class="input_wrap">
                    <input type="number" name="mobile" id="mobile" value="<?php echo $mobile ?>">
                    <button class="btn" id="" type="button">인증하기</button>
                  </div>
                </div>
                <div class="user_adress">
                  <label for="ps_code" class="input_label">주소</label>
                  <div class="input_wrap align">
                    <input type="text" name="ps_code" value="<?php echo $arr["ps_code"] ?>" id="ps_code" readonly maxlength="20" class="read-only">
                    <button type="button" class="btn change-post-code" type="button">주소검색</button>
                  </div>
                  <div class="input_wrap addr">
                    <input type="text" class="addr_b" name="addr_b" id="addr_b" value="<?php echo $arr["addr_b"] ?>" readonly class="read-only">
                  </div>
                  <div class="input_wrap addr">
                    <input type="text" id="addr_d" name="addr_d" class="addr_d" value="<?php echo $arr["addr_d"] ?>" placeholder="상세주소 입력" >
                    <button class="btn delete" type="button"><img src="https://assets.kolonmall.com/_ui/img/pc/icn/icn-delete-4a9cc8147c.png" alt="상세주소 삭제 아이콘">삭제</button>
                  </div>
                </div>
              </div>
              <div><a href="checkPwd.php?type=0" class="leave_btn">회원탈퇴</a></div>
            </form>
          </div>

          <div class="pwd">
            <form action="edit.php?type=2" method="post" class="pwd_form">
              <div class="account_info">
                <label for="pw-now">
                  <div>현재 비밀번호</div>
                  <div class="pw_wrap">  
                    <span class="placeholder">••••••••</span>
                    <input type="password" name="pw-now" id="pw-now" class="password_input" maxlength="15">
                    <p class="err_now">

                    </p>
                  </div>
                </label>
              </div>
              <div class="new_password_input">
                <label for="pw_new">
                  <div>새 비밀번호</div>
                  <div class="pw_wrap">  
                    <span class="placeholder">••••••••</span>
                    <input type="password" name="pw_new" id="pw-new" class="password_input" maxlength="15">
                    <p class="err_new"></p>
                  </div>
                </label>
              </div>
              <div class="confirm_password_input clearfix">
                <label for="pw-check">
                  <div>새 비밀번호 확인</div>
                  <div class="pw_wrap">  
                    <span class="placeholder">••••••••</span>
                    <input type="password" name="pw" id="pw-check" class="password_input" maxlength="15">
                    <p class="err_check"></p>
                  </div>
                </label>
              </div>
              <dl class="policy_guide">
                  <dt>비밀번호 변경 시 유의사항</dt>
                  <dd class="oh">
                    <ul class="fl">
                      <li>영문, 숫자, 특수문자를 혼합하여 8~15자로 등록</li>
                      <li>타인이 알기 쉬운 번호 사용자제 (생일, 주민번호, 휴대폰번호)</li>
                      <li>공백 및 Tab 등은 사용불가</li>
                    </ul>
                    <ul class="fl">
                      <li>순서가 일정한 문자 또는 키보드상 연속된 배열 사용자제</li>
                      <li>아이디 및 아이디를 포함한 문자 및 숫자 사용 자제</li>
                      <li>개인정보 강화를 위해 한달에 한번 비밀번호 주기적 변경</li>
                    </ul>
                  </dd>
              </dl>
            </form>
          </div>
          <div class="edit_done">
            <a href="myPage.php"><button class="btn" type="button">취소</button></a>
            <button class="btn submit" type="button">확인</button>
          </div>
        </div>
        
      </section>

      <div class="postal-wrapper" onclick="closeDaumPostcode()">
        <div class="postal">
          </div>
      </div>
    </main>

    
      
    
    <!-- FOOTER -->
    <?php 
    include "../inc/footer.php";
    ?>

  </div>
  
</body>

</html>