//--------------------------------------------------------------------------------
// SEARCH BOX

var searchIcon = document.getElementsByClassName("search-box__icon")[0];
var searchBox = document.getElementsByClassName("search-box")[0];

searchIcon.addEventListener("click", activateSearch);

function activateSearch() {
    searchBox.classList.toggle("active");
}

//--------------------------------------------------------------------------------
// DROP DOWN MENU

function dropDown() {
    document.getElementById("myDropdown").classList.toggle("show");
}
  
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

//--------------------------------------------------------------------------------
// CARD SLIDER
const rightButtons = Array.from(document.getElementsByClassName('nxt-btn'));
const leftButtons = Array.from(document.getElementsByClassName('pre-btn'));
const containers = Array.from(document.getElementsByClassName('card-container'));

let index = 0;
for (const rightButton of rightButtons) {
    const container = containers[index];
    rightButton.addEventListener("click", function () {
        container.scrollLeft += 1200;
    });
    index++;
}

index = 0;
for (const leftButton of leftButtons) {
    const container = containers[index];
    leftButton.addEventListener("click", function () {
        container.scrollLeft -= 1200;
    });
    index++;
}

