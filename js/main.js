document.body.innerHTML=document.body.innerHTML.replace(/\u00AD/g, '');

const myNav = document.getElementById('mynav');
const navList = document.getElementById('nav-collapse');
let burger = document.querySelector('.burger-menu');
let btn = burger.querySelector('.btn');


window.onscroll = function () { 
    "use strict";
    if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100) {
        myNav.classList.add("nav-scrolling");
    } 
    else {
        myNav.classList.remove("nav-scrolling");
    }
};

navList.addEventListener('click', () => {
    burger.classList.remove("show");
});

btn.addEventListener('click', () => {
    burger.classList.remove("show");
});

