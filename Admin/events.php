<!DOCTYPE html>
<html lang="en">
  <head>
  <?php require_once("component/head.php");?>
  </head>
  <style>
    .showDataImg1 {
    width: 100px !important;
    height: 100px !important;
    border-radius: 0 !important;
    }

    .event-description p {
      word-wrap: break-word !important;
      white-space:pre-wrap !important;
      /* height: auto !important; */
      width: 300px !important;
    } 

    .showDataImg2 {
    width: auto !important;
    height: 100px !important;
    border-radius: 0 !important;
    }

    .successMessage {
      color: #3c763d;
      font-size: 16px;
    }

    .errorMessage {
      color: #a94442;
      font-size: 16px;
    }
</style>

  <body>
    <div class="container-scroller">
      <?php require_once("component/navbar.php");?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Events</h4>
              <p class="card-description"> Horizontal form layout </p>
              <form class="forms-sample" method="post" action=""  enctype="multipart/form-data">
                <div class="form-group row">
                  <label for="eventTitle" class="col-sm-3 col-form-label">Event Title</label>
                  <div class="col-sm-9">
                    <input type="text" name="title" value="" class="form-control" id="eventTitle" placeholder="Title" style="color: #ffff">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="eventDescription" class="col-sm-3 col-form-label">Event Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" id="eventDescription" name="description" placeholder="Description" style="color: #ffff"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="eventImage" class="col-sm-3 col-form-label">Square Image</label>
                  <div class="col-sm-9">
                    <input type="file" accept="image/*" name="squareImage" class="" id="eventImage">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="eventImage" class="col-sm-3 col-form-label">Long Image</label>
                  <div class="col-sm-9">
                    <input type="file" accept="image/*" name="longImage" class="" id="eventImage">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
              </form>
            </div>
          </div>
          <br>
          <div class="table-responsive">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Events Admin</h4>
                <p class="card-description"> 
                  <form>
                    
                  </form>  
              
                </p>
                <div class="table-responsive table-wrapper">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Events Title</th>
                        <th>Events Description</th>
                        <th>Events Small Image</th>
                        <th>Events Long Image</th>
                        <th>Date Created</th>
                        <th>Last Modified</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $sql = "SELECT * FROM tbl_admin_events";
                        $result = $conn -> query($sql);
                        $i = 1;
                        while($row = $result->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td>{$row['event_title']} </td>";
                          echo "<td class='event-description'><p>{$row['event_description']}</p></td>";
                          $imageSquare = 'data:image/jpeg;base64,' . base64_encode($row['event_square_image']); 
                          $imageLong = 'data:image/jpeg;base64,' . base64_encode($row['event_long_image']); 
                          echo "<td><img class='showDataImg1' src='{$imageSquare}' alt='data'></td>";
                          echo "<td><img class='showDataImg2' src='{$imageLong}' alt='data'></td>";
                          echo "<td>{$row['time_created']} </td>";
                          echo "<td>{$row['last_modified']} </td>";
                          $id = $row['id'];
                          ?>
                            <form method="post" action="" enctype="multipart/form-data">
                              <td><input class='btn-primary'style='padding:5px 10px;' type='submit' name='<?= "edit".$id ?>' value='Edit'></td>
                              <td><input class='btn-primary'style='padding:5px 10px;' type='submit' name='<?= "delete".$id ?>' value='Delete'></td>
                            </form>
                            </tr>
                          <?php
                          $i++;
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
    </div>
    <?php require_once("component/script.php");?>
  </body>
</html>
