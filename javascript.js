function toggleNav() {
    var updateElement = document.getElementById("menu-icon");
    var updateElement1 = document.getElementById("side-nav");
    //toggle adds a class if it's not there or removes it if it is.
    updateElement.classList.toggle("open");
    updateElement1.classList.toggle("open");
}              
