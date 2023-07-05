<!DOCTYPE html>
<html lang="en">
  <head>
  <?php require_once("component/head.php");?>
  </head>
  <body>
    <div class="container-scroller">
      <?php require_once("component/navbar.php");?>
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="card" style="box-sizing:border-box">
           
            
           <div class="card-body">
             <h4 class="card-title">Registration Report1</h4>         
             <div class="table-responsive table-wrapper"  >
               <table class="table display" id="table">
                 <thead>
                   <tr>
                     <th>Name</th>
                     <th>Event Title</th>
                     <th>NIM</th>
                     <th>Class</th>
                     <th>Major</th>
                     <th>Intake</th>
                     <th>Email</th>
                     <th>Line</th>
                     <th>Payment Time</th>
                   </tr>
                 </thead>
                 <tbody>
                    <?php
                      require('php/CRUDevents.php');
                      require('php/CRUDuser.php'); 
                      $query = "SELECT * FROM tbl_events_registration WHERE payment_status='Success'";
                      $result = $conn -> query($query);
                      while($row = $result->fetch_assoc()) {
                        $userData = getUserFromId($row['account_id']);
                        $eventData = getEventsFromId($row['event_id']);
                        echo "<tr>";
                        $name = $userData['first_name'] . ' ' . $userData['last_name'];
                        echo "<td>$name</td>";
                        echo "</tr>";
                      }
                    ?>
                 </tbody>
               </table>
               <script>
                //  $('#table').DataTable();
               </script>
             </div>
           </div>
         </div>
        </div>
      </div>
    </div>
    <?php require_once("component/script.php");?>
  </body>
</html>
