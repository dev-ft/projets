function emailSend(inForm) {
  var mailtf = document.getElementById('email');
  if (!mailtf || mailtf.value.length <= 0) {
    return false;
  }

  var xmlhttp;
  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

      var err = this.responseText;

      if (err=='0') {
        closeInvit();
        alert("Merci ! Votre invitation a bien été envoyée.");
      } else {
        alert("Une erreur est survenue.");
      }
    }
  }

  var jsonObj = formToJson(inForm.id);
  if (jsonObj) {
    xmlhttp.open("POST","ajax_invit.php?infos="+encodeURI(jsonObj),true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send();
  }
}

function closeInvit() {
  document.getElementById("popUp_display").style.display="none";
  document.getElementById('email').value="";
}

/* Parse a form tag and return all objects */
function formToJson(inFormID) {
  var formObj = document.getElementById(inFormID)
  if (!formObj) {
    return null
  }

  var allInputs = formObj.getElementsByTagName("input")
  var toReturn = {}

  for (var i = 0; i < allInputs.length; i++) {
    var obj = allInputs[i]
    if (obj.name) {
      toReturn[obj.name] = obj.value
    }
  }

  return JSON.stringify(toReturn)
}
