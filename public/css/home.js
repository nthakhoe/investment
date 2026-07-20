const toggle = document.getElementById('menuToggle');
const menu = document.querySelector('.mobile-menu');
const overlay = document.querySelector('.mobile-overlay');

toggle.addEventListener('click', () => {
    menu.classList.toggle('active');
    overlay.classList.toggle('active');
});

overlay.addEventListener('click', () => {
    menu.classList.remove('active');
    overlay.classList.remove('active');
});