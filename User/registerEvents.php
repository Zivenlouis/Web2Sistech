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
        <h1 class="text-center fs-1">Event Registration</h1>
        
        <?php
            require("../Admin/php/CRUDevents.php");
            $arr = getActiveEventsToArr(); 
            if(isset($_GET['messageCode'])) {
              $messageCode = $_GET['messageCode'];
              switch($messageCode) {
                case '1':
                  echo "Failed to register";
                  break;
              }
            }
        ?>
        <form method='post' action=''>
            <label for='event'>Select event: </label>
            <select name='event' id='event'>
                <?php 
                    foreach($arr as $item) {
                        $id = $item['id'];
                        $title = $item['event_title'];
                        $selected = '';
                        if($_POST['event'] == $id) $selected = 'selected';
                        echo "<option value='$id' $selected >$title</option>";
                    }
                ?>
            </select>
            <input type='submit' name='submit' value='Go'>
        </form>
        <?php  
          if(isset($_POST['event'])) $id = $_POST['event']; else $id = getEventsToArr()[0]['id'];
          $data = getEventsFromId($id);
        ?>
        <img style="height: 200px"  src="../UploadImage/Events/<?= $data['event_long_image'] ?>">
        <h2><?= $data['event_title'] ?></h2>
        <p><?= $data['event_description'] ?></p>
        <?php $formattedPrice = "Rp " . number_format($data['price'],2,',','.'); ?>
        <p>Price: <?= $formattedPrice ?> </p>
        <form method='post' action='paymentConfirmation.php'>
          <input type='hidden' name='eventId' value='<?= $id ?>'>
          <input type='submit' name='submit' value='Register Now'>
        </form>
    </main>

  </body>
</html>
<style>
    