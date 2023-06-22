<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile</title>
    <?php require_once("Layout/head.php"); ?>
    <link rel="stylesheet" href="Style/mainProfile.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  </head>
  <body>
    <!-- <div class="background">
      <div class="eclipse1"></div>
      <div class="eclipse2"></div>
      <div class="eclipse3"></div>
      <div class="eclipse4"></div>
      <div class="eclipse5"></div>
      <div class="eclipse6"></div>
    </div> -->

    <?php require_once("Layout/header.php"); ?>
    <main>
      <div class="profile-container">
        <div class="profile-logo">
          PROFILE
        </div>
        <div class="division-part">
          <div class="division-container">
            <div class="division-name">Governing Body</div>
            <div class="ok-name">hmpssi 2022/2023</div>
            <div class="people-container">
              <div class="people">
                <img src="Image/HMPSSI/jian-hmpssi.png"">
                <img src="Image/HMPSSI/wilbert-hmpssi.png">
                <img src="Image/HMPSSI/vellyn-hmpssi.png">
              </div>
            </div>
          </div>
          <!-- <div class="division-container">
            <div class="division-name">Governing Body</div>
            <div class="ok-name">hmpssi 2022/2023</div>
            <div class="people-container">
              <div class="people">
                <img src="Image/HMPSSI/jian-hmpssi.png"">
                <img src="Image/HMPSSI/wilbert-hmpssi.png">
                <img src="Image/HMPSSI/vellyn-hmpssi.png">
              </div>
            </div>
          </div> -->
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
