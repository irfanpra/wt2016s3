function onLoad() {
  var vremena = document.getElementsByClassName('vrijeme');
  var currentDate = new Date();
  for(var i = 0; i < vremena.length; i++) {
    var datum = new Date(vremena[i].getAttribute('datetime'));
    var diff = currentDate.getTime() - datum.getTime();
    if (diff < 60*1000) {
      vremena[i].innerHTML = "Prije par sekundi";
    } else if (diff < 60 * 1000 * 60) {
      var minute = Math.floor(diff/60/1000);
      if(minute % 10 > 1 && minute % 10 < 5 && (minute / 10 < 1 || minute / 10 > 2)) {
          vremena[i].innerHTML = "Prije " + minute + " minute";
      } else {
          vremena[i].innerHTML = "Prije " + minute + " minuta";
      }
    } else if (diff < 24 * 60 * 1000 * 60) {
      var sati = Math.floor(diff/60/60/1000);
      if(sati == 1) {
        vremena[i].innerHTML = "Prije 1 sat";
      } else if (sati % 10 > 1 && sati % 10 < 5 && (sati / 10 < 1 || sati / 10 > 2)) {
        vremena[i].innerHTML = "Prije " + sati + " sata";
      } else {
        vremena[i].innerHTML = "Prije " + sati + " sati";
      }
    } else if (diff < 24 * 60 * 1000 * 60 * 7) {
      var dani = Math.floor(diff/24/60/60/1000);
      if(dani == 1) {
        vremena[i].innerHTML = "Prije 1 dan";
      } else {
        vremena[i].innerHTML = "Prije " + dani + " dana";
      }
    } else if (diff < 24 * 60 * 1000 * 60 * 30) {
      var sedmice = Math.floor(diff/24/60/60/1000/7);
      if(sedmice == 1) {
        vremena[i].innerHTML = "Prije 1 sedmicu";
      } else if (sedmice % 10 > 1 && sedmice % 10 < 5 && (sedmice / 10 < 1 || sedmice / 10 > 2)) {
        vremena[i].innerHTML = "Prije " + sedmice + " sedmice";
      } else {
        vremena[i].innerHTML = "Prije " + sedmice + " sedmica";
      }
    } else {
      vremena[i].innerHTML = vremena[i].getAttribute('datetime');
    }
  }
}

function onFilter(select) {
  var option = select;
  var news = document.getElementsByClassName('news');
  var today = new Date();
  switch (option) {
    case 'all':
      for(var i = 0; i < news.length; i++) {
        news[i].style.display = "inline-block";
      }
      break;
    case 'daily':
    for(var i = 0; i < news.length; i++) {
      var datum = new Date(news[i].getElementsByClassName('vrijeme')[0].getAttribute('datetime'));
      var diff = today.getTime() - datum.getTime();
      if(diff<1000*60*60*24) {
        news[i].style.display = "inline-block";
      } else {
        news[i].style.display = "none";
      }
    }
    break;
    case 'weekly':
    for(var i = 0; i < news.length; i++) {
      var datum = new Date(news[i].getElementsByClassName('vrijeme')[0].getAttribute('datetime'));
      var diff = today.getTime() - datum.getTime();
      if(diff<1000*60*60*24*7) {
        news[i].style.display = "inline-block";
      } else {
        news[i].style.display = "none";
      }
    }
    break;
    case 'monthly':
    for(var i = 0; i < news.length; i++) {
      var datum = new Date(news[i].getElementsByClassName('vrijeme')[0].getAttribute('datetime'));
      var diff = today.getTime() - datum.getTime();
      if(diff<1000*60*60*24*30) {
        news[i].style.display = "inline-block";
      } else {
        news[i].style.display = "none";
      }
    }
  }
}

function onSortChanged(thisThing) {
  thisThing.parentElement.submit();
}

function validateCountry(countryCodeField) {
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = function() {
    if(ajax.readyState == 4 && ajax.status == 200) {
      var nekiResponseObjekatNesto = JSON.parse(ajax.response);
      var nizko = [];
      for(var i = 0; i < nekiResponseObjekatNesto.length; i++) {
        nizko.push(nekiResponseObjekatNesto[i].callingCodes);
      }
      document.getElementById("brtel").data = nizko;
      validatePhone(document.getElementById("brtel"));
    } else if (ajax.readyState == 4) {
      document.getElementById("brtel").style.backgroundColor = "red";
      document.getElementById("input").disabled = true;
    }
  }
  ajax.open("GET", "https://restcountries.eu/rest/v1/alpha?codes=" + countryCodeField.value, true);
  ajax.send();
}

function validatePhone(phoneField) {
  var nizko = phoneField.data;
  console.log(nizko);
  if(!nizko) return;
  for(var i = 0; i < nizko.length; i++) {
    console.log(phoneField.value.indexOf(nizko[i]));
    var index = phoneField.value.indexOf(nizko[i]);
    if(index == 0 || index == 1) {
        phoneField.style.backgroundColor = "white";
        document.getElementById("input").disabled = false;
        return;
    }
  }
  phoneField.style.backgroundColor = "red";
  document.getElementById("input").disabled = true;
}

function validateEmail(emailField) {
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(emailField.value)) {
      emailField.style.backgroundColor = "white";
    } else {
      emailField.style.backgroundColor = "red";
    }
}

function validatePassword(passwordField) {
  var re = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
  if(re.test(passwordField.value)) {
    passwordField.style.backgroundColor = "white";
  } else {
    passwordField.style.backgroundColor = "red";
  }
}

function validateConfirm(confirmField) {
  var passwordField = document.getElementById("passwordField");
  if(passwordField.value === confirmField.value) {
    confirmField.style.backgroundColor = "white";
    validatePassword(passwordField);
  } else {
    confirmField.style.backgroundColor = "red";
    passwordField.style.backgroundColor = "red";
  }
}
