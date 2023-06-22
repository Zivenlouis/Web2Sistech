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
              <h4 class="card-title">Add Events</h4>
              <p class="card-description"> Horizontal form layout </p>
              <form class="forms-sample" method="post" action=""  enctype="multipart/form-data">
                <div class="form-group row">
                  <label for="eventTitle" class="col-sm-3 col-form-label">Event Title</label>
                  <div class="col-sm-9">
                    <input type="text" name="title" value="" class="form-control" id="eventTitle" placeholder="Title" style="color: #ffff">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="eventDescription" class="col-sm-3 col-form-label">Event Description</label>
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
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
              </form>
            </div>
          </div>
          <br>
          <div class="table-responsive">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Events Admin</h4>
                <p class="card-description"> 
                  <form>
                    
                  </form>  
              
                </p>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Events Title</th>
                        <th>Events Description</th>
                        <th>Events Image</th>
                        <th>Date Created</th>
                        <th>Last Modified</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                     
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
