<?php
  include 'header.php';

?>
 <main>
 
    <div class="container my-5 py-5">
    
    <?php if($_GET['activation'] == 'yes'){ ?>
        
        <div class="alert alert-success" role="alert">
        Your account has been activated.
        </div>

    <?php }?>
    <?php if($_GET['activation'] == 'no'){ ?>
        
        <div class="alert alert-danger" role="alert">
        You cannot do this without coming from the user activation email. If you came from a user activation email, please make sure to use the full URL provided.
        </div>

    <?php }?>
          <!--Section: Content-->
          <section class="px-md-5 mx-md-5 text-center white-text grey p-5 z-depth-1"
            style="background-image: url(./images/gradient-register.jpg);">
      
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
      
              <!--Grid column-->
              <div class="col-xl-8 col-md-10">
                <div class="container">
                  <form action="settings/action.php" method="POST">
                    <div class="form-group">
                      <label for="formGroupExampleInput">E-mail you registered</label>
                      <input type="email" class="form-control" id="formGroupExampleInput" placeholder="E-mail" name="email">
                    </div>
                    <input hidden type="text" id="defaultForm-pass" value="<?php echo $_GET['code']; ?>" class="form-control validate" name="confirmation">
                    <button class="btn btn-primary btn-block" type="submit" name="userActivate">Activate</button>
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