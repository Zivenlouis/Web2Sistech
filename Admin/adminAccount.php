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
              <h4 class="card-title">Add Admin</h4>
              <?php
                  require_once("php/CRUDadmin.php");
                  if(isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $name = $_POST['name'];
                    $password = $_POST['password'];
                    
                    if(isset($_POST['id'])) {
                      $id = $_POST['id'];
                      if(updateAdmin($id, $username, $name, $password)) {
                        echo " <p class='successMessage'>Data updated successfully</p>";
                      } else {
                        echo " <p class='errorMessage'>Data update unsuccessful</p>";
                      }
                    } else {                    
                     
                      if(insertAdmin($id, $username, $name, $password)) {
                        echo " <p class='successMessage'>Data inserted successfully</p>";
                      } else {
                        echo " <p class='errorMessage'>Data insertion unsuccessful</p>";
                      }
                    }
                  } 
                  else if (isset($_POST['delete'])) {
                    if (deleteAdmin($_POST['id'])) {
                      echo " <p class='successMessage'>Data deleted successfully</p>";
                    } else {
                      echo " <p class='errorMessage'>Data deletion unsuccessful</p>";
                    }
                  }
                  else if(isset($_POST['edit'])) {
                    $arr = getAdminFromId($_POST['id']);
                  }
                  

                ?>               
              <form class="forms-sample" method="post" action="">
                <div class="form-group row">
                  <label for="username" class="col-sm-3 col-form-label">Username</label>
                  <div class="col-sm-9">
                    <input type="text" required name="username" value="<?php if(isset($arr)) echo $arr['username']; ?>" class="form-control" id="username" placeholder="Username" style="color: #ffff">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-sm-3 col-form-label">Name</label>
                  <div class="col-sm-9">
                    <input type="text" required name="name" value="<?php if(isset($arr)) echo $arr['name']; ?>" class="form-control" id="name" placeholder="Name" style="color: #ffff">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-sm-3 col-form-label">Password</label>
                  <div class="col-sm-9">
                    <input type="text" required name="password" value="<?php if(isset($arr)) echo $arr['password']; ?>" class="form-control" id="password" placeholder="Password" style="color: #ffff">
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
                <h4 class="card-title">Admin Admin</h4>
                    
                <div class="table-responsive table-wrapper"  >
                  <table class="table display" id="table">
                    <thead>
                      <tr>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Date Created</th>
                        <th>Last Modified</th>    
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $sql = "SELECT * FROM tbl_akun_admin";
                        $result = $conn -> query($sql);
                        $i = 1;
                        while($row = $result->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td>{$row['username']} </td>";
                          echo "<td>{$row['name']} </td>";
                          echo "<td>{$row['password']} </td>";
                          echo "<td>{$row['time_created']} </td>";
                          echo "<td>{$row['last_modified']} </td>";
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
