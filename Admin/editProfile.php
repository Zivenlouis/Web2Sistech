<?php
require_once("php/connection.php");

if(isset($_POST['submit'])){
  $id = $_POST['id'];
  $title = $_POST['title'];
  $description = $_POST['description']; 
  $submittedImage = $_FILES['image']['tmp_name'];
  $imageName = uniqid() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
  $uploadFolder = '../UploadImage/Profile';
  $destination = $uploadFolder . '/' . $imageName;
  move_uploaded_file($submittedImage, $destination);
  date_default_timezone_set('Asia/Jakarta');
  $time = date("Y-m-d H:i:s");
  $sql = "UPDATE tbl_admin_profile SET profile_title='$title', profile_description='$description', profile_image='$imageName', last_modified='$time' WHERE profile_id='$id'";
  $result = $conn->query($sql);
  if ($result) {
    header("Location: profile.php");
    exit();
  } else {
    echo "Update failed. Please try again.";
  }
}
  $sql = "SELECT * FROM tbl_admin_profile";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $profileTitle = $row['profile_title'];
  $profileDescription = $row['profile_description'];
  $profileImage = $row['profile_image'];
  $id = $row['profile_id'];
?>

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
            <h4 class="card-title">Edit Profile</h4>
            <p class="card-description"> Edit Profile Data </p>
            <form class="forms-sample" method="post" enctype="multipart/form-data">
              <div class="form-group row">
                <label for="eventTitle" class="col-sm-3 col-form-label">Profile Title</label>
                <div class="col-sm-9">
                  <input type="text" name="title" value="<?php echo $profileTitle; ?>" class="form-control" id="profileTitle" placeholder="Title" style="color: #ffff">
                </div>
              </div>
              <div class="form-group row">
                <label for="eventDescription" class="col-sm-3 col-form-label">Profile Description</label>
                <div class="col-sm-9">
                  <textarea class="form-control" id="profileDescription" name="description" placeholder="Description" style="color: #ffff"><?php echo $profileDescription; ?></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="eventImage" class="col-sm-3 col-form-label">Image 1</label>
                <div class="col-sm-9">
                  <input type="file" accept="image/*" name="image" id="profileImage">
                </div>
              </div>
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>
              <a href="profile.php" class="btn btn-dark">Back</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php require_once("component/script.php");?>
  </div>
</body>
</html>
