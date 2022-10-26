let $as = Array.from(document.querySelectorAll('.product-category__item-title'));
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
  let target = e.target;
  console.log(target);
  findElremoveClass(target, $as, active);
  target.classList.add(active);
}

$as.map(a => {
 a.addEventListener('click', tabClick);
})