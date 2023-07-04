<!DOCTYPE html>
<html lang="en">
  <head>
  <?php require_once("component/head.php");?>
  </head>
  <style>
    .showDataImg1 {
    width: auto !important;
    height: 100px !important;
    border-radius: 0 !important;
    }

    .sorting {
      text-align: center !important;
    }
    .odd {
      text-align: center !important;
    }
    .even {
      text-align: center !important;
    }
    .odd .about-description {
      text-align: justify !important;
    }
    .even .about-description {
      text-align: justify !important;
    }

    textarea:active {
      color: white !important;
    }
    .about-description p {
      word-wrap: break-word !important;
      white-space:pre-wrap !important;
      line-height: 20px;
      /* height: auto !important; */
      width: 300px !important;
    } 

    .showDataImg2 {
    width: auto !important;
    height: 100px !important;
    border-radius: 0 !important;
    }

    .successMessage {
      color: #3c763d !important;
      font-size: 16px;
    }

    .errorMessage {
      color: #a94442 !important;
      font-size: 16px;
    }

    @media screen and (min-width: 1000px) {
      .numpang {
        width: 85% !important;
      }
      
    }

    label select option {
      color: black !important;
    }

    .main-panel * {
      color: white;
    }
    .form-control[readonly] {
    background-color: inherit;
    color: inherit;
    cursor: not-allowed !important;
    }
</style>

  <body>
    <div class="container-scroller">
      <?php require_once("component/navbar.php");?>
      
      <div class="main-panel numpang">
      <div class="content-wrapper">
         
              <?php
                  require("php/image.php");
                  require_once("php/CRUDabout.php");
    
                  if(isset($_POST['edit'])) {
                    $id = $_POST['id'];
                    $arr = getAboutsFromId($_POST['id']);
                  
                  

                ?>               
              <div class="card">
              <div class="card-body">
              <h4 class="card-title">Edit About</h4>
              <form class="forms-sample" method="post" action=""  enctype="multipart/form-data">
              <div class="form-group row">
                  <label for="aboutTitle" class="col-sm-3 col-form-label">Name</label>
                  <div class="col-sm-9">
                    <input type="text" required name="title" value="<?php if(isset($arr)) echo $arr['name'];             ?>" class="form-control" id="aboutTitle" placeholder="Title" style="color: #ffff" readonly>
                </div>
            </div>
              <?php 
              $id = $_POST['id'];
              echo "<input type='hidden' name='id' value='$id'>";
              if($arr['about_title'] != '') { ?> 
              <div class="form-group row">
                  <label for="aboutTitle" class="col-sm-3 col-form-label">About Title</label>
                  <div class="col-sm-9">
                    <input type="text" required name="title" value="<?= $arr['about_title']; ?>" class="form-control" id="aboutTitle" placeholder="Title" style="color: #ffff">
                  </div>
                </div>
              <?php } 
              if($arr['about_content'] != '') { ?> 
                <div class="form-group row">
                  <label for="aboutDescription" class="col-sm-3 col-form-label">About Description</label>
                  <div class="col-sm-9">
                    <textarea style="height: 200px; color :#fff" class="form-control" required  id="aboutDescription" name="description" placeholder="Description" style="color: #ffff"><?php if(isset($arr)) { $description = str_replace("<br>", "\n", $arr['about_content']); echo $description; }?></textarea>
                  </div>
                </div>
              <?php } 
              if ($arr['about_image'] != '') { ?> 
                <div class="form-group row">
                  <label for="aboutImage" class="col-sm-3 col-form-label">Image</label>
                  <div class="col-sm-9">
                    <?php 
                    $image = $arr['about_image'];
                    echo "<img style='width: auto; height: 150px; margin-right: 10px;' src='../UploadImage/AboutUs/$image'>";
                      
                    ?>
                    <input type="file" accept="image/*" name="image" class="" id="aboutImage">
                  </div>
                </div>
                <?php } ?>
                <input type="submit" class="btn btn-primary mr-2" name="submit" value="Submit">              
                <a href="" class="btn btn-dark">Cancel</a>
                
              </form>
            </div>
          </div>
          <?php } ?>
          <br>
          <!-- <div class="table-responsive"> -->
          <div class="card" style="box-sizing:border-box">
           
            
              <div class="card-body">
                <h4 class="card-title">About Us Admin</h4>
                <?php
                if(isset($_POST['submit'])) {                 
                    $title = "";
                    $description =  "";
                    if(isset($_POST['title'])) $title = $_POST['title']; 
                    if(isset($_POST['description'])) $description = $_POST['description'];
                    $image= $_FILES['image'];
                    if(isset($_POST['id'])) {
                      $id = $_POST['id'];
                      if(updateAbouts($id, $title, $description, $image)) {
                        echo " <p class='successMessage'>Data updated successfully</p>";
                      } 
                         else {
                        echo " <p class='errorMessage'>Data update unsuccessful</p>";
                      }
                    } 
                  }
                  ?>
                
                <div class="table-responsive table-wrapper"  >
                  <table class="table display" id="table">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image</th>                        
                        <th>Last Modified</th>    
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $sql = "SELECT * FROM tbl_admin_about";
                        $result = $conn -> query($sql);
                        $i = 1;
                        while($row = $result->fetch_assoc()) {
                          echo "<tr>";
                          echo"<td>{$row['no_urut']} </td>";
                          echo "<td>{$row['name']} </td>";
                          echo "<td><p>{$row['about_title']}</p></td>";
                          echo "<td class='about-description'><p>{$row['about_content']}</p></td>";
                          $image = $row['about_image']; 
                          echo "<td><img class='showDataImg1' src='../UploadImage/Aboutus/{$image}' alt=''></td>";
                          echo "<td>{$row['last_modified']} </td>";
                          $id = $row['id'];
                          ?>
                            <form method="post" action="" enctype="multipart/form-data">
                              
                              <td>
                                <input type='hidden' name='id'  value='<?= $id ?>'>
                                <input class='btn-primary'style='padding:5px 10px;' type='submit' name='edit' value='Edit'>
                              </td>  
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
      <!-- </div> -->
    </div>
    <?php require_once("component/script.php");?>

  </body>
</html>

