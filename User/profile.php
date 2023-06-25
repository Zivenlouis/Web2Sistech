<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile</title>
    <?php require_once("Layout/head.php"); ?>
    <link rel="stylesheet" href="Style/mainProfile.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

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
          SISTECH PROFILE
        </div>
        <div class="division-part">
          <?php
            require_once("php/connection.php");
            $sql = "SELECT * FROM tbl_admin_profile";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $profileTitle = $row['profile_title'];
                $profileDescription = $row['profile_description'];
                $profileImage1 = $row['profile_image_1'];
                $profileImage2 = $row['profile_image_2'];
                $profileImage3 = $row['profile_image_3'];
                $profileImage4 = $row['profile_image_4'];
                ?>
                <div class="division-container">
                  <div class="division-name fs-1 text"><?php echo $profileTitle; ?></div>
                  <div class="ok-name"><?php echo $profileDescription; ?></div>
                  <div class="people-container">
                    <div class="people">
                      <img src="../UploadImage/Profile/<?php echo $profileImage1; ?>">
                      <img src="../UploadImage/Profile/<?php echo $profileImage2; ?>">
                      <img src="../UploadImage/Profile/<?php echo $profileImage3; ?>">
                      <img src="../UploadImage/Profile/<?php echo $profileImage4; ?>">
                    </div>
                  </div>
                </div>
                <?php
              }
            }
          ?>
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
