<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Events</title>
  <?php require_once("Layout/head.php");?> 
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
  <link rel="stylesheet" href="Style/mainEvent.css">
  </head>
  <body>
    <div class="background">
      <div class="eclipse1"></div>
      <div class="eclipse2"></div>
      <div class="eclipse3"></div>
      <div class="eclipse4"></div>
    </div>

    <?php require_once("Layout/header.php");?>

    <main>
        <div class="container">
            <div class="main-container">
                <div class="top-container">
                    <div class="top-content">
                        <img src="Image/Main/Star.png" alt="">
                        <h1>Events</h1>
                        <img src="Image/Main/Star.png" alt="">
                    </div>
                    <div class="bottom-content">
                        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30"
                        centered-slides="true" autoplay-delay="5500" autoplay-disable-on-interaction="true">
                            <swiper-slide>
                                <img src="Image/Main/Bangkit.png" alt="">
                                <img src="Image/Main/Menara.png" alt="">
                                <img src="Image/Main/BCC.png" alt="">
                            </swiper-slide>
                            <swiper-slide>
                                <img src="Image/Main/DOTS.png" alt="">
                                <img src="Image/Main/Bangkit.png" alt="">
                                <img src="Image/Main/Menara.png" alt="">
                            </swiper-slide>
                            <swiper-slide>
                                <img src="Image/Main/BCC.png" alt="">
                                <img src="Image/Main/DOTS.png" alt="">
                                <img src="Image/Main/Bangkit.png" alt="">
                            </swiper-slide>
                        </swiper-container>
                    </div>
                </div>
                <div class="bottom-container">
                    <button id="details">View Details</button>
                </div>
            </div>
        </div>
        <div class="container-2">
            <div class="container-2-main">
                <div class="card-1">
                    <h1>Bangkit 2023</h1>
                    <div class="round-1"></div>
                    <p>Aim Higher With Bangkit 2023 merupakan program kerja oleh Himpunan Mahasiswa Program Studi Sistem Informasi (HMPSSI) dan Himpunan Mahasiswa Program Studi Informatika (HMPTIF) UPH Kampus Medan yang bertujuan untuk memperkenalkan program MBKM terkhususnya Bangkit untuk mahasiswa/i UPH Kampus Medan...</p>
                    <div class="image"><img class='container-2-image'  src="Image/main/Main-bangkit.png"></div>
                </div>
            </div>
            <div class="container-3-main">
                <div class="card-2">
                    <h1>Menara: Metaverse in Nusantara</h1>
                    <div class="round-2"></div>
                    <p>Menara: Metaverse in Nusantara is an event held by SISTECH to introduce and enrich participants' knowledge about the technology behind Metaverse and the development of Metaverse in Indonesia...</p>
                    <div class="image-2"><img class='container-2-image'  src="Image/main/Main-metanesia.png"></div>
                </div>
            </div>
            <div class="container-2-main">
                <div class="card-1">
                    <h1>Basic Coding Class</h1>
                    <div class="round-1"></div>
                    <p>Techno has been eavesdropping, hearing rumors that some of you are confused on where to start your first coding journey. Therefore, we’re bringing back “Basic Coding Class” as a platform where you can learn about the fundamentals of coding and sharpen your logical skills...</p>
                    <div class="image-1"><img class='container-2-image'  src="Image/main/Main-bcc.png"></div>
                </div>
            </div>
            <div class="container-3-main">
                <div class="card-2">
                    <h1>D.O.T.S. 2022</h1>
                    <div class="round-2"></div>
                    <p>Techno is cordially inviting you to join a thrilling event that we’ve curated wholeheartedly for you guys called “Day of Togetherness and Sharing”! Day of Togetherness and Sharing is an event that will bring all of you together in unity and get to know each other more</p>
                    <div class="image-2"><img class='container-2-image'  src="Image/main/Main-dots.png"></div>
                </div>
            </div>
            <div class="container-6"></div>
        </div>
    </main>
    <?php require_once("Layout/footer.php");?>
    <script src="js/scriptEvents.js"></script>
  </body>
</html>
