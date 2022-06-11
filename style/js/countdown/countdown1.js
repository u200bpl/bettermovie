// COUNTDOWN TIMER++
var countDownDate = new Date("Jun 11, 2022 15:50:00").getTime();

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
      document.getElementById("demo").innerHTML =
      "<ul class='countdown'>" + 
      "<li>" + "<span>" + days + "." + "</span>" + "<p>days</p>" + "</li>" +
      "<li>" + "<span>" + hours + "." + "</span>" + "<p>hours</p>" + "</li>" +
      "<li>" + "<span>" + minutes + "." + "</span>" + "<p>minutes</p>" + "</li>" +
      "<li>" + "<span>" + seconds + "</span>" + "<p>seconds</p>" + "</li>" +
      "</ul>" + "<a class='btnlive' href='stream.php'><i class='heroicon fa-solid fa-video'></i> Watch</a>";
    }
}, 1000);