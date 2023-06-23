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
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add Profile</h4>
            <p class="card-description"> Profile Data </p>
            <form class="forms-sample" method="post" enctype="multipart/form-data">
              <div class="form-group row">
                <label for="eventTitle" class="col-sm-3 col-form-label">Profile Title</label>
                <div class="col-sm-9">
                  <input type="text" name="title" value="" class="form-control" id="profileTitle" placeholder="Title" style="color: #ffff">
                </div>
              </div>
              <div class="form-group row">
                <label for="eventDescription" class="col-sm-3 col-form-label">Profile Description</label>
                <div class="col-sm-9">
                  <textarea class="form-control" id="profileDescription" name="description" placeholder="Description" style="color: #ffff"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="eventImage" class="col-sm-3 col-form-label">Image 1</label>
                <div class="col-sm-9">
                  <input type="file" accept="image/*" name="image" id="profileImage">
                </div>
              </div>
              <div class="form-group row">
                <label for="eventImage" class="col-sm-3 col-form-label">Image 2</label>
                <div class="col-sm-9">
                  <input type="file" accept="image/*" name="image" id="profileImage">
                </div>
              </div>
              <div class="form-group row">
                <label for="eventImage" class="col-sm-3 col-form-label">Image 3</label>
                <div class="col-sm-9">
                  <input type="file" accept="image/*" name="image" id="profileImage">
                </div>
              </div>
              <div class="form-group row">
                <label for="eventImage" class="col-sm-3 col-form-label">Image 4</label>
                <div class="col-sm-9">
                  <input type="file" accept="image/*" name="image" id="profileImage">
                </div>
              </div>
              <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
              <button class="btn btn-dark">Cancel</button>
            </form>
          </div>
        </div>

        <br>

        <div class="table-responsive">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Profile Admin Page</h4>
              <p class="card-description"> 
                <form>
                  
                </form>  
              </p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Profile Title</th>
                      <th>Profile Description</th>
                      <th>Profile Image</th>
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
                      // while($row = $result->fetch_assoc()) {
                      //   echo "<tr>";
                      //   echo "<td>{$row['event_title']} </td>";
                      //   echo "<td class='event-description'><p>{$row['event_description']}</p></td>";
                      //   $imageSquare = 'data:image/jpeg;base64,' . base64_encode($row['event_square_image']); 
                      //   $imageLong = 'data:image/jpeg;base64,' . base64_encode($row['event_long_image']); 
                      //   echo "<td><img class='showDataImg1' src='{$imageSquare}' alt='data'></td>";
                      //   echo "<td><img class='showDataImg2' src='{$imageLong}' alt='data'></td>";
                      //   echo "<td>{$row['time_created']} </td>";
                      //   echo "<td>{$row['last_modified']} </td>";
                      //   $id = $row['id'];
                  ?>
                    <tr>
                      <form method="post" action="" enctype="multipart/form-data">
                        <td><input class='btn-primary'style='padding:5px 10px;' type='submit' name='<?= "edit".$id ?>' value='Edit'></td>
                        <td><input class='btn-primary'style='padding:5px 10px;' type='submit' name='<?= "delete".$id ?>' value='Delete'></td>
                      </form>
                    </tr>
                    <?php
                      $i++;
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