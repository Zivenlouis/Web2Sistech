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
          <div class="table-responsive">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Home Admin</h4>
                <?php require_once("php/uploadHome.php"); ?>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Current Data</th>
                        <th>Last Modified</th>
                        <th>Upload</th>
                        <th>Send</th>
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
                          $image = $row['dataImage'];
                          echo "<td><img class='showDataImg' src='../UploadImage/Home/$image' alt='data'></td>";
                          echo "<td>{$row['last_modified']} </td>";
                          ?>
                            <form method="post" action="" enctype="multipart/form-data">
                              <td>
                                <input type='hidden' name='id' value='<?= $row['id'] ?>'>
                                <input type="file" name="image" accept="image/*">
                              </td>
                              <td><input class='btn-primary'style='padding:5px 10px;' type='submit' name='update' value='Update'></td>
                            </form>
                            </tr>
                          <?php
                          $i++;
                        }
                      ?>
                    </tbody>
                    <style>
                       .showDataImg {
                        width: 100px !important;
                        height: 100px !important;
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
    <?php require_once("component/script.php");?>
  </body>
</html>
