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
                  <input type="text" name="title" value="" class="form-control" id="eventTitle" placeholder="Title" style="color: #ffff">
                </div>
              </div>
              <div class="form-group row">
                <label for="eventDescription" class="col-sm-3 col-form-label">Profile Description</label>
                <div class="col-sm-9">
                  <textarea class="form-control" id="eventDescription" name="description" placeholder="Description" style="color: #ffff"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="eventImage" class="col-sm-3 col-form-label">Image</label>
                <div class="col-sm-9">
                  <input type="file" accept="image/*" name="image" class="" id="eventImage">
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
                      if (isset($_POST['submit'])) {
                        $title = $_POST['title'];
                        $description = $_POST['description'];
                        $image = $_FILES['image']['name'];
                        echo "<tr>";
                        echo "<td>" . $title. "</td>";
                        echo "<td>" . $description. "</td>";
                        echo "<td><img src='path/to/uploaded/images/" . $image . "' class='showDataImg'></td>";
                        echo "</tr>"; 
                      }