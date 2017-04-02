/* START function connectIndex */
function indexConnect(inForm) {
  document.getElementById("error_message").innerHTML='';
  showLoader();

  var xmlhttp;
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
  else {
    // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange=function() {

    /* if all goes well */
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {

      var err = parseInt(xmlhttp.responseText);

        /*
          documention -> list of errors:
          0-> no Error
          10-> Query error
          11-> DB Connection impossible
          12-> wrong password
          13-> wrong email
        */

        /*  we check errors possiblities */
        switch (err) {
          case 0:
            // Good login and password
            window.location.href='home.php'
            break;
          case 10:
          case 11:
            document.getElementById("error_message").innerHTML='Impossible de se connecter au site, essayez plus tard (err: '+err+')';
          break;
          case 12:
            document.getElementById('password').value='';
            document.getElementById('password').style.border='2px solid #ff4a4a';
            document.getElementById('password').focus();
            document.getElementById("error_message").innerHTML='Le mot de passe est erroné ou utilise des caractères interdits.';
          break;
          case 13:
            document.getElementById('email').value='';
            document.getElementById('email').style.border='2px solid #ff4a4a';
            document.getElementById('email').focus();
            document.getElementById("error_message").innerHTML='Le courriel est erroné.';
          break;
          default:
            document.getElementById("error_message").innerHTML='Unknown error occured: '+err;
        }
        hideLoader();
      }
    }

  /* END function subscribe */

  var jsonObj = formToJson(inForm.id);
  if (jsonObj) {
    xmlhttp.open("POST","db/db_index.php?infos="+encodeURI(jsonObj),true);
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

function showLoader() {
  document.getElementById('submit').style.display="none";
  document.getElementById('loader').style.display="block";
}

function hideLoader() {
  document.getElementById('loader').style.display="none";
  document.getElementById('submit').style.display="block";
}
