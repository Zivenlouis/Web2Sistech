<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register to SISTECH</title>
    <?php require_once("Layout/head.php"); ?>
    <link rel="stylesheet" href="Style/mainRegister.css">
</head>
<body >
    <div class="background">
        <div class="eclipse1"></div>
    </div>
    
    <?php require_once("Layout/header.php"); ?>

    <main>
      <?php require_once("Php/validateRegister.php"); ?>  
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
                  <br>
                  <label class="textregister"for="email">Kelas</label>
                  <br>
                  <input class="inputregister2" type="text" id="kelas" name="kelas" value="" required="required" > <span id="text4"></span>
                  <br>
                  <label class="textregister"for="email">NIM</label>
                  <br>
                  <input class="inputregister2 nim" type="number" id="nim" name="nim" value="" required="required" onkeyup="validation3()"><span id="text3"></span>  
                  <br>
                  <label class="textregister"for="email">Line ID</label>
                  <br>
                  <input class="inputregister2" type="text" id="line" name="line" value="" required="required">
                  <br>
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
    <script src="js/scriptRegister.js"></script>
</body>
</html>
