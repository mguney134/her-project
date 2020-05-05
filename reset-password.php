<?php
  include 'header.php';

 ?>
 
 <main>
    <div class="container my-5 py-5">
    <?php if($_GET['reset'] == 'no'){ ?>
        
        <div class="alert alert-danger" role="alert">
        You cannot do this without coming from the pasword reset email. If you came from a pasword reset email, please make sure to use the full URL provided.
        </div>

    <?php }?>
    <?php if($_GET['reset'] == 'notmachpass'){ ?>
        
        <div class="alert alert-danger" role="alert">
        Passwords do not match!
        </div>

    <?php }?>
    <?php if($_GET['reset'] == 'lesspass'){ ?>
        
        <div class="alert alert-danger" role="alert">
        Password is less more than 6 character!
        </div>

    <?php }?>
    <?php if($_GET['reset'] == 'nouser'){ ?>
        
        <div class="alert alert-danger" role="alert">
        We couldn't find an account with that email address!
        </div>

    <?php }?>
    <?php if($_GET['reset'] == 'yes'){ ?>
        
        <div class="alert alert-success" role="alert">
        Your password has been changed. You can go to the Home Page to log in.
        </div>

    <?php }?>
          <!--Section: Content-->
          <section class="px-md-5 mx-md-5 text-center white-text grey p-5 z-depth-1"
            style="background-image: url(./images/gradient-register.jpg);" >
      
            <!--Grid row-->
            <div class="row d-flex justify-content-center">

              <!--Grid column-->
              <div class="col-xl-8 col-md-10">

                <div class="container">
                <h3 class="font-weight-bold">Change Your Password</h3>
                  <form action="settings/action.php" method="POST">
                    <div class="form-group">
                      
                      <input type="email" class="form-control" id="formGroupExampleInput" placeholder="E-mail you registered" name="email">
                    </div>
                    
                    <div class="form-group">
                      
                      <input type="password" class="form-control" id="formGroupExampleInput" placeholder="New Password" name="all_password">
                    </div>

                    <div class="form-group">
                      
                      <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Confirm New Password" name="confirmpassword">
                    </div>
                    <input hidden type="text" id="defaultForm-pass" value="<?php echo $_GET['code']; ?>" class="form-control validate" name="resetpasscode">
                    <button class="btn btn-primary btn-block" type="submit" name="resetPassword">Reset Password</button>
                  </form>  

                </div>
              
                
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
          </section>
          <!--Section: Content-->
      </div>
    </main>
   



<?php
  include 'footer.php';
?>