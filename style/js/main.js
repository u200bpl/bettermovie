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
function dropDown1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}

function dropDown2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}

function dropDown3() {
    document.getElementById("myDropdown3").classList.toggle("show");
}

function dropDown4() {
    document.getElementById("myDropdown4").classList.toggle("show");
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

    if (!event.target.matches('.dropbtn2')) {
        var dropdowns = document.getElementsByClassName("dropdown-content2");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
    
    if (!event.target.matches('.dropbtn3')) {
        var dropdowns = document.getElementsByClassName("dropdown-content3");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }

    if (!event.target.matches('.dropbtn4')) {
        var dropdowns = document.getElementsByClassName("dropdown-content4");
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

//--------------------------------------------------------------------------------