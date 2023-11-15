let $formBox = document.querySelector('.form-box');
let $leaveAgree = document.querySelector('.leaveAgree');
let $chkbox = document.querySelector('.chkbox');
let $leaveAgreeImg = document.querySelector('.leaveAgree > i');
let $btnLeave = document.querySelector('.btn-leave');
let isCheck = $chkbox.checked;

function checkBoxImgChange() {
  if(isCheck) {
    $leaveAgreeImg.style.background = 'url(../images/onchkbox.png)';
  } else {
    $leaveAgreeImg.style.background = 'url(../images/unchkbox.png)';
  }
}
function changeChecked(e) {
  if (isCheck) {
    isCheck = false;
  } else {
    isCheck = true;
  }
  checkBoxImgChange();
}

function isChecked(e) {
  if (isCheck) {
    $formBox.submit();
  }else {
    alert("회원탈퇴 내용에 동의 하셔야 완료됩니다.");
  }
}

$leaveAgree.addEventListener('click', changeChecked);
$btnLeave.addEventListener('click', isChecked);