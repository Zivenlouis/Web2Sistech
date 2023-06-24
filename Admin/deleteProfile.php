<?php
require_once("php/connection.php");

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM tbl_admin_profile WHERE profile_id = $id";
  if ($conn->query($sql) === true) {
    echo "Profile deleted successfully";
  } else {
    echo "Error deleting profile: " . $conn->error;
  }
}
?>
