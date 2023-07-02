<!DOCTYPE html>
<html lang="en">
  <head>
  <title>About Us</title>
    <?php require_once("Layout/head.php"); ?>
    <link rel="stylesheet" href="Style/mainAboutUs.css">
  </head>
  <body>
    <div class="background">
      <div class="eclipse1"></div>
      <div class="eclipse2"></div>
      <div class="eclipse3"></div>
      <div class="eclipse4"></div>
    </div>

    <?php 
      require_once("Layout/header.php");
      function getDataFromId($id) {
          require("php/connection.php");
          $query = "SELECT * FROM tbl_admin_about where id = $id";
          if ($result = $conn -> query($query)) return $result -> fetch_assoc();
          return null;
      }
    ?>

    <main>
      <div class="continue1-content">
        <p>About Us</p>
      </div>
      <div class="continue2-content">
        <?php 
          $arr = getDataFromId(1);
        ?>
        <img src="../UploadImage/Aboutus/<?= $arr['about_image'] ?>" />
      </div>
      <div class="continue3-content">
        <div class="ccon3-1">
        <?php 
          $arr = getDataFromId(2);
        ?>
        <img src="../UploadImage/Aboutus/<?= $arr['about_image'] ?>" />
        </div>
        <div class="ccon3-2">
          <div class="ccon3-2-1">
          <br><h1><?= $arr['about_title'] ?></h1>
          </div>
          <div class="ccon3-2-2">
            <p><?= $arr['about_content'] ?></p><br>
          </div>
        </div>
      </div>

      <div class="continue3-content">
      <?php 
          $arr = getDataFromId(3);
        ?>
        <div class="ccon3-1">
        <img src="../UploadImage/Aboutus/<?= $arr['about_image'] ?>" />
        </div>
        <div class="ccon3-2">
          <div class="ccon3-2-1">
          <br><h1><?= $arr['about_title'] ?></h1>
          </div>
          <div class="ccon3-2-2">
            <p><?= $arr['about_content'] ?></p><br>
          </div>
        </div>
      </div>
      <div class="content-box">
        <?php 
          $arr = getDataFromId(4);
        ?>
        <div class="header">
          <h1>Vision</h1>
          <button class="toggle-button" onclick="toggleContent('vision')">
            -
          </button>
        </div>
        <div class="body" id="vision-body">
          <div class="continue5-content">
            <h1><?= $arr['about_title'] ?></h1>
          </div>
          <div class="continue5-content2">
            <p><?= $arr['about_content'] ?></p><br><br>
          </div>
        </div>
      </div>
      <div class="content-box">
      <?php 
          $arr = getDataFromId(5);
        ?>
        <div class="header">
          <h1>Mission</h1>
          <button class="toggle-button" onclick="toggleContent('mission')">
            -
          </button>
        </div>
        <div class="body" id="mission-body">
          <div class="continue5-content">
            <h1><?= $arr['about_title'] ?></h1>
          </div>
          <div class="continue5-content2">
          <?= $arr['about_content'] ?><br><br>
          </div>
        </div>
      </div>
      <div class="continue3-content">
        <div class="ccon3-1">
        <?php 
          $arr = getDataFromId(6);
        ?>
        <img src="../UploadImage/Aboutus/<?= $arr['about_image'] ?>" />
        </div>
        <div class="ccon3-2">
          <div class="ccon3-2-1">
          <br><h1><?= $arr['about_title'] ?></h1>
          </div>
          <div class="ccon3-2-2">
            <p><?= $arr['about_content'] ?></p>
          </div>
        </div>
      </div>
      <div class="content-box">
      <?php 
          $arr = getDataFromId(7);
        ?>
        <div class="header">
          <h1>Vision</h1>
          <button class="toggle-button" onclick="toggleContent('vision2')">
            -
          </button>
        </div>
        <div class="body" id="vision2-body">
          <div class="continue5-content">
            <h1><?= $arr['about_title'] ?></h1>
          </div>
          <div class="continue5-content2">
            <p><?= $arr['about_content'] ?></p><br><br>
          </div>
        </div>
      </div>
      <div class="content-box">
      <?php 
          $arr = getDataFromId(8);
        ?>
        <div class="header">
          <h1>Mission</h1>
          <button class="toggle-button" onclick="toggleContent('mission2')">
            -
          </button>
        </div>
        <div class="body" id="mission2-body">
          <div class="continue5-content">
            <h1><?= $arr['about_title'] ?></h1>
          </div>
          <div class="continue5-content2">
          <?= $arr['about_content'] ?> <br><br>
          </div>  
        </div>
      </div>
    </main>
    <?php require_once("Layout/footer.php"); ?>
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
</script>
