function disconnect() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            window.location.href = 'index.php';
        }
    };
    xhttp.open('GET', 'ajax_disconnect.php');
    xhttp.send(null);
}

function formToArrayObject(formId) {
    var form = document.getElementById(formId);
    if (!form) {
        return null;
    }
    var toPost = {};
    var allInputs = form.getElementsByTagName('input');
    for (var i = allInputs.length - 1; i >= 0; i--) {
        toPost[allInputs[i].name] = allInputs[i].value;
    }
    allInputs = form.getElementsByTagName('textarea');
    for (var i = allInputs.length - 1; i >= 0; i--) {
        toPost[allInputs[i].name] = allInputs[i].value;
    }

    return toPost;
}

function connect(formId) {

    var toPost = formToArrayObject(formId);
    if (!toPost) {
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            //console.log(this.responseText);
            var infos = JSON.parse(this.responseText);
            if (parseInt(infos.status) === 0) {
                // OK, redirect
                window.location.href = infos.message;
            } else {
                alert(infos.message);
            }

        }
    };
    var postdata = encodeURI(JSON.stringify(toPost));
    xhr.open("POST", 'ajax_connect.php?data=' + postdata);
    xhr.setRequestHeader("Content-type", "application/x-form-urlencoded");
    xhr.send();

}

function postMsg(formId) {
    var toPost = formToArrayObject(formId);
    if (!toPost) {
        return;
    }

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
           var infos = JSON.parse(this.responseText);
            if (parseInt(infos.status) === 0) {
                // OK, redirect
                window.location.href = infos.message;
            } else {
                alert(infos.message);
            }
        }
    };
    var postdata = encodeURI(JSON.stringify(toPost));
    xhttp.open("POST", 'ajax_postMsg.php?data=' + postdata);
    xhttp.setRequestHeader("Content-type", "application/x-form-urlencoded");
    xhttp.send();

}