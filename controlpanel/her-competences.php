<?php include 'her-header.php'; ?>   
 <!-- Tabbed Nav starts -->
    <div class="col-md-9 mb-4">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs nav-justified deep-orange lighten-2" role="tablist">
            <li class="nav-item">
                <a class="nav-link" href="her-info.php" role="tab">
                    <i class="fas fa-user pr-2"></i>Info</a>
            </li>

            <li class="nav-item ">
                <a class="nav-link"  href="her-background.php" role="tab">
                    <i class="fas fa-file-alt pr-2"></i>Background</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active"  href="her-competences.php" role="tab">
                    <i class="fas fa-cogs pr-2"></i>Competences</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="her-networking.php" role="tab">
                    <i class="fas fa-project-diagram pr-2"></i>Networking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="her-meeting.php" role="tab">
                    <i class="fas fa-user-friends pr-2"></i>Meet</a>
            </li>
        </ul>
        <!-- Nav tabs -->
        <!-- Tab panels -->
        <div class="tab-content">
            <!-- Panel 333-Competences starts-->
            <div class="tab-pane fade in show active" >
                <div class="container py-5 z-depth-1">
                <!--Section: Content-->
                    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                      <h3 class="font-weight-bold">Language - Hard/Soft Skills</h3>
                      <hr />
                      <table class="table table-borderless text-left">
                          <thead>
                              <tr>
                                  <th scope="row" class="text-right th-sm" style="width: 25%">
                                      Languages
                                  </th>
                                  <th colspan="4" class="border-bottom th-lg">
                                      <span>Language</span>
                                  </th>
                                  
                                  <th colspan="4" class="border-bottom th-lg">
                                      <span>Level</span>
                                  </th>
                                  <th colspan="4" class="border-bottom th-lg">
                                      <span>Action</span>
                                  </th>

                              </tr>
                          </thead>
                          <tbody>
                              <?php 
                                  $langcheck=$db->prepare("SELECT * FROM herlanguages where her_id=:her_id");
                                  $langcheck->execute(array(
                                        'her_id' => $herinfo['her_id']
                                        ));
                                  
                                  while($langinfo=$langcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                <tr>
                                  <th scope="row" class="text-right th-sm"></th>
                                  <td colspan="4" class="border-bottom th-lg">
                                    <?php echo $langinfo['language_name'] ?>
                                  </td>
                                  <td colspan="4" class="border-bottom th-lg">
                                    <?php echo $langinfo['level'] ?>
                                  </td>
                                  <td colspan="4" class="border-bottom th-lg">

                                                  <a class="btn-floating btn-sm btn-secondary" href="langedit.php?id=<?php echo $langinfo['id']; ?>"><i class="fas fa-edit"></i></a>
                                                  <a class="btn-floating btn-sm btn-secondary" href="../settings/action.php?id=<?php echo $langinfo['id']; ?>&langdelete=ok"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                              </tr>

                                <?php } ?>

                              <tr>
                                  <th scope="row" class="text-right th-sm">Soft Skills</th>
                                  <td colspan="4" class="border-bottom th-lg"></td>
                                  <td colspan="4" class="border-bottom th-lg"></td>
                              </tr>
                              <tr>
                                  <th scope="row" class="text-right">
                                      Hard Skills
                                  </th>
                                  <td colspan="4" class="border-bottom th-lg"></td>
                                  </td>
                                  <td colspan="4" class="border-bottom th-lg"></td>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                      <div class="col-md-12 mb-4 mt-5">
                        <h3 class="font-weight-bold">Edit/ Add Language - Hard/Soft Skills</h3>
                        <hr />
                        <form action="../settings/action.php" method="POST">
                          <div class="row mb-3">
                              <!-- Language-->
                              <div class="col select-outline">
                                <select class="mdb-select md-form md-outline Her my-2" id="langua" name="language_name">
                                <option disabled selected></option>
                                      <?php 
                                          $languagecheck=$db->prepare("SELECT language FROM languages");
                                          $languagecheck->execute();
                                  
                                          while($languageinfo=$languagecheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                  <option value="<?php echo $languageinfo['language'] ?>"><?php echo $languageinfo['language'] ?></option>

                                  <?php } ?>
                                </select>
                                <label for="langua">Language</label>
                              </div>
                        
                              <!-- Language Level-->
                              <div class="col select-outline">
                                  <select class="mdb-select md-form md-outline Her my-2" id="lanlevel" name="level">
                                      <option disabled selected></option>
                                      <option value="Native">Native</option>
                                      <option value="Fluent">Fluent</option>
                                      <option value="A1">A1 / Basic user - Beginner</option>
                                      <option value="A2">A2 / Basic user - Elementary</option>
                                      <option value="B1">B1 / Independent User - Intermediate</option>
                                      <option value="B2">B2 / Independent User - Upper intermediate</option>
                                      <option value="C1">C1 / Proficient User - Advanced</option>
                                      <option value="C2">C2 / Proficient User - Master</option>
                                  </select>
                                  <label for="lanlevel">Level</label>
                              </div>
                          </div>

                          <input type="text" name="her_id" hidden="" value="<?php echo $herinfo['her_id'] ?>">

                          <div class="text-right" style="margin:0; padding:0">
                            <input class="btn btn-warning" type="submit" name="languageadd" value="Add">
                          </div>
                        
                        </form>
                      </div>
                    </section>
                </div>
            </div>
            <!-- Panel 333-Competences Ends-->
        </div>
    </div>
<?php include 'her-footer.php'; ?>