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
// COUNTDOWN TIMER++
var countDownDate = new Date("Jun 10, 2022 16:00:00").getTime();

// Update every 1 second
var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("demo").innerHTML =
    "<ul class='countdown'>" + 
    "<li>" + "<span>" + days + "." + "</span>" + "<p>days</p>" + "</li>" +
    "<li>" + "<span>" + hours + "." + "</span>" + "<p>hours</p>" + "</li>" +
    "<li>" + "<span>" + minutes + "." + "</span>" + "<p>minutes</p>" + "</li>" +
    "<li>" + "<span>" + seconds + "</span>" + "<p>seconds</p>" + "</li>" +
    "</ul>";

    // Countdown over
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "<a class='btnlive' href='stream.php'><i class='heroicon fa-solid fa-video'></i> Watch</a>";
    }
  }, 1000);