function validation() {
  let form = document.getElementById("form");
  let email = document.getElementById("email").value;
  let text = document.getElementById("text");
  let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

  if (email.match(pattern)) {
    form.classList.add("valid");
    form.classList.remove("invalid");
    text.innerHTML = "Your Email Address in valid";
    text.style.color = "#00ff00";
  } else {
    form.classList.remove("valid");
    form.classList.add("invalid");
    text.innerHTML = "Please Enter Valid Email Address";
    text.style.color = "#ff0000";
  }

  if (email == "") {
    form.classList.remove("valid");
    form.classList.remove("invalid");
    text.innerHTML = "";
    text.style.color = "#00ff00";
  }
}

function validation2() {
  let pass = document.getElementById("pass").value;
  let retypepass = document.getElementById("pass2").value;
  let text = document.getElementById("text2");
  if (pass.length < 8) {
    text.innerHTML = "Invalid password, minimum length: 8";
    text.style.color = "#ff0000";
  } else if (pass != retypepass) {
    text.innerHTML = "Password does not match";
    text.style.color = "#ff0000";
  } else {
    text.innerHTML = "";
  }
}

function lettersOnlyCheck() {
  let name = document.getElementById("fname").value;
  var regEx = /^[A-Za-z]+$/;
  if (name.match(regEx)) {
    return false;
  }
}
let hamburger = document.getElementById("hamburger");

hamburger.addEventListener("click", function () {
  let nav = document.getElementById("navbar");
  let a = document.getElementsByClassName("nav-item");
  if (nav.style.height == "60px") {
    nav.style.height = "500px";
    for (i = 0; i < a.length; i++) {
      a.item(i).style.display = "block";
    }
    // hamburger.style.paddingBottom = "20px"
  } else {
    nav.style.height = "60px";
    for (i = 0; i < a.length; i++) {
      a.item(i).style.display = "none";
    }
    // hamburger.style.paddingBottom = "0px"
  }
});

let profile = document.getElementById("profile");
let dropdown = document.getElementById("dropdown");
dropdown.style.display = "none";
profile.addEventListener("click", () => {
  let dropdown = document.getElementById("dropdown");
  if (dropdown.style.display == "none") {
    dropdown.style.display = "block";
  } else {
    dropdown.style.display = "none";
  }
});
