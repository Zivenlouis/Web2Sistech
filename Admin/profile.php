<!DOCTYPE html>
<html lang="en">
  <head>
  <?php require_once("component/head.php");?>
  </head>
  <style>
    .showDataImg{
      width: 100px !important;
      height: 100px !important;
      border-radius: 0 !important;
    }
    .profile-description p {
      word-wrap: break-word !important;
      white-space:pre-wrap !important;
      line-height: 20px;
      /* height: auto !important; */
      width: 500px !important;
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
</style>

  <body>
    <div class="container-scroller">
      <?php require_once("component/navbar.php");?>
      <div class="main-panel numpang">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Profiles</h4>
              <?php
                  require("php/image.php");
                  require_once("php/CRUDprofile.php");
                  if(isset($_POST['submit'])) {
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    if(isset($_FILES['image_1'])) $image_1= $_FILES['image_1'];
                    if(isset($_FILES['image_2'])) $image_2= $_FILES['image_2'];
                    if(isset($_FILES['image_3'])) $image_3= $_FILES['image_3'];
                  
                    if(isset($_POST['id'])) {
                      $id = $_POST['id'];
                      if(updateProfile($id, $title, $description, $image_1, $image_2, $image_3)) {
                        echo " <p class='successMessage'>Data updated successfully</p>";
                      } else {
                        echo " <p class='errorMessage'>Data update unsuccessful</p>";
                      }
                    } else {                    
                     
                      if(insertProfile($title, $description, $image_1, $image_2, $image_3)) {
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
                    $arr = getProfileFromId($_POST['id']);
                  }
                  

                ?>               
              <form class="forms-sample" method="post" action=""  enctype="multipart/form-data">
                <div class="form-group row">
                  <label for="profileTitle" class="col-sm-3 col-form-label">Profile Title</label>
                  <div class="col-sm-9">
                    <input type="text" required name="title" value="<?php if(isset($arr)) echo $arr['profile_title']; ?>" class="form-control" id="profileTitle" placeholder="Title" style="color: #ffff">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="profileDescription" class="col-sm-3 col-form-label">Profile Description</label>
                  <div class="col-sm-9">
                    <textarea style="height: 50px;" class="form-control" required  id="profileDescription" name="description" placeholder="Description" style="color: #ffff"><?php if(isset($arr)) echo $arr['profile_description']; ?></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="profileImage" class="col-sm-3 col-form-label">Image 1</label>
                  <div class="col-sm-9">
                    <?php 
                      if(isset($arr)) {
                        $image_1 = $arr['profile_image_1'];
                        $id = $_POST['id'];
                        echo "<input type='hidden' name='id' value='$id'>";
                        echo "<img style='width: 150px;  margin-right: 10px;' src='../UploadImage/Profile/$image_1'>";
                      }
                    ?>
                    <input type="file" accept="image/*" name="image_1" class="" id="profileImage">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="profileImage" class="col-sm-3 col-form-label">Image 2</label>
                  <div class="col-sm-9">
                    <?php 
                      if(isset($arr)) {
                        $image_2 = $arr['profile_image_2'];
                        echo "<img style='height: 150px; margin-right: 10px;' src='../UploadImage/Profile/$image_2'>";
                      }
                    ?>
                    <input type="file" accept="image/*" name="image_2" class="" id="profileImage">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="profileImage" class="col-sm-3 col-form-label">Image 3</label>
                  <div class="col-sm-9">
                    <?php 
                      if(isset($arr)) {
                        $image_3 = $arr['profile_image_3'];
                        echo "<img style='height: 150px; margin-right: 10px;' src='../UploadImage/Profile/$image_3'>";
                      }
                    ?>
                    <input type="file" accept="image/*" name="image_3" class="" id="profileImage">
                  </div>
                </div>
                <input type="submit" class="btn btn-primary mr-2" name="submit" value="Submit">              
                <a href="" class="btn btn-dark">Cancel</a>
              </form>
            </div>
          </div>
          <br>
          <div class="card" style="box-sizing:border-box">
              <div class="card-body">
                <h4 class="card-title">Profile Admin</h4>
                
                <div class="table-responsive table-wrapper"  >
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image 1</th>
                        <th>Image 2</th>
                        <th>Image 3</th>
                        <th>Date Created</th>
                        <th>Last Modified</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $sql = "SELECT * FROM tbl_admin_profile";
                        $result = $conn -> query($sql);
                        $i = 1;
                        while($row = $result->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td>{$row['profile_title']} </td>";
                          echo "<td class='profile_description'><p>{$row['profile_description']}</p></td>";
                          $image_1= $row['profile_image_1']; 
                          $image_2 = $row['profile_image_2']; 
                          $image_3 = $row['profile_image_3']; 
                          if (file_exists("../UploadImage/Profile/{$image_1}")) {
                            echo "<td><img src='../UploadImage/Profile/{$image_1}' class='showDataImg' alt='Profile Image 1'></td>";
                          } else {
                            echo "<td></td>";
                          }
                          if (file_exists("../UploadImage/Profile/{$image_2}")) {
                              echo "<td><img src='../UploadImage/Profile/{$image_2}' class='showDataImg' alt='Profile Image 2'></td>";
                          } else {
                              echo "<td></td>";
                          }
                          if (file_exists("../UploadImage/Profile/{$image_3}")) {
                              echo "<td><img src='../UploadImage/Profile/{$image_3}' class='showDataImg' alt='Profile Image 3'></td>";
                          } else {
                              echo "<td></td>";
                          }
                          echo "<td>{$row['date_created']} </td>";
                          echo "<td>{$row['last_modified']} </td>";
                          $id = $row['id'];
                          ?>
                            <form method="post" action="" enctype="multipart/form-data">
                              
                              <td>
                                <input type='hidden' name='id'  value='<?= $id ?>'>
                                <input class='btn-primary'style='padding:5px 10px;' type='submit' name='edit' value='Edit'>
                              </td>
                              <td><input class='btn-primary'style='padding:5px 10px;' type='submit' name='delete' value='Delete'></td>
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
      <!-- </div> -->
    </div>
    <?php require_once("component/script.php");?>
  </body>
</html>
