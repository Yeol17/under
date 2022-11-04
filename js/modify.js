let $editUserInfo = document.getElementById('edit_user-info');
let $editUserPassword = document.getElementById('edit_user-password');
let $info = document.querySelector('.change_info > .info');
let $password = document.querySelector('.change_info > .password');
let $btnDelete = document.querySelector('button.delete');

function changeTab() {
  if ($editUserInfo.checked) {
    $info.style.display = 'block';
    $password.style.display = 'none';
    return;
  }
  if ($editUserPassword.checked) {
    $info.style.display = 'none';
    $password.style.display = 'block';
    return;
  }
}
$editUserInfo.addEventListener('click', changeTab);
$editUserPassword.addEventListener('click', changeTab);
$btnDelete.addEventListener('click', (e) => {
  $postCode.value = '';
  $adress.value = '';
  $detailAddress.value = '';
});