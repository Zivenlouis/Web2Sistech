<!DOCTYPE html>
<html lang="en">
  <head>
  <?php require_once("component/head.php");?>
  </head>
  <style>
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
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add User</h4>
              <?php
                  require_once("php/CRUDuser.php");
                  if(isset($_POST['edit'])) {
                    $arr = getUserFromId($_POST['id']);
                  } else
                  if(isset($_POST['submit'])) {
                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $email = $_POST['email'];
                    $nim = $_POST['nim'];
                    $class = $_POST['class'];
                    $lineId = $_POST['lineId'];
                    $major = $_POST['major'];
                    $intake = $_POST['intake'];
                    
                    
        
                    if(isset($_POST['id'])) {
                      $id = $_POST['id'];
                      if(updateUser($id, $firstName, $lastName, $email, $nim, $class, $lineId, $major, $intake)) {
                        echo " <p class='successMessage'>Data updated successfully</p>";
                      } else {
                        echo " <p class='errorMessage'>Data update unsuccessful</p>";
                      }
                      unset($_POST['id']);
                    } else {                    
                     
                      if(insertUser($firstName, $lastName, $email, $nim, $class, $lineId, $major, $intake)) {
                        echo " <p class='successMessage'>Data inserted successfully</p>";
                      } else {
                        echo " <p class='errorMessage'>Data insertion unsuccessful</p>";
                      }
                    }
                  } 
                  else if (isset($_POST['delete'])) {
                    if (deleteUser($_POST['id'])) {
                      echo " <p class='successMessage'>Data deleted successfully</p>";
                    } else {
                      echo " <p class='errorMessage'>Data deletion unsuccessful</p>";
                    }
                    unset($_POST['id']);
                  }
                  

                ?>               
              <form class="forms-sample" method="post" action="">
                <div class="form-group row">
                  <label for="firstName" class="col-sm-3 col-form-label">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" required name="firstName" value="<?php if(isset($arr)) echo $arr['first_name']; ?>" class="form-control" id="firstName" placeholder="First Name" style="color: #ffff">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="lastName" class="col-sm-3 col-form-label">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" required name="lastName" value="<?php if(isset($arr)) echo $arr['last_name']; ?>" class="form-control" id="lastName" placeholder="Last Name" style="color: #ffff">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="text" required name="email" value="<?php if(isset($arr)) echo $arr['email']; ?>" class="form-control" id="email" placeholder="Email" style="color: #ffff">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                  <div class="col-sm-9">
                    <input type="text" required name="nim" value="<?php if(isset($arr)) echo $arr['nim']; ?>" class="form-control" id="nim" placeholder="NIM" style="color: #ffff">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="class" class="col-sm-3 col-form-label">Class</label>
                  <div class="col-sm-9">
                    <input type="text" required name="class" value="<?php if(isset($arr)) echo $arr['class']; ?>" class="form-control" id="class" placeholder="Class" style="color: #ffff">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="lineId" class="col-sm-3 col-form-label">Line ID</label>
                  <div class="col-sm-9">
                    <input type="text" required name="lineId" value="<?php if(isset($arr)) echo $arr['line_id']; ?>" class="form-control" id="lineId" placeholder="Line ID" style="color: #ffff">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="major" class="col-sm-3 col-form-label">Major</label>
                  <div class="col-sm-9">
                    <input type="text" required name="major" value="<?php if(isset($arr)) echo $arr['major']; ?>" class="form-control" id="major" placeholder="Major" style="color: #ffff">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="intake" class="col-sm-3 col-form-label">Intake</label>
                  <div class="col-sm-9">
                    <input type="text" required name="intake" value="<?php if(isset($arr)) echo $arr['intake']; ?>" class="form-control" id="intake" placeholder="Intake" style="color: #ffff">
                  </div>
                </div>
                <?php if(isset($_POST['id'])) { ?>
                <input type='hidden' name='id' value='<?= $_POST["id"]?>'>
                <?php } ?>
                <input type="submit" class="btn btn-primary mr-2" name="submit" value="Submit">              
                <a href="" class="btn btn-dark">Cancel</a>
                
              </form>
            </div>
          </div>
          <br>
          <!-- <div class="table-responsive"> -->
          <div class="card" style="box-sizing:border-box">
           
            
              <div class="card-body">
                <h4 class="card-title">User Admin</h4>
                    
                <div class="table-responsive table-wrapper"  >
                  <table class="table display" id="table">
                    <thead>
                      <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>NIM</th>
                        <th>Class</th>
                        <th>Line ID</th>
                        <th>Major</th>
                        <th>Intake</th>
                        <!-- <th>Date Created</th>
                        <th>Last Modified</th>     -->
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $sql = "SELECT * FROM tbl_admin_user";
                        $result = $conn -> query($sql);
                        $i = 1;
                        while($row = $result->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td>{$row['first_name']} </td>";
                          echo "<td>{$row['last_name']} </td>";
                          echo "<td>{$row['email']} </td>";
                          echo "<td>{$row['nim']} </td>";
                          echo "<td>{$row['class']} </td>";
                          echo "<td>{$row['line_id']} </td>";
                          echo "<td>{$row['major']} </td>";
                          echo "<td>{$row['intake']} </td>";
                          // echo "<td>{$row['time_created']} </td>";
                          // echo "<td>{$row['last_modified']} </td>";
                          $id = $row['id'];
                          ?>
                            <form method="post" action="">
                              
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
    </div>
    <?php require_once("component/script.php");?>
  </body>
</html>
<script>
    
</script>