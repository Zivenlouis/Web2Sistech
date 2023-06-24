<?php
require_once("php/connection.php");

if (isset($_POST['id'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM tbl_admin_profile WHERE profile_id = '$id'";
  $result = $conn->query($sql);
  if($result) {
      header("location:profile.php");
  } else {
      echo "Error deleting profile: " . $conn->error;
  }
}
?>
