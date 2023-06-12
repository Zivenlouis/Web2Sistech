<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile</title>
    <?php require_once("Layout/head.php"); ?>
    <link rel="stylesheet" href="Style/mainProfile.css">
  </head>
  <body>
    <div class="background">
      <div class="eclipse1"></div>
      <div class="eclipse2"></div>
      <div class="eclipse3"></div>
      <div class="eclipse4"></div>
      <div class="eclipse5"></div>
      <div class="eclipse6"></div>
    </div>

    <?php require_once("Layout/header.php"); ?>
    <main>
      <div class="continue1-content">
        <p>PROFILE</p>
      </div>
      <div class="continue5-content">
        <h2>GOVERNING BODY</h2>
      </div>
      <div class="container3">
        <p>HMPSSI 2022/2023</p>
      </div>
      <div class="Governing-body">
        <div class="Gbody">
          <img src="Image/HMPSSI/jian-hmpssi.png" />
        </div>
        <div class="Gbody">
          <img src="Image/HMPSSI/wilbert-hmpssi.png" />
        </div>
        <div class="Gbody">
          <img src="Image/HMPSSI/vellyn-hmpssi.png" />
        </div>
      </div>
      <div class="continue5-content">
        <h2>INTERNAL RELATIONS</h2>
      </div>
      <div class="container3">
        <p>HMPSSI 2022/2023</p>
      </div>
      <div class="Governing-body">
        <div class="Gbody">
          <img src="Image/HMPSSI/brian-hmpssi.png" />
        </div>
        <div class="Gbody">
          <img src="Image/HMPSSI/gilbert-hmpssi.png" />
        </div>
      </div>
      <div class="continue5-content">
        <h2>EXTERNAL RELATIONS</h2>
      </div>
      <div class="container3">
        <p>HMPSSI 2022/2023</p>
      </div>
      <div class="Governing-body">
        <div class="Gbody">
          <img src="Image/HMPSSI/karen-hmpssi.png" />
        </div>
        <div class="Gbody">
          <img src="Image/HMPSSI/jovin-hmpssi.png" />
        </div>
      </div>
      <div class="continue5-content">
        <h2>COMMUNICATION MEDIA AND INFORMATION</h2>
      </div>
      <div class="container3">
        <p>HMPSSI 2022/2023</p>
      </div>
      <div class="Governing-body">
        <div class="Gbody">
          <img src="Image/HMPSSI/jodie-hmpssi.png" />
        </div>
        <div class="Gbody">
          <img src="Image/HMPSSI/vinson-hmpssi.png" />
        </div>
        <div class="Gbody">
          <img src="Image/HMPSSI/kimberly-hmpssi.png" />
        </div>
      </div>
      <div class="continue7-content">
        <h2>GOVERNING BODY</h2>
      </div>
      <div class="container3">
        <p>HMPSIF 2022/2023</p>
      </div>
      <div class="Governing-body2">
        <div class="Gbody">
          <img src="Image/HMPSIF/irwanto-hmptif.png" />
        </div>
        <div class="Gbody">
          <img src="Image/HMPSIF/vincent-hmptif.png" />
        </div>
        <div class="Gbody">
          <img src="Image/HMPSIF/etthanne-hmptif.png" />
        </div>
      </div>
      <div class="continue7-content">
        <h2>PUBLIC RELATIONS</h2>
      </div>
      <div class="container3">
        <p>HMPSIF 2022/2023</p>
      </div>
      <div class="Governing-body2">
        <div class="Gbody">
          <img src="Image/HMPSIF/elvina-hmptif.png" />
        </div>
        <div class="Gbody">
          <img src="Image/HMPSIF/darren-hmptif.png" />
        </div>
        <div class="Gbody">
          <img src="Image/HMPSIF/ziven-hmptif.png" />
        </div>
      </div>
      <div class="continue7-content">
        <h2>IT DEVELOPMENT</h2>
      </div>
      <div class="container3">
        <p>HMPSIF 2022/2023</p>
      </div>
      <div class="Governing-body2">
        <div class="Gbody">
          <img src="Image/HMPSIF/kingky-hmptif.png" />
        </div>
        <div class="Gbody">
          <img src="Image/HMPSIF/cecilia-hmptif.png" />
        </div>
        <div class="Gbody">
          <img src="Image/HMPSIF/felic-hmptif.png" />
        </div>
      </div>
      <div class="continue7-content">
        <h2>COMMUNICATION MEDIA AND INFORMATION</h2>
      </div>
      <div class="container3">
        <p>HMPSIF 2022/2023</p>
      </div>
      <div class="Governing-body2">
        <div class="Gbody">
          <img src="Image/HMPSIF/celine-hmptif.png" />
        </div>
        <div class="Gbody">
          <img src="Image/HMPSIF/fredo-hmptif.png" />
        </div>
      </div>
    </main>
    <?php require_once("Layout/footer.php");?>

  </body>
</html>
<script>
  function toggleContent(section) {
    var sectionBody = document.getElementById(section + "-body");
    var button = sectionBody.previousElementSibling.children[1];
    if (sectionBody.style.display == "none") {
      sectionBody.style.display = "block";
      button.innerHTML = "-";
    } else {
      sectionBody.style.display = "none";
      button.innerHTML = "+";
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

</script>
