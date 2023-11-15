
let pw_input = document.getElementById('pw-input');
let password_btn = document.querySelector('.password_btn');
let $err = document.querySelector('.err');
let xmlhttp = fncGetXMLHttpRequest();
let $formCheckPw = document.querySelector('.form_check_pw');

function getCont(e) {
  
  // 아이디를 체크할 php 페이지에 체크 하려하는 id 값을 파라미터로 전송
  xmlhttp.open('GET', `pwd_check.php?pwd=${pw_input.value}`, true);
  
  xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
  
  xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState == '4' && xmlhttp.status == 200) {
      if (xmlhttp.status == 500 || xmlhttp.status == 404 || xmlhttp.status == 403)
      alert(xmlhttp.status);
      else {
        let txt = xmlhttp.responseText;
        if (txt === 'N') {
          $err.textContent = '';
          $err.textContent = '비밀번호가 일치 하지 않습니다.';
        } else if (txt === 'Y') { // 비밀번호가 일치 할 때  
          flag = true;
          if (flag) {
            $err.textContent = '';
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

$formCheckPw.addEventListener('keydown', function(e) {
  if (e.keyCode === 13) {
    e.preventDefault();
  }else {
    return;
  }
});

password_btn.addEventListener('click', getCont);

pw_input.addEventListener('focus', (e) => {
  e.target.style.background = "#fff"; 
});
pw_input.addEventListener('blur', (e) => {
  if (!e.target.value) {
    e.target.style.background = "transparent"; 
  } else {
    e.target.style.background = "#fff"; 
  } 
});