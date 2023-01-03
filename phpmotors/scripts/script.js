// set datetime in footer
document.querySelector("#last-updated-date").textContent = document.lastModified;


//set up main menu
var URL
// handle case where no index.html is specified in url
if (document.URL.split("/").slice(-2)[0] =='phpmotors' &
    document.URL.split("/").slice(-1)[0] == '') {
    URL = "home.php"
}
else {
    URL = document.URL.split("/").slice(-1)[0]
}

// highlight current menu item
const mainNav = document.getElementById("main_nav");
const mainNavChildren = mainNav.children;

for (let i = 0; i < mainNavChildren.length; i++) {
    if (mainNavChildren[i].children[0].href.split("/").slice(-1)[0] == URL) {
        mainNavChildren[i].children[0].classList.add('current-menu');
    }

}
