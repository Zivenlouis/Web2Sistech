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

  <?php require_once("Layout/header.php");?>

  <main>
    <div class="continue1-content">
      <p>About Us</p>
    </div>
    <div class="continue2-content">
      <img src="Image/Main/Sistech logo.png" />
    </div>

    <?php
    // Connect to your database and fetch the dynamic content
    // Replace the database credentials with your own
    $host = 'localhost';
    $username = 'your_username';
    $password = 'your_password';
    $database = 'your_database';

    $connection = mysqli_connect($host, $username, $password, $database);

    if (!$connection) {
      die("Failed to connect to database: " . mysqli_connect_error());
    }

    // Fetch the dynamic content from the database
    $query = "SELECT * FROM about_content";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $image = $row['image'];
        $description = $row['description'];

        // Output the dynamic content
        echo '
          <div class="continue3-content">
            <div class="ccon3-1">
              <img src="'.$image.'" />
            </div>
            <div class="ccon3-2">
              <div class="ccon3-2-1">
                <h1>'.$title.'</h1>
              </div>
              <div class="ccon3-2-2">
                <p>'.$description.'</p>
              </div>
            </div>
          </div>
        ';
      }
    }

    // Close the database connection
    mysqli_close($connection);
    ?>

    <div class="content-box">
      <div class="header">
        <h1>Vision</h1>
        <button class="toggle-button" onclick="toggleContent('vision')">-</button>
      </div>
      <div class="body" id="vision-body">
        <div class="continue5-content">
          <h1>BETTER TOGETHER</h1>
        </div>
        <div class="continue5-content2">
          <p>
            Menjadikan HMPSSI sebagai wadah mahasiswa/i berkumpul dan
            beraspirasi guna meningkatkan potensi mahasiswa/i program studi
            Sistem Informasi baik dalam bidang akademik maupun non-akademik
            dengan melaksanakan program kerja yang unggul dan berkualitas.
          </p>
        </div>
      </div>
    </div>
    <div class="content-box">
      <div class="header">
        <h1>Mission</h1>
        <button class="toggle-button" onclick="toggleContent('mission')">-</button>
      </div>
      <div class="body" id="mission-body">
        <div class="continue5-content">
          <h1>FIT</h1>
        </div>
        <div class="continue5-content2">
          <table>
            <tr>
              <td width="2%">1.</td>
              <td width="15%">Facilitate</td>
              <td width="5%">:</td>
              <td>
                Menyediakan wadah bagi mahasiswa/i melalui kesempatan
                bertumbuh dan berkembang guna menumbuhkan pribadi yang aktif,
                berkompeten dan berkarakter.
              </td>
            </tr>
            <tr>
              <td width="2%">2.</td>
              <td width="15%">Inspire</td>
              <td width="5%">:</td>
              <td>
                Menginspirasi mahasiswa/i untuk mencari dan mengembangkan
                minat dan bakatnya masing-masing melalui program kerja yang
                membina, eksploratif dan informatif.
              </td>
            </tr>
            <tr>
              <td width="2%">3.</td>
              <td width="15%">Togetherness</td>
              <td width="5%">:</td>
              <td>
                Menjalin hubungan baik antar organisasi di dalam, di luar UPH
                maupun antar mahasiswa/i program studi Sistem Informasi.
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <?php
    // Connect to your database again if needed to fetch more dynamic content
    // Fetch and output the additional dynamic content here
    ?>

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
