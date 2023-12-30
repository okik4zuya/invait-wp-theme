<script>
// Set the date we're counting down to
var countDownDate = new Date('<?php echo get_field('countdown_time'); ?>').getTime();

// Update the count down every 1 second
var x = setInterval(function () {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    if(document.querySelector('#countdown')){
    document.querySelector(".countdown__card .hari").innerHTML = days;
    document.querySelector(".countdown__card .jam").innerHTML = hours;
    document.querySelector(".countdown__card .menit").innerHTML = minutes;
    document.querySelector(".countdown__card .detik").innerHTML = seconds;
    }

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.querySelector(".countdown__timer").innerHTML = "ACARA TELAH BERLALU";
    }
}, 1000);
</script>