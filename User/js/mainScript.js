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
