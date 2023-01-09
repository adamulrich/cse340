// set datetime in footer
document.querySelector("#last-updated-date").textContent = document.lastModified;


//set up main menu
var URL
// handle case where no index.html is specified in url
const params = (new URL(document.location)).searchParams;
console.log(params.get("action"));
if (params.get('action') == null )  {
    URL = "index.php?action=home";
} else {
    URL = document.URL.split("/").slice(-1)[0];
}

// highlight current menu item
const mainNav = document.getElementById("main_nav");
const mainNavChildren = mainNav.children;

for (let i = 0; i < mainNavChildren.length; i++) {
    if (mainNavChildren[i].children[0].href.split("/").slice(-1)[0] == URL) {
        mainNavChildren[i].children[0].classList.add('current-menu');
    }

}
