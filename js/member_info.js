let $btnDelete = document.querySelector('.btn.delete');
let $edit_tap = document.querySelectorAll('.edit_tap');
let $edit_userInfo = document.getElementById('edit_user-info');
let $edit_userPassword = document.getElementById('edit_user-password');
let $info = document.querySelector('.info');
let $infoForm = document.querySelector('.info_form');
let $pwd = document.querySelector('.pwd');
let $pwdForm = document.querySelector('.pwd_form');
let $pwNow = document.getElementById('pw-now');
let $pwNew = document.getElementById('pw-new');
let $errNow = document.querySelector('.err_now');
let $errNew = document.querySelector('.err_new');
let $pwCheck = document.getElementById('pw-check');
let $errCheck = document.querySelector('.err_check');
let $submit = document.querySelector('.submit');
let xmlhttp = fncGetXMLHttpRequest();
let ptnPw = /^(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
let flagPw = false;
let flagChk = false;
let flag = false;


function clearValue(e) {
  $psCode.value = ""; 
  $addrB.value = ""; 
  $addrD.value = "";
}

function changeTab(e) {
  if($edit_userInfo.checked) {
    $info.style.display = 'block';
    $pwd.style.display = 'none';
    return;
  }  
  if ($edit_userPassword.checked) {
    $info.style.display = 'none';
    $pwd.style.display = 'block';
    return;
  }
}

function chkPwd(e) {
  
  // 아이디를 체크할 php 페이지에 체크 하려하는 id 값을 파라미터로 전송
  xmlhttp.open('GET', `pwd_check.php?pwd=${$pwNow.value}`, true);
  
  xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
  
  xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState == '4' && xmlhttp.status == 200) {
      if (xmlhttp.status == 500 || xmlhttp.status == 404 || xmlhttp.status == 403)
      alert(xmlhttp.status);
      else {
        let txt = xmlhttp.responseText;
        if (txt === 'N') {
          $errNow.textContent = '비밀번호가 일치 하지 않습니다.';
        } else if (txt === 'Y') { // 비밀번호가 일치 할 때  
          flag = true;
          if (flag) {
            $errNow.textContent = '';
            $formCheckPw.submit();
          }else {
          }
        }
      }
    }
  }
  xmlhttp.send();
}
function fncGetXMLHttpRequest(){
  if (window.ActiveXObject){
      try{
          return new ActiveXObject("Msxml2.XMLHTTP");
      }
      catch(e){
          try{
              return new ActiveXObject("Microsoft.XMLHTTP");
          } 
      catch(e1) { return null; }
      }
      //IE 외 파이어폭스 오페라 같은 브라우저에서 XMLHttpRequest 객체 구하기
  } else if (window.XMLHttpRequest){
      return new XMLHttpRequest();
  } else{
      return null;
  }
}

for(tap of $edit_tap) {
  tap.addEventListener('click', changeTab);
}

$btnDelete.addEventListener('click',clearValue);

$submit.addEventListener('click',(e) =>{
  if ($edit_userInfo.checked) {
    $infoForm.submit();
    return;
  }
  if ($edit_userPassword.checked) {
    if (flag && flagPw && flagChk) { // 현재 pwd 일치, 새pwd === 체크pwd
      $pwdForm.submit();
    } else if (!flag) { // 현재 비밀번호가 일치 하지 않을 때
      $errNow.textContent = '특수문자 포함 8~30자';
      return;
    }
  }  
});

$pwNow.addEventListener('blur',chkPwd);
$pwNew.addEventListener('change', (e) => {
  let val = e.target.value;
  if(ptnPw.test(val)) {
    $errNow.textContent = '';
    flagPw = true;
    return;
  }
  if (!ptnPw.test(val)) {
    $errNow.textContent = '특수문자 포함 8~30자';
    flagPw = false;
    return;
  }
});
$pwCheck.addEventListener('change', (e) => {
  if ($pwNew.value) {
    if($pwNew.value !== e.target.value){
      flagChk = false;
      $errCheck.textContent = "비밀번호가 일치 하지 않습니다."
    } else {
      flagChk = true;
    }
  } else {
    flagChk = false;
    $errCheck.textContent = "비밀번호가 일치 하지 않습니다."
  }
});