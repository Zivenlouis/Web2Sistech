<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Event Registration</title>
    <?php require_once("Layout/head.php"); ?>
    <link rel="stylesheet" href="Style/mainConfirmation.css">
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
      <div class="temp">
        <h1 class="text-center fs-1">Event Registration</h1>
        <?php
            if(empty($_SESSION['loggedIn'])) header("location: sign_in.php");

            require("../Admin/php/CRUDevents.php");
            require("Php/connection.php");
            $eventData = getEventsFromId($_POST['eventId']);
            $userId = $_SESSION['userId'];
            $query = "SELECT * FROM tbl_akun WHERE id='$userId'";
            $result = $conn -> query($query);
            $userData = $result -> fetch_assoc();
        ?>
        <img style='height: 200px;' src="../UploadImage/Events/<?= $eventData['event_long_image'] ?>">
        <table>
        <tr>
          <td class='td-1'>Event name</td> 
          <td class='td-1'>:</td> <td> <?= $eventData['event_title'] ?> </td>
        </tr>
        <tr>
        <td class='td-1'>Name</td> 
        <td class='td-1'>: </td> <td><?= $userData['first_name'] . ' ' . $userData['last_name'] ?> </td>
        </tr>
        <tr>
        <td class='td-1'>NIM </td ><td class='td-1'>:</td> <td> <?= $userData['nim'] ?> </td>
        </tr>
        <tr>
        <td class='td-1'>Class </td><td class='td-1'>:</td> <td> <?= $userData['class'] ?> </td>
        </tr>
        <tr>
        <td class='td-1'>ID Line </td><td class='td-1'>:</td> <td> <?= $userData['line'] ?> </td>
        </tr>
        <?php $formattedPrice = "Rp " . number_format($eventData['price'],2,',','.'); ?>
        <td class='td-1'>Price to pay </td><td class='td-1'>: </td> <td><?= $formattedPrice ?> </td>
        </table>
        <form action='proceed_payment.php' method='post'>                 
          <input type="hidden" name="eventId" value="<?= $eventData['id'] ?>">           
          <input type="hidden" name="userId" value="<?= $userData['id'] ?>">
          <input type='submit' name='submit' value='Proceed to pay' class="payment-btn">
        </form>

      </div>
    </main>
    <script src='js/mainScript.js'> </script>
  </body>
</html>
<style>
    