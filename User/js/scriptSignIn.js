var info = document.getElementById("error");

function clearInfo() {
    info.innerHTML = "";
}

function validasi(event) {
    var email = document.getElementById("semail").value;
    var password = document.getElementById("spassword").value;
    var posisi_et = email.indexOf("@");
    var titik = email.indexOf(".");

    if (email == "" || email == null) {
        info.innerHTML = "Please enter an email";
        return false;
    } else if (posisi_et < 1 || titik < posisi_et + 2 || titik + 3 >= email.length) {
        info.innerHTML = "Email is not valid";
        return false;
    } else if (password == "" || password == null) {
        info.innerHTML = "Please enter a password";
        return false;
    } else if (password.length < 8) {
        info.innerHTML = "Password must contain at least 8 characters";
        return false;
    }
    return true;
}

// function togglePassword(inputId) {
//     var passwordInput = document.getElementById(inputId);
//     if (passwordInput.type === "password") {
//         passwordInput.type = "text";
//     } else {
//         passwordInput.type = "password";
//     }
// }

let hamburger = document.getElementById("hamburger");

hamburger.addEventListener("click", function () {
    let nav = document.getElementById("navbar");
    let a = document.getElementsByClassName("nav-item");

    if (nav.style.height == "60px") {
        nav.style.height = "500px";
        for (i = 0; i < a.length; i++) {
            a.item(i).style.display = "block";
        }
    } else {
        nav.style.height = "60px";
        for (i = 0; i < a.length; i++) {
            a.item(i).style.display = "none";
        }
    }
});