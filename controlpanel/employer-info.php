<?php
include 'employer-header.php';
?>
<div class="col-md-9 mb-4">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs md-tabs nav-justified purple lighten-2" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="employer-info.php" role="tab">
                <i class="fas fa-user pr-2"></i>Info</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="employer-networking.php" role="tab">
                <i class="fas fa-project-diagram pr-2"></i>Networking</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="employer-talents.php" role="tab">
                <i class="fas fa-search pr-2"></i>Talents</a>
        </li>
    </ul>

  <!-- Nav tabs -->

  <!-- Tab panels -->
  <div class="tab-content">
    <!-- Panel 111-Information Starts-->
    <div class="tab-pane fade in show active" id="panel111" role="tabpanel">
      <div class=" py-5 z-depth-1 ">
        <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
          <div class="d-flex flex-row  justify-content-between">
            <h3 class="font-weight-bold text-left">Your Information</h3>
            <button type="button" class="btn btn-sm btn-outline-purple btn-rounded waves-effect" data-toggle="modal" data-target="#changePassword">Change Password</button>
          </div>
          <hr />
          <div class="row my-2">
            <div class="col-3">
              <p class="text-right">Name Lastname</p>
            </div>
            <div class="col-9">
              <p class="border-bottom pb-1">
                <?php echo $employerinfo['firstname'] . " " . $employerinfo['lastname'] ?>&nbsp
              </p>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-3">
              <p class="text-right">Position</p>
            </div>
            <div class="col-9">
              <p class="border-bottom pb-1"><?php echo $employerinfo['position'] ?>&nbsp</p>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-3">
              <p class="text-right">Name of the Company</p>
            </div>
            <div class="col-9">
              <p class="border-bottom pb-1"><?php echo $employerinfo['company'] ?>&nbsp</p>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-3">
              <p class="text-right">Sector</p>
            </div>
            <div class="col-9">
              <p class="border-bottom pb-1"><?php echo $employerinfo['sector'] ?>&nbsp</p>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-3">
              <p class="text-right">Explanation</p>
            </div>
            <div class="col-9">
              <p class="border-bottom pb-1"><?php echo $employerinfo['explanation'] ?>&nbsp</p>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-3">
              <p class="text-right">Link</p>
            </div>
            <div class="col-9">
              <p class="border-bottom pb-1"><?php echo $employerinfo['link'] ?>&nbsp</p>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-3">
              <p class="text-right">Logo</p>
            </div>
            <div class="col-9">
              <p class="border-bottom pb-1"><img src="<?php echo $employerinfo['img'] ?>" height="80" alt="<?php echo $employerinfo['company'] ?> logo" />&nbsp</p>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-3">
              <p class="text-right">E-mail</p>
            </div>
            <div class="col-9">
              <p class="border-bottom pb-1"><?php echo $_SESSION['email'] ?>&nbsp</p>
            </div>
          </div>
          <div class="text-right">
            <div class="text-right">
              <button class="btn btn-purple text-right btn-md" type="button" data-toggle="modal" data-target="#editInfo">
                <i class="fas fa-user-edit mr-1"></i> Edit
              </button>
            </div>
          </div>
        </section>
      </div>
      <!-- Nav tabs -->
    </div>
  </div>
  <!-- Panel 111-Information Ends -->
</div>

<!-- Modal -->
<div class="modal fade" id="editInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-secondary" id="exampleModalLabel">
          You are editing your information
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../settings/action.php" method="POST" enctype="multipart/form-data" data-parsley-validate>
        <div class="modal-body  mx-4">
            <div class="form-row">
              <div class="col">
                <!-- First name -->
                <div class="md-form md-outline Employer my-1">
                  <input type="text" id="firstName" class="form-control" name="firstname" value="<?php echo $employerinfo['firstname'] ?>" />
                  <label for="firstName">First name </label>
                </div>
              </div>
              <div class="col">
                <!-- Last name -->
                <div class="md-form md-outline Employer my-1">
                  <input type="text" id="lastName" class="form-control" name="lastname" value="<?php echo $employerinfo['lastname'] ?>" />
                  <label for="lastName">Last name</label>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <div class="md-form md-outline Employer my-2">
                  <input type="text" id="position" class="form-control" name="position" value="<?php echo $employerinfo['position'] ?>" />
                  <label for="position">Position</label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <div class="md-form md-outline Employer my-2">
                  <input type="text" id="companyName" class="form-control" name="company" value="<?php echo $employerinfo['company'] ?>" />
                  <label for="companyName">Name of the Company</label>
                </div>
              </div>
            </div>
            <div class="form-row ">
              <div class="col-md-12 select-outline Employer">

                <select class="mdb-select md-form md-outline Employer my-2" id="sector2" name="sector">
                  <option selected ><?php echo $employerinfo['sector'] ?></option>
                  <?php
                  $sectorcheck = $db->prepare("SELECT sectors_name FROM sectors");
                  $sectorcheck->execute();
                  
                  while ($sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>
                  <?php } ?>
                </select>
                <label for="sector2">Sector</label>

              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12 select-outline Employer">

                <select class="mdb-select md-form md-outline Employer  my-2" id="num1" name="employees">
                  <option disabled selected ><?php echo $employerinfo['employees'] ?></option>
                  <option value="1-10 employees">1-10 employees</option>
                  <option value="11-50 employees">11-50 employees</option>
                  <option value="51-200 employees">51-200 employees</option>
                  <option value="201-500 employees">201-500 employees</option>
                  <option value="501-1.000 employees">501-1.000 employees</option>
                  <option value="1.001-5.000 employees">1.001-5.000 employees</option>
                  <option value="5001-10.000 employees">5001-10.000 employees</option>
                  <option value="10.001+ employees">10.001+ employees</option>
                </select>
                <label for="num1" class="">Number of employees</label>

              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <div class="md-form md-outline Employer my-2">
                  <textarea id="intro" class="md-textarea active-purple-textarea  form-control" rows="2" name="explanation"><?php echo $employerinfo['explanation'] ?></textarea>
                  <label for="intro">Introduction of your company/Employeranization </label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <div class="md-form md-outline Employer my-2">
                  <input type="text" id="materialContactFormEmail" class="form-control" name="link" value="<?php echo $employerinfo['link'] ?>"/>
                  <label for="materialContactFormEmail" class="font-weight-normal">Link</label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col">

                <div class="file-field">
                  <div class="btn btn-purple btn-sm float-left">
                    <span>Choose files</span>
                    <input type="file" name="img" />
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload Your Logo" value="<?php echo $employerinfo['img'] ?>" />
                  </div>
                </div>

              </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-purple btn-sm" data-dismiss="modal">
            Close
          </button>
          <button type="submit" name="employerupdate" class="btn btn-sm btn-purple">
            Save
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!--Change Password Modal starts-->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePassword" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title purple-text" id="exampleModalLabel">Change your password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../settings/action.php" method="POST">
        <div class="modal-body">
          <div class="row px-1">
            <div class="col">
              <div class="md-form md-outline Employer mb-1 mt-3">
                <input name="password" id="oldPassword" type="password" class="form-control validate" required>
                <label for="oldPassword">Old password</label>
              </div>
            </div>
          </div>

          <div class="row px-1">
            <div class="col">
              <div class="md-form md-outline Employer  my-1">
                <input name="all_password" id="newPassword" type="password" class="form-control validate" required>
                <label for="newPassword">Create new password</label>
              </div>
            </div>
            <div class="col">
              <div class="md-form md-outline Employer  my-1">
                <input name="confirmpassword" id="conPass" type="password" class="form-control" required>
                <label for="conPass">Confirm new password</label>
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-outline-purple" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-sm btn-purple" name="changepassword">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--Change Password Modal ends-->

<?php include 'employer-footer.php'; ?>