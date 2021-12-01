//grab the button and listen 
//document.getElementById("mobile-button").addEventListener("click", toggleNavBar);



//function to open to the mobile side menu
function openNavBar() {
    var navBar = document.getElementById("nav-bar-id");
    var opacityLayer = document.getElementById("opacity-layer");
    var body = document.body;

    //if the nav bar is closed
    navBar.style.width = "200px";
    navBar.style.borderWidth = "2px"

    //hide opacity layer
    opacityLayer.style.display = "block";

    //prevent scrolling
    body.style.height = "100%";
    body.style.overflowY = "hidden";

}

//function to close the mobile side menu
function closeNavBar() {
    var navBar = document.getElementById("nav-bar-id");
    var opacityLayer = document.getElementById("opacity-layer");
    var body = document.body;

    //if the nav bar is open
    navBar.style.width = "0";
    navBar.style.borderWidth = "0"

    //hide opacity layer
    opacityLayer.style.display = "none";

    //allow scrolling
    body.style.height = "initial";
    body.style.overflowY = "initial";

}
