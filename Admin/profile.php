<html lang="en">
<head>
  <?php require_once("component/head.php");?>
</head>
<style>
  .showDataImg {
  width: 50px !important;
  height: 50px !important;
  border-radius: 0 !important;
  }
</style>
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
                  <input type="file" accept="image/*" name="image-1" id="profileImage">
                </div>
              </div>
              <div class="form-group row">
                <label for="eventImage" class="col-sm-3 col-form-label">Image 2</label>
                <div class="col-sm-9">
                  <input type="file" accept="image/*" name="image-2" id="profileImage">
                </div>
              </div>
              <div class="form-group row">
                <label for="eventImage" class="col-sm-3 col-form-label">Image 3</label>
                <div class="col-sm-9">
                  <input type="file" accept="image/*" name="image-3" id="profileImage">
                </div>
              </div>
              <div class="form-group row">
                <label for="eventImage" class="col-sm-3 col-form-label">Image 4</label>
                <div class="col-sm-9">
                  <input type="file" accept="image/*" name="image-4" id="profileImage">
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
                      <th>Title</th>
                      <th>Description</th>
                      <th>Image 1</th>
                      <th>Image 2</th>
                      <th>Image 3</th>
                      <th>Image 4</th>
                      <th>Date Created</th>
                      <th>Last Modified</th>
                      <th>Edit Data</th>
                      <th>Delete Data</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    require_once("php/connection.php");
                    if(isset($_POST['submit'])){
                      $title = $_POST['title'];
                      $description = $_POST['description'];
                      $submittedImage_1 = $_FILES['image-1']['tmp_name'];
                      $submittedImage_2 = $_FILES['image-2']['tmp_name'];
                      $submittedImage_3 = $_FILES['image-3']['tmp_name'];
                      $submittedImage_4 = $_FILES['image-4']['tmp_name'];
                      $imageName_1 = uniqid() . '.' . pathinfo($_FILES['image-1']['name'], PATHINFO_EXTENSION);
                      $imageName_2 = uniqid() . '.' . pathinfo($_FILES['image-2']['name'], PATHINFO_EXTENSION);
                      $imageName_3 = uniqid() . '.' . pathinfo($_FILES['image-3']['name'], PATHINFO_EXTENSION);
                      $imageName_4 = uniqid() . '.' . pathinfo($_FILES['image-4']['name'], PATHINFO_EXTENSION);
                      $uploadFolder = '../UploadImage/Profile';
                      $destination_1 = $uploadFolder . '/' . $imageName_1;
                      $destination_2 = $uploadFolder . '/' . $imageName_2;
                      $destination_3 = $uploadFolder . '/' . $imageName_3;
                      $destination_4 = $uploadFolder . '/' . $imageName_4;
                      move_uploaded_file($submittedImage_1, $destination_1);
                      move_uploaded_file($submittedImage_2, $destination_2);
                      move_uploaded_file($submittedImage_3, $destination_3);
                      move_uploaded_file($submittedImage_4, $destination_4);
                      date_default_timezone_set('Asia/Jakarta');
                      $time = date("Y-m-d H:i:s");
                      if(!empty($title) && !empty($description)){
                        $sql = "INSERT INTO tbl_admin_profile(profile_title, profile_description, profile_image_1, profile_image_2, profile_image_3, profile_image_4, data_created, last_modified) VALUES ('$title', '$description', '$imageName_1','$imageName_2', '$imageName_3', '$imageName_4', '$time', '$time')";
                        $result = $conn->query($sql);
                      }
                    }
                      $sql = "SELECT * FROM tbl_admin_profile";
                      $result = $conn->query($sql);
                      while ($row = $result->fetch_assoc()) {
                        $profileTitle = $row['profile_title'];
                        $profileDescription = $row['profile_description'];
                        $profileImage_1 = $row['profile_image_1'];
                        $profileImage_2 = $row['profile_image_2'];
                        $profileImage_3 = $row['profile_image_3'];
                        $profileImage_4 = $row['profile_image_4'];
                        $dateCreated = $row['data_created'];
                        $lastModified = $row['last_modified'];
                        $id = $row['profile_id'];
                        echo "<tr>";
                        echo "<td>{$profileTitle}</td>";
                        echo "<td>{$profileDescription}</td>";
                        if (file_exists("../UploadImage/Profile/{$profileImage_1}")) {
                            echo "<td><img src='../UploadImage/Profile/{$profileImage_1}' class='showDataImg' alt='Profile Image 1'></td>";
                        } else {
                            echo "<td></td>";
                        }
                        if (file_exists("../UploadImage/Profile/{$profileImage_2}")) {
                            echo "<td><img src='../UploadImage/Profile/{$profileImage_2}' class='showDataImg' alt='Profile Image 2'></td>";
                        } else {
                            echo "<td></td>";
                        }
                        if (file_exists("../UploadImage/Profile/{$profileImage_3}")) {
                            echo "<td><img src='../UploadImage/Profile/{$profileImage_3}' class='showDataImg' alt='Profile Image 3'></td>";
                        } else {
                            echo "<td></td>";
                        }
                        if (file_exists("../UploadImage/Profile/{$profileImage_4}")) {
                            echo "<td><img src='../UploadImage/Profile/{$profileImage_4}' class='showDataImg' alt='Profile Image 4'></td>";
                        } else {
                            echo "<td></td>";
                        }
                        echo "<td>{$dateCreated}</td>";
                        echo "<td>{$lastModified}</td>";
                        echo "<td>";
                        echo "<form method='post' action='editProfile.php'>";
                        echo "<input type='hidden' name='id' value='{$id}'>";
                        echo "<button type='submit' class='btn btn-primary'>Edit</button>";
                        echo "</form>";
                        echo "</td>";
                        echo "<td>";
                        echo "<form method='post' action='deleteProfile.php'>";
                        echo "<input type='hidden' name='id' value='{$id}'>";
                        echo "<button type='submit' class='btn btn-primary' onclick='return confirm(\"Are you sure you want to delete this profile?\")'>Delete</button>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";                        
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
