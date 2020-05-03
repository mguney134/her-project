<?php
  include 'header.php';

 ?>
 
 <main>
    <div class="container my-5 py-5">
    <?php if($_GET['user'] == 'no'){ ?>
        
        <div class="alert alert-danger" role="alert">
        We couldn't find an account with that email address!
        </div>

    <?php }?>
    <?php if($_GET['user'] == 'yes'){ ?>
        
        <div class="alert alert-success" role="alert">
        Password reset link sent to your email.
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
                <h3 class="font-weight-bold">Forgot Password</h3>
                  <form action="settings/action.php" method="POST">
                    <div class="form-group">
                      <label for="formGroupExampleInput">E-mail you registered</label>
                      <input type="email" class="form-control" id="formGroupExampleInput" placeholder="E-mail" name="email">
                    </div>
                    
                    <button class="btn btn-primary btn-block" type="submit" name="forgotPassword">SEND</button>
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