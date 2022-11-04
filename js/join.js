let $userId = document.getElementById('user-id');
let $idClear = document.querySelector('.membership_join_id .clear-btn');
let $errId = document.querySelector('.err-id');
let $userPw = document.getElementById('user-pw');
let $pwClear = document.querySelector('.pw-clear');
let $pwVisible = document.querySelector('.pw-visible');
let $pwVisibleOff = document.querySelector('.pw-visible_off');
let $errPw = document.querySelector('.err-pw');
let $checkClear = document.querySelector('.check-clear');
let $pwCheck = document.getElementById('pw-check');
let $checkVisible = document.querySelector('.check-visible');
let $checkVisibleOff = document.querySelector('.check-visible_off');
let $pwCheckMsg = document.querySelector('.pw-check-msg');
let $uName = document.getElementById('u_name');
let $errName = document.querySelector('.err-name');
let $userEmail = document.getElementById('user-email');
let $emailClear = document.querySelector('.email-clear');
let $errEmail = document.querySelector('.err-email');
let $policyAll = document.getElementById('policy_all');
let checkboxes = document.querySelectorAll('input[type="checkbox"]');
let $joinUs = document.querySelector('.joinus');
// 약관 동의
let $joinAge = document.getElementById('join_age');
let $privacy = document.getElementById('privacy');
let $siteUse = document.getElementById('site_use');
let $marketing = document.getElementById('marketing');

let flagId, flagPw, flagEmail, flagPolicy, flagName = false;

let ptnId = /^[a-z0-9]{5,11}$/g;
let ptnName = /^[가-힣]{2,4}$/
let ptnPw = /^(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
let ptnEmail = /([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

function btnAble() {
  if (flagId && flagPw && flagEmail && flagPolicy && flagName) {
    $joinUs.removeAttribute('disabled');
    $joinUs.classList.add('clickable');
    return;
  }
  if (!(flagId && flagPw && flagEmail && flagPolicy && flagName)) {
    $joinUs.setAttribute('disabled', 'true');
    $joinUs.classList.remove('clickable');
    return;
  }
}
function isPolicyAgree(e) {
  if ($privacy.checked && $siteUse.checked && $joinAge.checked) {
    flagPolicy = true;
    btnAble();
  } else {
    flagPolicy = false;
    btnAble();
  }
  if ($privacy.checked && $siteUse.checked && $joinAge.checked && $marketing.checked) {
    $policyAll.checked = true;
  } else {
    $policyAll.checked = false;
  }
}
function clearValue(e) {
  let val = e.target;
  if (val.previousElementSibling === $pwCheck) {
    val.nextElementSibling.textContent = "";
  } else {
    val.nextElementSibling.textContent = "필수 입력사항입니다.";
  }
  val.style.display = "none";
  val.previousElementSibling.focus();
  val.previousElementSibling.value = '';
  val.nextElementSibling.classList.remove('cor');
  val.nextElementSibling.classList.add('err');
}
function pwVisible(e) {
  let val = e.target;
  val.style.display = "none"
  val.previousElementSibling.style.display = "block"
  val.nextElementSibling.setAttribute('type', 'text');
}
function pwVisibleOff(e) {
  let val = e.target;
  val.nextElementSibling.nextElementSibling.setAttribute('type', 'password');
  val.style.display = "none"
  val.nextElementSibling.style.display = "block"
}

$userId.addEventListener('input', (e) => {
  let val = e.target.value;
  if (val) {
    $idClear.style.display = "block";
  } else {
    $idClear.style.display = "none";
  }

  if (ptnId.test(val)) { // 유효성 검사 통과
    $errId.classList.remove('err')
    $errId.classList.add('cor')
    $errId.textContent = '사용 가능한 아이디입니다.'
    flagId = true;
    btnAble();
    return;
  }
  if (!ptnId.test(val)) {
    $errId.classList.remove('cor')
    $errId.classList.add('err')
    $errId.textContent = '영문, 숫자 5-11.2'
    flagId = false;
    return;
  }
  if (val.length < 5) {
    $errId.classList.remove('cor')
    $errId.classList.add('err')
    $errId.textContent = '영문, 숫자 5-11.1'
    flagId = false;
    return;
  }
});
$userId.addEventListener('blur', (e) => {
  let val = e.target.value;
  if (ptnId.test(val)) { // 유효성 검사 통과
    $errId.classList.remove('err')
    $errId.classList.add('cor')
    $errId.textContent = '사용 가능한 아이디입니다.'
    flagId = true;
    btnAble();
    return;
  }
  if (!val) {
    $errId.textContent = '필수 입력사항입니다.'
    flagId = false;
    return;
  }
  if (!ptnId.test(val)) {
    $errId.classList.remove('cor')
    $errId.textContent = '영문, 숫자 5-11.'
    flagId = false;
    return;
  }
});
$userPw.addEventListener('input', (e) => {
  let val = e.target.value;
  if (val) {
    $pwClear.style.display = "block";
  } else {
    $pwClear.style.display = "none";
  }
  if (ptnPw.test(val)) {
    $errPw.textContent = '';
    flagPw = true;
    return;
  }
  if (!ptnPw.test(val)) {
    $errPw.textContent = '특수문자 포함 8~30자';
    flagPw = false;
    return;
  }
});
$userPw.addEventListener('blur', (e) => {
  let val = e.target.value;
  if (!val) {
    $errPw.textContent = '필수 입력사항입니다.';
    flagPw = false;
    return;
  }
  if (val && val !== $pwCheck.value) {
    $pwCheckMsg.textContent = '비밀번호가 일치하지 않습니다.';
    flagPw = false;
  } else { // 유효성 검사 통과
    $pwCheckMsg.textContent = '';
    btnAble();
    flagPw = true;
  }
});
$pwCheck.addEventListener('input', (e) => {
  let val = e.target.value;
  if (val) {
    $checkClear.style.display = "block";
    if (val !== $userPw.value) {
      $pwCheckMsg.textContent = '비밀번호가 일치하지 않습니다.';
      flagPw = false;
    } else { // 유효성 검사 통과
      $pwCheckMsg.textContent = '';
      flagPw = true;
      btnAble();
    }
  } else {
    $checkClear.style.display = "none";
  }
});
$uName.addEventListener('blur', (e) => {
  let val = e.target.value;
  if (!val) {
    $errName.textContent = '필수 입력 사항입니다.';
    return;
  }
  if(ptnName.test(val) && val) { // 유효성 검사 통과
    $errName.textContent = '';
    flagName = true;
    btnAble();
    return;
  }
  if(!ptnName.test(val) && val) {
    $errName.textContent = '한글3-4(특수문자, 공백 사용 불가)';
    return;
  }
});
$userEmail.addEventListener('blur', (e) => {
  if (!e.target.value) {
    $errEmail.textContent = '필수 입력사항입니다.1'
    flagEmail = false;

  }
});
$userEmail.addEventListener('input', (e) => {
  let val = e.target.value;
  if (val) {
    $emailClear.style.display = "block";
  } else {
    $emailClear.style.display = "none";
  }
  if (!ptnEmail.test(val)) {
    $errEmail.textContent = '이메일 주소가 올바르지 않습니다.'
    flagEmail = false;
    return;
  } else { // 유효성 검사 통과
    $errEmail.textContent = ''
    flagEmail = true;
    btnAble();
  }
});
$policyAll.addEventListener('click', (e) => {
  checkboxes.forEach((checkbox) => {
    checkbox.checked = $policyAll.checked;
  });
  if ($privacy.checked && $siteUse.checked && $joinAge.checked) {
    flagPolicy = true;
    btnAble();
  } else {
    flagPolicy = false;
    btnAble();
  }
});

$joinAge.addEventListener('click', isPolicyAgree);
$privacy.addEventListener('click', isPolicyAgree);
$siteUse.addEventListener('click', isPolicyAgree);
$marketing.addEventListener('click', isPolicyAgree)
$idClear.addEventListener('click', clearValue);
$pwClear.addEventListener('click', clearValue);
$checkClear.addEventListener('click', clearValue);
$pwVisible.addEventListener('click', pwVisible);
$checkVisible.addEventListener('click', pwVisible);
$pwVisibleOff.addEventListener('click', pwVisibleOff);
$checkVisibleOff.addEventListener('click', pwVisibleOff);
$emailClear.addEventListener('click', clearValue);