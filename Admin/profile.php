<html lang="en">
<head>
  <?php require_once("component/head.php");?>
</head>
<style>
  .showDataImg {
  width: 100px !important;
  height: 100px !important;
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
                  <input type="file" accept="image/*" name="image" id="profileImage">
                </div>
              </div>
              <!-- <div class="form-group row">
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
              </div> -->
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
                      $submittedImage = $_FILES['image']['tmp_name'];
                      $imageName = uniqid() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                      $uploadFolder = '../UploadImage/Profile';
                      $destination = $uploadFolder . '/' . $imageName;
                      move_uploaded_file($submittedImage, $destination);
                      date_default_timezone_set('Asia/Jakarta');
                      $time = date("Y-m-d H:i:s");
                      $sql = "INSERT INTO tbl_admin_profile(profile_title, profile_description, profile_image, data_created, last_modified) VALUES ('$title', '$description', '$imageName', '$time', '$time')";
                      $result = $conn->query($sql);
                    }
                      $sql = "SELECT * FROM tbl_admin_profile";
                      $result = $conn->query($sql);
                      while ($row = $result->fetch_assoc()) {
                        $profileTitle = $row['profile_title'];
                        $profileDescription = $row['profile_description'];
                        $profileImage = $row['profile_image'];
                        $dateCreated = $row['data_created'];
                        $lastModified = $row['last_modified'];
                        $id = $row['profile_id'];
                        echo "<tr>";
                        echo "<td>{$profileTitle}</td>";
                        echo "<td>{$profileDescription}</td>";
                        echo "<td><img src='../UploadImage/Profile/{$profileImage}' alt='Profile Image' width='200px'></td>";
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
                        echo "<button type='submit'  class='btn btn-primary' onclick='return confirm(\"Are you sure you want to delete this profile?\")'>Delete</button>";
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
