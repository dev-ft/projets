
var gTimer = 10
var ginterval;

function countdown10s() {

    // Update the count down every 1 second
    if (!ginterval) {
        ginterval = setInterval(function() {

            // Time calculations for days, hours, minutes and seconds
            var seconds = gTimer--;

            // Display the result in the element with id="countdown"
            document.getElementById("countdown").innerHTML = seconds + "s ";
            if (gTimer < 0) {
                clearInterval(ginterval);
                document.getElementById('h2_send').style.display = "none";
                document.getElementById('countdown').style.display = "none";
                document.getElementById('h2_progress').style.display = "block";
                document.getElementById('loader_flex').style.display = "flex";
                sendSosMail();

            }
        }, 1000);

    }

}

function sendSosMail() {

    var xmlhttp;
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            document.getElementById('popUp_display').style.display = "block";

            document.getElementById('h2_progress').style.display = "none";
            document.getElementById('loader_flex').style.display = "none";

            document.getElementById('h2_send').style.display = "none";
            document.getElementById('h2_received').style.display = "block";

            document.getElementById('p_timer_flex').classList.toggle('cache');
            document.getElementById('sos_send_container').classList.toggle('cache');

            document.getElementById('stopButton').style.display = "none";
            document.getElementById('returnButton').style.display = "block";

        }
    }

    xmlhttp.open("POST", "ajax_sosSend.php");
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send();

}

function stopSos() {
    if (ginterval) {
        clearInterval(ginterval);

        document.getElementById('h2_send').style.display = "none";
        document.getElementById('h2_stop').style.display = "block";

        document.getElementById('countdown').style.display = "none";
        document.getElementById('abort_flex').style.display = "block";

        document.getElementById('stopButton').style.display = "none";
        document.getElementById('returnButton').style.display = "block";
    }
}
