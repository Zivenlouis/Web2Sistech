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
             <h4 class="card-title">Registration Report</h4>  
             <form method='post'>
              <label for='event'>Events:</label>
                <select class='eventsSelect' name='event' id='event'>
                  <option value='all' <?php if(isset($_POST['event']) && $_POST['event']=='all') echo 'selected'?> >All</option>
                  <?php   
                  require('php/CRUDevents.php');
                  require('php/CRUDuser.php'); 
                  $arr = getEventsToArr();              
                  foreach ($arr as $item) {
                    $id = $item['id'];
                    $title = $item['event_title'];
                    $selected = '';
                    if ($_POST['event'] == $id) $selected = 'selected';
                    echo "<option value='$id' $selected >$title</option>";
                  }
                  ?>
                </select>
                <input type='submit' id='go' name='go' value='Go'>
             </form>
             
             <label for='showColumn'>Show Column:</label>
             <input type='checkbox' checked id='showColumn' value='0' style='margin-left: 16px; margin-right: 4px;'>Name
             <input type='checkbox' checked id='showColumn' value='1' style='margin-left: 16px; margin-right: 4px;'>Event Title 
             <input type='checkbox' checked id='showColumn' value='2' style='margin-left: 16px; margin-right: 4px;'>NIM 
             <input type='checkbox' checked id='showColumn' value='3' style='margin-left: 16px; margin-right: 4px;'>Class 
             <input type='checkbox' checked id='showColumn' value='4' style='margin-left: 16px; margin-right: 4px;'>Major 
             <input type='checkbox' checked id='showColumn' value='5' style='margin-left: 16px; margin-right: 4px;'>Intake 
             <input type='checkbox' checked id='showColumn' value='6' style='margin-left: 16px; margin-right: 4px;'>Email 
             <input type='checkbox' checked id='showColumn' value='7' style='margin-left: 16px; margin-right: 4px;'>Line 
             <input type='checkbox' checked id='showColumn' value='8' style='margin-left: 16px; margin-right: 4px;'>Payment Time
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
                      if(isset($_POST['event'])) {
                        $id = $_POST['event'];
                        $selectQuery = '';
                        if($id != 'all') {
                          $selectQuery = "AND event_id='$id'";
                        }
                      }
                      $query = "SELECT * FROM tbl_events_registration WHERE payment_status='Success' $selectQuery";
                      $result = $conn -> query($query);
                      while($row = $result->fetch_assoc()) {
                        $userData = getUserFromId($row['account_id']);
                        $eventData = getEventsFromId($row['event_id']);
                        $name = $userData['first_name'] . ' ' . $userData['last_name'];
                        ?>
                        <tr> 
                        <td><?= $name ?></td>
                        <td><?= $eventData['event_title']?></td>
                        <td><?= $userData['nim'] ?></td>
                        <td><?= $userData['class'] ?></td>
                        <td><?= $userData['major'] ?></td>
                        <td><?= $userData['intake'] ?></td>
                        <td><?= $userData['email'] ?></td>
                        <td><?= $userData['line'] ?></td>
                        <td><?= $row['payment_time'] ?></td>
                        </tr>
                        <?php
                      }
                    ?>
                 </tbody>
               </table>
             
             </div>
           </div>
         </div>
        </div>
      </div>
    </div>
    <script>
      let table = $('#table').DataTable({
        dom: 'lBfrtip',
        buttons: [
          'print', 'copy', 'csv', 'excel', 'pdf'
        ]
      });
      
      $('input[id^="showColumn"]').on('change', function() {
        let columnId = parseInt($(this).val());
        let column = table.column(columnId);
        if ($(this).is(':checked')) {
          column.visible(true);
        } else {
          column.visible(false);
        }
      });


    </script>
    <style>
      .dt-button {
        background-color: white !important;
        border: none !important;
       
      }

      #go {
        color: black;
      }

      .dt-button * {
        color: black;
      }

      #table_length {
        margin-right: 20px;

      }

      .dt-buttons {
        margin-top: 20px;
      }
    </style>
    <?php require_once("component/script.php");?>
  </body>
</html>
