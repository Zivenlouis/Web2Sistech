<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Event History</title>
    <?php require_once("Layout/head.php"); ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.0/js/buttons.print.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="Style/mainHistory.css">
  </head>
  <body style="margin-top:100px;">
    <div class="background">

    </div>
    <?php require_once("Layout/header.php");?>

    <main>
      <div class="container">
        <h1>Event Participated</h1>
      <table class="table display" style='width: 90vw' id="table">
        <thead>
          <th style='width: 30px'>No</th>
          <th style='width: 200px'>Event</th>
          <th></th>
        </thead>
        <tbody>
            <?php
            $id = $_SESSION['userId'];
            require('../admin/php/CRUDevents.php');
            require('../admin/php/CRUDuser.php'); 
              $i = 1;
              $query = "SELECT * FROM tbl_events_registration WHERE account_id = '$id'";
              $result = $conn -> query($query);
              while($row = $result->fetch_assoc()) {
                $userData = getUserFromId($row['account_id']);
                $eventData = getEventsFromId($row['event_id']);
                $name = $userData['first_name'] . ' ' . $userData['last_name'];
                ?>
                <tr>
                  <td><?=$i?></td>
                  <td><img style='width: 150px; height: 150px' src='../UploadImage/Events/<?= $eventData['event_square_image'] ?>'> </td> 
                  <td><p><?= $eventData['event_title']?></p></td>
              </tr>
                <?php
                $i++;
              }
            ?>
        </tbody>
      </table>
      </div>
    </main>
    <script>
      let table = $('#table').DataTable({
        // "bPaginate": false,
        "searching": false,
        "ordering": false
      });
    </script>
    <script src='js/mainScript.js'> </script>
  </body>
</html>
<style>
    