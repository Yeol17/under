let $lis = Array.from(document.querySelectorAll('.product-category__item'));
let active = 'product-category__item--active';

function findElremoveClass(t, el, removeClass) {
  
  for (let i = 0; i < el.length; i++) {
    if (t !== el[i]) {
      el[i].classList.remove(removeClass);
    } 
  }
}

function tabClick(e) {
  e.stopPropagation();
  let target = e.target.parentElement;
  console.log(target);
  target.classList.add(active);
  findElremoveClass(target, $lis, active);
}

$lis.map(li => {
 li.addEventListener('click', tabClick);
})