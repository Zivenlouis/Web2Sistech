<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Event Registration</title>
    <?php require_once("Layout/head.php"); ?>
    <link rel="stylesheet" href="Style/mainRegisterEvents.css">
  </head>
  <body style="margin-top:100px; overflow-y:hidden">
    <div class="background">
      <div class="eclipse1"></div>
      <div class="eclipse2"></div>
      <div class="eclipse3"></div>
      <div class="eclipse4"></div>
    </div>

    <?php require_once("Layout/header.php");?>

    <main>
      <div class="container">
        <div class="title">
          <h1 class="text-center fs-1">Event Registration</h1>
        </div>
        <div class="message">
          <?php
            require("../Admin/php/CRUDevents.php");
            $arr = getActiveEventsToArr(); 
            if(isset($_GET['messageCode'])) {
              $messageCode = $_GET['messageCode'];
              switch($messageCode) {
                case '1':
                  echo "Failed to register: Server error";
                  break;
                case '2':
                  echo "Failed to register: Payment gateway error";
                  break;
                case '3':
                  echo "Event successfully registered. Thank you for registering through this website.";
                  break;
              }
            }
          ?>
        </div>
        <div class="form-section">
          <form method='post' action=''>
            <div class="form-group">
              <div class="select-wrapper">
                  <label for='event'>Select Events :</label>
                  <select name='event' id='event'>
                    <?php
                      foreach ($arr as $item) {
                        $id = $item['id'];
                        $title = $item['event_title'];
                        $selected = '';
                        if ($_POST['event'] == $id) $selected = 'selected';
                        echo "<option value='$id' $selected >$title</option>";
                    }
                    ?>
                  </select>
                  <input type='submit' name='submit' value='Go' class="submit-btn">
              </div>
            </div>
          </form>
        </div>
        <div class="event-details">
          <?php  
            if(isset($_POST['event'])) $id = $_POST['event']; else $id = getEventsToArr()[0]['id'];
            $data = getEventsFromId($id);
          ?>
          <div class="event-image">
            <img src="../UploadImage/Events/<?= $data['event_long_image'] ?>">
          </div>
          <div class="event-info">
            <h2><?= $data['event_title'] ?></h2>
            <p><?= $data['event_description'] ?></p>
            <?php $formattedPrice = "Rp " . number_format($data['price'],2,',','.'); ?>
            <p>Price: <?= $formattedPrice ?> </p>
          </div>
        </div>
        <div class="registration-form">
          <form method='post' action='payment_confirmation.php'>
            <div class="registration-group">
              <input type='submit' name='submit' value='Register Here!' class="register-btn">
              <input type='hidden' name='eventId' value='<?= $id ?>'>      
            </div>
            <?php
              if(isset($_SESSION['userId'])) {
                require("php/connection.php");
                $userId = $_SESSION['userId'];
                $query = "SELECT * FROM tbl_events_registration WHERE event_id=$id AND account_id=$userId AND payment_status='Success'";
                if ($result = $conn -> query($query)) {
                  if($result -> fetch_assoc()) {
                    echo "Already registered to this event";
                  } 
                } else {
                  echo $conn -> error;
                }          
              }
            ?>
          </form>                  
        </div>                
      </div>
    </main>

  </body>
</html>
<style>
    