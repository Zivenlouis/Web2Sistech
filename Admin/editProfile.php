<?php
require_once("php/connection.php");

if(isset($_POST['submit'])){
  $id = $_POST['id'];
  $title = $_POST['title'];
  $description = $_POST['description']; 
  $submittedImage_1 = $_FILES['image-1']['tmp_name'];
  $submittedImage_2 = $_FILES['image-2']['tmp_name'];
  $submittedImage_3 = $_FILES['image-3']['tmp_name'];
  $imageName_1 = uniqid() . '.' . pathinfo($_FILES['image-1']['name'], PATHINFO_EXTENSION);
  $imageName_2 = uniqid() . '.' . pathinfo($_FILES['image-2']['name'], PATHINFO_EXTENSION);
  $imageName_3 = uniqid() . '.' . pathinfo($_FILES['image-3']['name'], PATHINFO_EXTENSION);
  $uploadFolder = '../UploadImage/Profile';
  $destination_1 = $uploadFolder . '/' . $imageName_1;
  $destination_2 = $uploadFolder . '/' . $imageName_2;
  $destination_3 = $uploadFolder . '/' . $imageName_3;
  move_uploaded_file($submittedImage_1, $destination_1);
  move_uploaded_file($submittedImage_2, $destination_2);
  move_uploaded_file($submittedImage_3, $destination_3);
  date_default_timezone_set('Asia/Jakarta');
  $time = date("Y-m-d H:i:s");
  $sql = "UPDATE tbl_admin_profile SET profile_title='$title', profile_description='$description', profile_image_1='$imageName_1',profile_image_2='$imageName_2',profile_image_3='$imageName_3', last_modified='$time' WHERE profile_id='$id'";
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
  $profileImage_1 = $row['profile_image_1'];
  $profileImage_2 = $row['profile_image_2'];
  $profileImage_3 = $row['profile_image_3'];
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
