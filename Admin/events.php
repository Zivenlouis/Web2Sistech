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
              <h4 class="card-title">Events Admin</h4>
              <p class="card-description"> Horizontal form layout </p>
              <form class="forms-sample">
                <div class="form-group row">
                  <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Username">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password">
                  </div>
                </div>
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Remember me </label>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
              </form>
            </div>
          </div>
          <br>
          <div class="table-responsive">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Current Data</th>
                        <th>Last Modified</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $sql = "SELECT * FROM tbl_admin_home";
                        $result = $conn -> query($sql);
                        $i = 1;
                        while($row = $result->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td>{$row['name']} </td>";
                          $imageData = $row['dataImage'];
                          $imageBase64 = base64_encode($imageData);
                          $imageSrc = 'data:image/jpeg;base64,' . $imageBase64; 
                          echo "<td><img class='showDataImg' src='{$imageSrc}' alt='data'></td>";
                          echo "<td>{$row['last_modified']} </td>";
                          ?>
                            <form method="post" action="" enctype="multipart/form-data">
                              <td><input type="file" name="<?= 'image'.$i ?>" accept="image/*"></td>
                              <td><input class='btn-primary'style='padding:5px 10px;' type='submit' name='<?= "update".$i ?>' value='Update'></td>
                            </form>
                            </tr>
                          <?php
                          $i++;
                        }
                      ?>
                    </tbody>
                    <style>
                       .showDataImg {
                        width: 300px !important;
                        height: 300px !important;
                        border-radius: 0 !important;
                       }

                       .successMessage {
                          color: #3c763d;
                          font-size: 16px;
                       }

                       .errorMessage {
                          color: #a94442;
                          font-size: 16px;
                       }
                    </style>
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
