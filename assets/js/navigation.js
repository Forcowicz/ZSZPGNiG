const navbarExpand = document.getElementById('navbarExpand');
const navbarIcon = document.getElementById('navbarIcon');
navbarExpand.addEventListener('mouseenter', () => {
    navbarIcon.classList.add('nav__dropdown-icon--hovered');
});
navbarExpand.addEventListener('mouseleave', () => {
    navbarIcon.classList.remove('nav__dropdown-icon--hovered');
});

let navbarDropdowns = document.querySelectorAll('.nav__dropdown-list');
let navbarLinks = document.querySelectorAll('.nav__link.nav_link--top');

for (let length = 0; length <= navbarLinks.length; length++) {
    addHoveredClass(navbarLinks[length], navbarDropdowns[length]);
    removeHoveredClass(navbarLinks[length], navbarDropdowns[length]);
}

function addHoveredClass(link, dropdown) {
    dropdown.addEventListener('mouseenter', () => {
        link.classList.toggle('nav__link--hovered');
    });
}

function removeHoveredClass(link, dropdown) {
    dropdown.addEventListener('mouseleave', () => {
        link.classList.toggle('nav__link--hovered');
    });
}