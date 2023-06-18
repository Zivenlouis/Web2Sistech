var myButton = document.getElementById("myButton");

var info1 = document.getElementById("error1");

function clearInfo1() {
  info1.innerHTML = "";
}

function validasiEmail(event) {
  var email = document.getElementById("femail").value;
  var posisi_et = email.indexOf("@");
  var titik = email.indexOf(".");

  if (email == "" || email == null) {
    info1.innerHTML = "Please enter an email";
    return false;
  } else if (
    posisi_et < 1 ||
    titik < posisi_et + 2 ||
    titik + 3 >= email.length
  ) {
    info1.innerHTML = "Email is not valid";
    return false;
  }
  return true;
}

var info2 = document.getElementById("error2");

function clearInfo2() {
  info2.innerHTML = "";
}

function validasi(event) {
  var password1 = document.getElementById("fpassword1").value;
  var password2 = document.getElementById("fpassword2").value;

  if (
    password1 == "" ||
    password1 == null ||
    password2 == "" ||
    password2 == null
  ) {
    info2.innerHTML = "Please enter a password";
    return false;
  } else if (password1.length < 8 || password2.length < 8) {
    info2.innerHTML = "Password must contain at least 8 characters";
    return false;
  } else if (password1 != password2) {
    info2.innerHTML = "Both password must be the same ";
    return false;
  }
  // else
  // {
  //     //database
  // }
  return true;
}
