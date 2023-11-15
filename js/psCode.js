// change PostCode
let $body = document.querySelector('body');
let $postalWrapper = document.querySelector('.postal-wrapper');
let $postal = document.querySelector('.postal')

let $changePostCode = document.querySelector('.change-post-code')

let $psCode = document.getElementById('ps_code');
let $addrB = document.querySelector('.addr_b');
let $addrD = document.querySelector('.addr_d');
var width = 500;
var height = 600;
var themeObj = {
  bgColor: "#F1F1F1",
  searchBgColor: "#fff", 
  queryTextColor: "#333",
};

function closeDaumPostcode() {
  $postalWrapper.style.display = 'none';
  $postal.style.display = 'none';
  $body.classList.remove('no-scroll');
}

function psCode() {
  $postalWrapper.style.display = 'block';
  $body.classList.add('no-scroll');
  // 주소 검색
  new daum.Postcode({
    theme: themeObj,
    width: width,
    height: height,
    popupKey: 'popup1',
    maxSuggestItems: '0',
    oncomplete: function(data) {
      var addr = ''; // 주소변수
      var extraAddr = ''; // 참고 항목 변수

      // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
      if (data.userSelectedType === 'R') { // 사용자가 도로면 주소를 선택했을 경우 (R)
        addr = data.roadAddress;
      } else { // 사용자가 지번 주소를 선택했을 경우(J)
        addr = data.jibunAddress;
      }
      
      // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
      if (data.userSelectedType === 'R') {
        // 법정동명이 있을 경우 추가한다. (법정리는 제외)
        // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
        if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
          extraAddr += data.bname;
        }
        // 건물명이 있고, 공동주택일 경우 추가한다.
        if (data.buildingName !== '' && data.apartment === 'Y') {
          extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
        }
        //표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
        if (extraAddr !== '') {
          extraAddr = ' (' + extraAddr + ')';
        }

      } else {
        extraAddr.value += '';
      }
      // 우편번호와 주소 정보를 해당 필드에 넣는다.
      $psCode.value = `(${data.zonecode})`;
      $addrB.value = addr + extraAddr;
      // 커서를 상세주소 필드로 이동한다.
      $addrD.value = "";
      $addrD.focus();
      $body.classList.remove('no-scroll');
      $postalWrapper.style.display = 'none';
    }
  }).embed($postal);
  $postal.style.display = 'block';

  initLayerPosition();
}
function initLayerPosition(){
  var width = 500; //우편번호서비스가 들어갈 element의 width
  var height = 600; //우편번호서비스가 들어갈 element의 height
  var borderWidth = 0; //샘플에서 사용하는 border의 두께

  // 위에서 선언한 값들을 실제 element에 넣는다.
  $postal.style.width = width + 'px';
  $postal.style.height = height + 'px';
  // 실행되는 순간의 화면 너비와 높이 값을 가져와서 중앙에 뜰 수 있도록 위치를 계산한다.
  $postal.style.left = (((window.innerWidth || document.documentElement.clientWidth) - width ) / 2) + 'px';
  $postal.style.top = (((window.innerHeight || document.documentElement.clientHeight)  - height ) / 2) + 'px';
}

$changePostCode.addEventListener('click', psCode);
