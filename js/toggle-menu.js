const menuIcon = document.querySelector('#menu-icon')
const menuList = document.querySelector('#menu-list')

menuIcon.addEventListener('click', (_event) => {
  if (menuIcon.classList.contains('ph-list')) {
    menuIcon.classList.remove('ph-list')
    menuIcon.classList.add('ph-x')

    menuList.classList.add('top-auto')
    menuList.classList.add('opacity-100')

  } else {
    menuIcon.classList.remove('ph-x')
    menuIcon.classList.add('ph-list')
    
    menuList.classList.remove('top-auto')
    menuList.classList.remove('opacity-100')
  }
})