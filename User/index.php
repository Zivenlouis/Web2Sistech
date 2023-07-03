<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Welcome to SISTECH</title>
  
    <?php 
    require_once("Layout/head.php");
    
    
    function retrieveImageHome($i) {
      require("Php/connection.php");
      $sql = "SELECT dataImage FROM tbl_admin_home WHERE id='{$i}'";
      $result = $conn -> query($sql);
      if($row = $result->fetch_assoc()) {
        return $row['dataImage'];
      };
      return "fail";
    }?>
    <link rel="stylesheet" href="Style/mainHome.css">
  </head>
  <body>
    


    <div class="background">
      <div class="eclipse1"></div>
      <div class="eclipse2"></div>
      <div class="eclipse3"></div>
      <div class="eclipse4"></div>
      <div class="eclipse5"></div>
      <div class="eclipse6"></div>
      <img class="section1-wave" src="Image/Main/Section1/bg.png" />
      <img class="section1B-wave" src="Image/Main/Section1/bg.png" />
    </div>
    <?php require_once("Layout/header.php");?>
    <main>
      <div class="section1" id="section1A">
        <div class="left-section">
          <p class="white-text">Welcome to</p>
          <p class="gradient-text">SISTECH UPH</p>
          <p class="white-text">Medan Campus</p>
          <a>
            <button class="button-ijo" onclick="gotoSection1B()">
              Explore More
            </button>
          </a>
        </div>
        <div class="right-section">
          <img src="Image/Main/Section1/techno-hi.png" />
        </div>
      </div>

      <div class="section1" id="section1B" style="margin-top: 100px">
        <div class="left-section" style="margin-right: 50px">
          <p class="gradient-text">SISTECH</p>
          <p class="white-text">
            Collaboration between two student organizations.
          </p>
          <p class="gradient-text" style="margin-top: 50px">HMPSSI & HMPSIF</p>
          <p class="white-text">
            On its way to create a better and more fun campuss
          </p>
          <a href="about_us.php">
            <button class="button-org" style="transform: scale(0.8)">
              More About Us
            </button>
          </a>
        </div>
        <div class="right-section">
          <img src="Image/Main/section3.png" />
        </div>
      </div>

      <div class="section2">
        <div class="title-section2"><p>On Going</p></div>
        <div class="content-section2">
          <div class="container">
            <input type="radio" name="slider" id="item-1" checked />
            <input type="radio" name="slider" id="item-2" />
            <input type="radio" name="slider" id="item-3" />
            <div class="cards">
              <label class="card" for="item-1" id="song-1">
                <img src="<?= "../UploadImage/Home/" .retrieveImageHome(1)?>" />
              </label>
              <label class="card" for="item-2" id="song-2">
                <img src="<?= "../UploadImage/Home/" .retrieveImageHome(2)?>" />
              </label>
              <label class="card" for="item-3" id="song-3">
                <img src="<?= "../UploadImage/Home/" .retrieveImageHome(3)?>" />
              </label>
            </div>
          </div>
          <div class="bottom-content-section2">
            <!-- <button id="registerNow" class="button-ijo" style="transform:scale(0.8)">Register Now</button> -->
            <a href="events.php">
              <button
                id="moreDetails"
                class="button-ijo"
                style="transform: scale(0.8)"
              >
                More Details
              </button>
            </a>
          </div>
        </div>
      </div>

      <div class="section3">
        <div class="title-section3"><p>Past Events</p></div>
        <div class="container">
          <input type="radio" name="slider2" id="item-4" checked />
          <input type="radio" name="slider2" id="item-5" />
          <input type="radio" name="slider2" id="item-6" />
          <div class="cards">
            <label class="card" for="item-4" id="song-4">
              <img src="<?= "../UploadImage/Home/" .retrieveImageHome(4)?>" />
            </label>
            <label class="card" for="item-5" id="song-5">
              <img src="<?= "../UploadImage/Home/" .retrieveImageHome(5)?>" />
            </label>
            <label class="card" for="item-6" id="song-6">
              <img src="<?= "../UploadImage/Home/" .retrieveImageHome(6)?>" />
            </label>
          </div>
        </div>
        <a href="events.php">
          <button class="button-ijo" style="margin-top: 0; margin-bottom: 50px">
            More Events
          </button>
        </a>
      </div>
    </main>
    <?php require_once("Layout/footer.php");?>
    <script src="js/scriptHome.js"></script>
  </body>
</html>

