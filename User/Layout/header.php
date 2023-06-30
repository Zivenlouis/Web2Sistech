<header>
      <?php
        if (isset($_GET['logout'])) {
          session_start();
          session_unset();
          session_destroy();     
          if (isset($_COOKIE['remember_token'])) setcookie('remember_token', "", time() + (30 * 24 * 60 * 60), '/');
        }
        $filename = basename($_SERVER['PHP_SELF']);
      ?>
      <a href="index.php">
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
        <a class="nav-item" href="index.php">
          <div class="header-item">
            <p>Home</p>
            <div class="selected-header" style="display: <?= $filename == 'index.php' ? "block" : "";  ?>"></div>
          </div>
          
        </a>
        <a class="nav-item" href="events.php">
          <div class="header-item">
            <p>Events</p>
            <div class="selected-header" style="display: <?= $filename == 'events.php' ? "block" : "";  ?>"></div>
          </div>
        </a>
        <a class="nav-item" href="about_us.php">
          <div class="header-item">
            <p>About Us</p>
            <div class="selected-header" style="display: <?= $filename == 'about_us.php' ? "block" : "";  ?>"></div>
          </div>
        </a>
        <a class="nav-item" href="profile.php">
          <div class="header-item">
            <p>Profile </p>
            <div class="selected-header" style="display: <?= $filename == 'profile.php' ? "block" : "";  ?>"></div>
          </div>
        </a>

        <a class="nav-item" href="register_events.php">
          <div class="header-item">
            <p>Register</p>
            <div class="selected-header" style="display: <?= $filename == 'register_events.php' ? "block" : "";  ?>"></div>
          </div>
        </a>
          
        <?php
          session_start();
          // echo count($_COOKIE);
          // echo var_dump($_COOKIE); 
          if(isset($_COOKIE['remember_token'])) {
            $token = $_COOKIE['remember_token'];
            require("Php/connection.php");
            $sql = "SELECT * FROM tbl_akun WHERE remember_token='{$token}'";
            $result = $conn -> query($sql);
            if ($row = $result->fetch_assoc()) {
              $_SESSION['email'] = $row['email'];
              $_SESSION['password'] = $row['password'];
              $_SESSION['loggedIn'] = true;
              $_SESSION['firstName'] = $row['first_name'];
            } 
          }


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
            <a class="nav-item" href="sign_in.php">
                <div class="header-item">
                  <p>Sign In </p>
                  <div class="selected-header" style="display: <?= $filename == 'sign_in.php' ? "block" : "";  ?>"></div>
              </div>
            </a>
            <?php
          }
        ?>
            
      </nav>
    </header>