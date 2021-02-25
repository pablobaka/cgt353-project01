//NavBar Functions
let mainNav = document.getElementById('js-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');

//checks if if the NavBar is being clicked
navBarToggle.addEventListener('click', function () {
    
    //when NavBar is clicked, toggle the "active" class, which shows/hides the links to other pages
    mainNav.classList.toggle('active');
});