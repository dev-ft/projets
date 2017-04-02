/* START function subscribe */
function subscribe(inForm) {
  document.getElementById("error_message").innerHTML='';

  var xmlhttp;
  if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
  else {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {

    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      var err = parseInt(xmlhttp.responseText);

      /* if no errors */
      if (err==0) {
        /* no display for normal form */
        document.getElementById("normal_form").style.display = 'none'
        /* Registration validation display */
        document.getElementById("continue").style.display = 'block'
      } else {
        /* but if there are errors -> we check the possiblities */
        switch (err) {
          /*
          documention -> list of errors:
          0-> no Error
          100-> Query error
          101-> DB Connection impossible
          102-> password and password confirm different or illegal characters
          103-> account already exists
          */
          case 100:
          case 101:
            document.getElementById("error_message").innerHTML='Impossible de se connecter au site, essayez plus tard (err: '+err+')';
          break;
          case 102:
            document.getElementById('password').value='';
            document.getElementById('password_confirm').value='';
            document.getElementById('password').style.border='2px solid #ff4a4a';
            document.getElementById('password').focus();
            document.getElementById("error_message").innerHTML='Les mots de passe ne correspondent pas ou utilise des caractères interdits.';
          break;
          case 103:
            document.getElementById("error_message").innerHTML='Inscription impossible le compte existe déjà.';
          break;
          default:
            document.getElementById("error_message").innerHTML='Unknown error occured: '+err;
        }
      }
    }
  }
  /* END function subscribe */

  var jsonObj = formToJson(inForm.id);
  if (jsonObj) {
    xmlhttp.open("POST","db/db_subscribe.php?infos="+encodeURI(jsonObj),true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send();
  }

  return false;
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
