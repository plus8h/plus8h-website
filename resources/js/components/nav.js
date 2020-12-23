/*
|--------------------------------------------------------------------------
|    Nav menu click event
|--------------------------------------------------------------------------
|
|    @navbarBtnId 
|    @navbarTitle
|    1.Get click menu btn id
|    2.Get need to be changed text node
|    3.Add mouse click event
|
*/


const navbarBtnId = document.getElementById('navbarClickSection');

let navbarTitle = document.getElementById('navbarTitle');

let navbarDropdownContainerId = document.getElementById('navbarDropdownContainer');

let navId = document.getElementById('nav')



/*`
*    when user click 'MENU' toggle this text 
*/

if (navbarBtnId) {
  navbarBtnId.addEventListener('click', function (e) {
    let navbarDropdownContainerClassList = navbarDropdownContainerId.classList

    if (navbarDropdownContainerClassList.contains("uk-open")) {
      navbarTitle.textContent = 'menu'
      navId.classList.remove('yellow-background')
    } else {
      navbarTitle.textContent = 'close';
      navId.classList.add('yellow-background')
    }
  })
}

/* 
*    when user click window other section,toggle 'MENU' text
*    add third parameter 'true',this click event capture phase execution
*/

document.addEventListener('click', function (e) {
  let navbarDropdownContainerClassList = navbarDropdownContainerId.classList
  
  if (navbarDropdownContainerClassList.contains("uk-open")) {
    navbarTitle.textContent = 'close'
  } else {
    navbarTitle.textContent = 'menu'
  }
}, true)