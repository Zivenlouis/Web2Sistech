<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to SISTECH</title>
    <link rel="stylesheet" href="Style/general.css">
    <link rel="stylesheet" href="Style/header.css">
    <link rel="icon" href="Image/favicon.png">
    <link rel="stylesheet" href="Style/footer.css">
    <link rel="stylesheet" href="Style/main.css">
</head>
<body>
    <div class="background">
        <div class="eclipse1"></div>
        <div class="eclipse2"></div>
        <div class="eclipse3"></div>
        <div class="eclipse4"></div>
    </div>
    
    <header>
      <?php
        if (isset($_GET['logout'])) {
          session_start();
          session_unset();
          session_destroy();      
        }
      ?>
      <a href="../Home/index.php">
        <div class="header-logo">
          <img src="Image/Header/logo.png" />

          <p>SISTECH</p>
        </div>
      </a>

      <nav>
        <img class="sistech-logo" src="Image/Header/background.png" />
      </nav>
      <nav id="navbar">
        <img
          class="hamburger"
          id="hamburger"
          src="Image/Header/hamburger.png"
        />
        <a class="nav-item" href="../Home/index.php">
          <div class="header-item">
            <p>Home</p>
            <div class="selected-header"></div>
          </div>
        </a>
        <a class="nav-item" href="../Events/index.php">
          <div class="header-item">
            <p>Events</p>
            <div class="selected-header"></div>
          </div>
        </a>
        <a class="nav-item" href="../About Us/index.php">
          <div class="header-item">
            <p>About Us</p>
            <div class="selected-header"></div>
          </div>
        </a>
        <a class="nav-item" href="../Profile/index.php">
          <div class="header-item">
            <p>Profile</p>
            <div class="selected-header"></div>
          </div>
        </a>
          
        <?php
          session_start();
          if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
            ?>
            <div id="profile" class="nav-item" href="">
              <div class="header-item">
                <p> <?= $_SESSION['firstName']; ?> 
                <div class="dropdown" id="dropdown">
                    <!-- <a href="../Home/index.html">
                        <div class="dropdown-item">Log Out</div>
                    </a> -->
                    <form action="" method="get">
                      <input type='submit' value='Logout' name='logout'>
                    </form>

                </div>
              </div>
            </div>
            <?php
            
            
            
          } else {
            ?>
            <a class="nav-item" href="../Sign In/index.php">
                <div class="header-item">
                  <p>Sign In </p>
                  <div class="selected-header"></div>
              </div>
            </a>
            <?php
          }
        ?>
            
      </nav>
    </header>

    <main>
      <?php
        if(isset($_POST['submit'])) {
          $firstName = $_POST['fname'];
          $lastName = $_POST['lname'];
          $email = $_POST['email'];
          $password = $_POST['pass'];
          require('../mysql.php');
          $conn = getConn();
          $sql = "SELECT * FROM tbl_akun WHERE email='{$email}'";
          $result = $conn -> query($sql);
          if ($row = $result->fetch_assoc()) {
              header("Location: ../Register/index.php?messageCode=1");
          } else {
            $sql = "INSERT INTO tbl_akun (first_name, last_name, email, password) VALUES ('{$firstName}', '{$lastName}', '{$email}', '{$password}')";
            if (mysqli_query($conn, $sql)) {
              header("Location: ../Sign In/index.php?messageCode=3");
            } else {
              header("Location: ../Register/index.php?messageCode=2");
            }
          }
        }

      ?>  
      <div class="bagi50persen">
        
          <div class="mainregister">
              REGISTER
          </div>
          <div class="mainregister2">
              to SISTECH
          </div>
          <p class='error'>
            <?php
              if(isset($_GET['messageCode'])) {
                $code = $_GET['messageCode'];
                if ($code == '1') {
                  echo "Account with that email already exist.";
                } else if ($code =='2') {
                  echo "Something went wrong";
                }
              }
            ?>
          </p>
          <br>
          <br>
          
          <form style="align-items: center;"  id="form" method="post" action="">
              <div class="row">
                  <div class="bagi50persen">
                      <label class="textregister" for="fname">First Name</label>
                      <br>
                      <input class="inputregister" type="text" id="fname" name="fname" value="" required="required" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"> 
                  </div>
                  <div class="bagi50persen">
                      <label class="textregister"for="lname">Last Name</label>
                      <br>
                      <input class="inputregister3" type="text" id="lname" name="lname" value="" required="required" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                  </div>
              </div>
              
              <div class="row">
                  <br>
                  <label class="textregister"for="email">Email</label>
                  <br>
                  <input class="inputregister2" type="text" id="email" name="email" value="" required="required" onkeyup="validation()"><span id="text"></span>  
                  <br>
                  <label class="textregister"for="pass">Password</label>
                  <br>
                  <input class="inputregister2" type="password" id="pass" name="pass" value="" required="required" style="margin-bottom: 40px;" onkeyup="validation2()">  
                  <br>
                  <label class="textregister"for="pass2">Re-enter Password</label>
                  <br>
                  <input class="inputregister2" type="password" id="pass2" name="pass2" value="" required="required" onkeyup="validation2()"><span id="text2"></span>
              </div>
              <div class="row"  style="margin-top: 40px;">
                  <div class="bagi5persen">
                      <input type="checkbox" required="required">
                  </div>
                  <div class="bagi95persen" style="margin-top:-8px;">
                      <font class="fontkhusus">Creating an account means you're okay with our <a href="PDF/sampel.pdf" target="_blank" style="color:blue">Terms of Services, Privacy, Policy</a>, and our default <a href="PDF/sampel.pdf" target="_blank" style="color:blue">Notification Settings</a></a></font>
                  </div>
              </div>
              <div class="row" style="padding-top:100px">
                  
                  <button type="submit" name='submit' class="btn-primary" id="register">Register</button>
              </div>
                
          </form>
      </div>
      <div class="bagi50persen">
          <img src="image/Main/fotorame.png" class="imghilang" style="margin-left:70px;width:95%;opacity: 0.5; border-top-right-radius: 30px; border-bottom-right-radius: 30px;"/>
      </div>

  
    </main>

   
</body>
</html>
<script src="script.js"></script>