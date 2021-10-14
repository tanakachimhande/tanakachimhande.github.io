
//Element Selection

const allMenus=document.querySelector('#all');
const clotheSection = document.querySelector('#clothe-section');
const watchSection = document.querySelector('#watch-section');
const hatSection= document.querySelector('#hat-section');
const shoesSection= document.querySelector('#shoes-section');
const menuContainer = document.querySelector('.menu-container');
const defaultText= document.querySelector('.defaul-text');

//EventListeners

allMenus.addEventListener('mouseenter', showAllMenus);
clotheSection.addEventListener('mouseenter', showBreakfast);
watchSection.addEventListener('mouseenter', showLaunch);
hatSection.addEventListener('mouseenter', showDinner);
shoesSection.addEventListener('mouseenter', showShakes);
 

//Fucntions


function showAllMenus() {

    menuContainer.classList.add('hide-defaultText')
    menuContainer.classList.add('show-menu1')
    menuContainer.classList.add('show-menu2')
    menuContainer.classList.add('show-menu3')
    menuContainer.classList.add('show-menu4')
    
}
function showBreakfast() {

    menuContainer.classList.add('hide-defaultText')
    menuContainer.classList.add('show-menu1')
    menuContainer.classList.remove('show-menu2')
    menuContainer.classList.remove('show-menu3')
    menuContainer.classList.remove('show-menu4')

}
function showLaunch() {

    menuContainer.classList.add('hide-defaultText')
    menuContainer.classList.add('show-menu3')
    menuContainer.classList.remove('show-menu1')
    menuContainer.classList.remove('show-menu2')
    menuContainer.classList.remove('show-menu4')

}
function showDinner() {

    menuContainer.classList.add('hide-defaultText')
    menuContainer.classList.add('show-menu2')
    menuContainer.classList.remove('show-menu1')
    menuContainer.classList.remove('show-menu3')
    menuContainer.classList.remove('show-menu4')

}
function showShakes() {

    menuContainer.classList.add('hide-defaultText')
    menuContainer.classList.add('show-menu4')
    menuContainer.classList.remove('show-menu1')
    menuContainer.classList.remove('show-menu2')
    menuContainer.classList.remove('show-menu3')

}
