<?php 
    require_once 'user/controllers/authController.php';
    require_once 'header.php';
	//verify if user not logged in
	if(!isset($_SESSION['firstname'])){
		header('location: login.php');
		exit();
	}
?>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- MATERIAL DESIGN ICONIC FONT -->
<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
<!-- STYLE CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">
<div class="row flex-lg-nowrap">



  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"></h4>
                    <div class="mt-2">
                      <button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button>
                    </div>
                  </div>
                  <div class="text-center text-sm-right">
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>First Name</label>
                              <input type="text" class="form-control" name="firstname" placeholder="<?php echo $_SESSION['firstname']; ?>" value="">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Lastname</label>
                              <input type="text" class="form-control" name="lastname" value="<?php echo $_SESSION['firstname'];?>">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>Change Password</b></div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Current Password</label>
                              <input type="text" class="form-control" placeholder="<?php echo $_SESSION['password']; ?>">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>New Password</label>
                              <input type="text" class="form-control" name="newPassword" placeholder="">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                              <input type="text" class="form-control" name="confirmPassword" placeholder=""></div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                            <button type="submit" class="btn btn-default" name="update-profile-btn">Submit</button>
                            </div>
                          </div>
                        </div>

                      </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</div>

</body>
</html>
