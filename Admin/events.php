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

    textarea:active {
      color: white !important;
    }
    .event-description p {
      word-wrap: break-word !important;
      white-space:pre-wrap !important;
      line-height: 20px;
      /* height: auto !important; */
      width: 500px !important;
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

    @media screen and (min-width: 1000px) {
      .numpang {
        width: 85% !important;
      }
      
    }

    label select option {
      color: black !important;
    }

    .main-panel * {
      color: white;
    }

</style>

  <body>
    <div class="container-scroller">
      <?php require_once("component/navbar.php");?>
      
      <div class="main-panel numpang">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Events</h4>
              <?php
                  require("php/image.php");
                  require_once("php/CRUDevents.php");
                  if(isset($_POST['submit'])) {
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    if(isset($_FILES['squareImage'])) $squareImage= $_FILES['squareImage'];
                    if(isset($_FILES['longImage'])) $longImage = $_FILES['longImage']; 
                    $price = intval($_POST['price']);
                    $active = $_POST['active'];
                    
                    if(isset($_POST['id'])) {
                      $id = $_POST['id'];
                      if(updateEvents($id, $title, $description, $squareImage, $longImage, $price, $active)) {
                        echo " <p class='successMessage'>Data updated successfully</p>";
                      } else {
                        echo " <p class='errorMessage'>Data update unsuccessful</p>";
                      }
                    } else {                    
                     
                      if(insertEvents($title, $description, $squareImage, $longImage, $price, $active)) {
                        echo " <p class='successMessage'>Data inserted successfully</p>";
                      } else {
                        echo " <p class='errorMessage'>Data insertion unsuccessful</p>";
                      }
                    }
                  } 
                  else if (isset($_POST['delete'])) {
                    if (deleteEvents($_POST['id'])) {
                      echo " <p class='successMessage'>Data deleted successfully</p>";
                    } else {
                      echo " <p class='errorMessage'>Data deletion unsuccessful</p>";
                    }
                  }
                  else if(isset($_POST['edit'])) {
                    $arr = getEventsFromId($_POST['id']);
                  }
                  

                ?>               
              <form class="forms-sample" method="post" action=""  enctype="multipart/form-data">
                <div class="form-group row">
                  <label for="eventTitle" class="col-sm-3 col-form-label">Event Title</label>
                  <div class="col-sm-9">
                    <input type="text" required name="title" value="<?php if(isset($arr)) echo $arr['event_title']; ?>" class="form-control" id="eventTitle" placeholder="Title" style="color: #ffff">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="eventDescription" class="col-sm-3 col-form-label">Event Description</label>
                  <div class="col-sm-9">
                    <textarea style="height: 200px;" class="form-control" required  id="eventDescription" name="description" placeholder="Description" style="color: #ffff"><?php if(isset($arr)) echo $arr['event_description']; ?></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="eventPrice" class="col-sm-3 col-form-label">Price</label>
                  <div class="col-sm-9">
                    <input type="number" required name="price" value="<?php if(isset($arr)) echo $arr['price']; ?>" class="form-control" id="eventPrice" placeholder="Price" style="color: #ffff">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="eventPrice" class="col-sm-3 col-form-label">On Going</label>
                  <div class="col-sm-9" style="display: flex; align-items: center">
                    <input type="radio" required name="active" value="1" <?php if(isset($arr) && $arr['active'] == '1') echo " checked "?> id="checkedYes" style="color: #ffff">
                    <label for="checkedYes" style="margin-bottom: 0; margin-right: 20px; margin-left: 10px;">Yes</label>
                    <input type="radio" required name="active" value="0" <?php if(isset($arr) && $arr['active'] == '0') echo " checked "?> id="checkedNo" style="color: #ffff">
                    <label for="checkedNo"  style="margin-bottom: 0; margin-left: 10px;">No</label>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="eventImage" class="col-sm-3 col-form-label">Square Image</label>
                  <div class="col-sm-9">
                    <?php 
                      if(isset($arr)) {
                        $squareImage = $arr['event_square_image'];
                        $id = $_POST['id'];
                        echo "<input type='hidden' name='id' value='$id'>";
                        echo "<img style='width: 150px;  margin-right: 10px;' src='../UploadImage/Events/$squareImage'>";
                      }
                    ?>
                    <input type="file" accept="image/*" name="squareImage" class="" id="eventImage">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="eventImage" class="col-sm-3 col-form-label">Long Image</label>
                  <div class="col-sm-9">
                    <?php 
                      if(isset($arr)) {
                        $longImage = $arr['event_long_image'];
                        echo "<img style='height: 150px; margin-right: 10px;' src='../UploadImage/Events/$longImage'>";
                      }
                    ?>
                    <input type="file" accept="image/*" name="longImage" class="" id="eventImage">
                  </div>
                </div>
                <input type="submit" class="btn btn-primary mr-2" name="submit" value="Submit">              
                <a href="" class="btn btn-dark">Cancel</a>
                
              </form>
            </div>
          </div>
          <br>
          <!-- <div class="table-responsive"> -->
          <div class="card" style="box-sizing:border-box">
           
            
              <div class="card-body">
                <h4 class="card-title">Events Admin</h4>
               
               
                
                <div class="table-responsive table-wrapper"  >
                  <table class="table display" id="table">
                    <thead>
                      <tr>
                        <th>Events Title</th>
                        <th>Events Description</th>
                        <th>Events Small Image</th>
                        <th>Events Long Image</th>
                        <th>Price</th>
                        <th>On Going</th>
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
                          $imageSquare = $row['event_square_image']; 
                          $imageLong = $row['event_long_image']; 
                          echo "<td><img class='showDataImg1' src='../UploadImage/Events/{$imageSquare}' alt='data'></td>";
                          echo "<td><img class='showDataImg2' src='../UploadImage/Events/{$imageLong}' alt='data'></td>";
                        
                          $formattedPrice = "Rp " . number_format($row['price'],2,',','.');
                          echo "<td>{$formattedPrice} </td>";
                          $isActive = $row['active'] == "0" ? "No" : "Yes";
                          echo "<td>{$isActive} </td>";
                          echo "<td>{$row['time_created']} </td>";
                          echo "<td>{$row['last_modified']} </td>";
                          $id = $row['id'];
                          ?>
                            <form method="post" action="" enctype="multipart/form-data">
                              
                              <td>
                                <input type='hidden' name='id'  value='<?= $id ?>'>
                                <input class='btn-primary'style='padding:5px 10px;' type='submit' name='edit' value='Edit'>
                              </td>
                              <td><input class='btn-primary'style='padding:5px 10px;' type='submit' name='delete' value='Delete' onclick="return confirm('Are you sure you want to delete this item?');"></td>
                            </form>
                            </tr>
                          <?php
                          $i++;
                        }
                      ?>
                    </tbody>
                  </table>
                  <script>
                    $('#table').DataTable();
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- </div> -->
    </div>
    <?php require_once("component/script.php");?>

  </body>
</html>

