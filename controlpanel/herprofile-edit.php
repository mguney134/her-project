<?php
  include 'her-header.php';

?>



        <!-- Tabbed Nav starts -->
        <div class="col-md-9 mb-4">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs nav-justified deep-orange lighten-2" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#panel111" role="tab">
                <i class="fas fa-user pr-2"></i>Info</a>
            </li>

            
          </ul>
          <!-- Nav tabs -->

          <!-- Tab panels -->
          <div class="tab-content">
            <!-- Panel 111-Information Starts-->
            <div class="tab-pane fade in show active" id="panel111" role="tabpanel">
              <div class="py-5 z-depth-1">
                <!--Section: Content-->
                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                  
                 <!--Your info Edit mode-->
                  <h3 class="font-weight-bold">
                    You are editing your information
                  </h3>
                  <hr />
                  <form action="../settings/action.php" method="POST" class="mx-5">
                    <div class="form-row">
                        <div class="col">
                            <!-- First name -->
                            <div class="md-form md-outline my-2 Her">
                                <input name="firstname" type="text" id="firstNamee" class="form-control" value="<?php echo $herinfo['firstname'] ?>" />
                                <label for="firstNamee">First name </label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <div class="md-form md-outline my-2 Her">
                                <input type="text" id="lastName" name="lastname" class="form-control" value="<?php echo $herinfo['lastname'] ?>"/>
                                <label for="lastName">Last name</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col select-outline">
                            <select class="mdb-select md-form md-outline Her my-2" id="gender" name="gender">
                                <option selected><?php echo $herinfo['gender'] ?></option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                                <option value="Rather not say">Rather not say</option>
                            </select>
                            <label for="gender">Gender</label>
                        </div>
                    </div>
                    <div class="form-row">
                       <div class="col">
                          <div class="md-form md-outline Her">
                              <input name="birth" type="text" id="birth" class="form-control" value="<?php echo $herinfo['birth'] ?>" required />
                              <label for="birth">Birth Year</label>
                          </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col select-outline">
                            <select class="mdb-select md-form md-outline Her my-2" id="origin"
                                searchable="Search here.." name="country">
                                <option selected><?php echo $herinfo['country'] ?></option>
                              <?php 
                                $countrycheck=$db->prepare("SELECT country_name FROM countries");
                                $countrycheck->execute();
                                $countcountry=0;
                                while($countryinfo=$countrycheck->fetch(PDO::FETCH_ASSOC)) { $countcountry++?>

                              <option value="<?php echo $countryinfo['country_name'] ?>"><?php echo $countryinfo['country_name'] ?></option>

                              <?php } ?>

                            </select>
                            <label for="origin">Country of Origin</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col select-outline">
                            <select class="mdb-select md-form md-outline Her my-2" id="lStatus" name="legalStatus">
                                <option selected><?php echo $herinfo['legalStatus'] ?></option>
                                <option value="Belgian Citizen">Belgian Citizen</option>
                                <option value="EU Citizen">EU Citizen</option>
                                <option value="recognized-refugee">Recognized refugee
                                </option>
                                <option value="subsidary-protection">Subsidiary protection
                                </option>
                                <option value="asylum-seeker">Asylum seeker</option>
                                <option value="other">Other</option>
                            </select>
                            <label for="lStatus">Legal Status</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col select-outline">
                            <select class="mdb-select md-form md-outline Her my-2" id="hDegree"
                                searchable="Search here.." name="degreeCountry">
                                <option selected><?php echo $herinfo['degreeCountry'] ?></option>
                              <?php 
                                $countrycheck=$db->prepare("SELECT country_name FROM countries");
                                $countrycheck->execute();
                                $countcountry=0;
                                while($countryinfo=$countrycheck->fetch(PDO::FETCH_ASSOC)) { $countcountry++?>

                              <option value="<?php echo $countryinfo['country_name'] ?>"><?php echo $countryinfo['country_name'] ?></option>

                              <?php } ?>

                            </select>
                            <label for="hDegree">Country of Highest Degree</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col select-outline">
                            <select class="mdb-select md-form md-outline Her my-2" id="resident" name="town" searchable="Search here..">
                                <option selected><?php echo $herinfo['town'] ?></option>
                                <?php 
                                  $citycheck=$db->prepare("SELECT city FROM cities");
                                  $citycheck->execute();
                                  $countcity=0;
                                  while($cityinfo=$citycheck->fetch(PDO::FETCH_ASSOC)) { $countcity++?>

                                <option value="<?php echo $cityinfo['city'] ?>"><?php echo $cityinfo['city'] ?></option>

                                <?php } ?>
                            </select>
                            <label for="resident">Resident City/Town</label>
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="col">
                          <div class="md-form md-outline Her">
                            <input name="tel_no"  type="text" id="tel" class="form-control"  value="<?php echo $herinfo['tel_no'] ?>">
                            <label for="tel">Phone Number</label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-row">
                      <div class="col">
                          <div class="md-form md-outline my-2 Her">
                          <input type="text" name="user_id" id="materialRegisterFormLastName" class="form-control" value="<?php echo $_SESSION['user_id'] ?>" hidden="" />
                              
                          </div>
                      </div>

                    </div>
                    <div class="text-center">
                   
                      <input class="btn btn-warning" type="submit" name="herupdate" value="Submit">
                   
                  </div>

                    
                      
                      

                    
                  </form>
                  
                  <!--Your info Edit mode-->
                </section>
                <!--Section: Content-->
              </div>
              <!-- Nav tabs -->
            </div>
            <!-- Panel 111-Information Ends -->

           

          </div>
          <!-- Grid column -->
        </div>
        <!-- Tabbed Nav starts -->
      </div>
      <!-- Grid row -->
    </section>
    <!-- Section: Team v.1 ends-->
  </div>
  <!-- CONTAINER ENDS -->
<?php
  include 'her-footer.php';
?>