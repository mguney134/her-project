<?php

include 'org-header.php';
$talentcheck = $db->prepare("SELECT * FROM her where org_talent_match=:org_talent_match");
$talentcheck->execute(array(
    'org_talent_match' => $orginfo['org_id']
));
?>

<div class="col-md-9 mb-4">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs md-tabs nav-justified cyan lighten-2" role="tablist">
        <li class="nav-item">
            <a class="nav-link" href="org-info.php">
                <i class="fas fa-user pr-2"></i>Info</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="org-networking.php">
                <i class="fas fa-project-diagram  pr-2"></i>Networking
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="org-talents.php" role="tab">
                <i class="fas fa-user-friends pr-2"></i>Talents</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="org-meeting.php" role="tab">
                <i class="fas fa-user-friends pr-2"></i>Meet</a>
        </li>
    </ul>
    <!-- Nav tabs -->

    <div class="tab-content">
        <!-- Panel 333-TALENTS START-->
        <div class="tab-pane fade in show active" id="panel333" role="tabpanel">
            <div class="py-5 z-depth-1">
                <!--Section: Content-->
                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                    <h3 class="font-weight-bold">Search for Talents</h3>
                    <hr>
                    <!-- Search IN ALL talents STARTS-->
                    <div class="input-group md-form form-sm form-2 pl-0 mb-4">
                        <input class="form-control my-0 py-1 info-border" type="text" placeholder="Search in all talents by Name" aria-label="Search">
                        <div class="input-group-append">
                            <span class="input-group-text teal lighten-3" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <!-- Filter IN ALL talents STARTS-->

                    <div class="row mb-4">
                        <!-- by  sector-->
                        <div class="col-6 select-outline">
                            <select class="mdb-select md-form md-outline Org my-2" multiple id="filterSector">
                                <option disabled selected></option>
                                <?php
                                $sectorcheck = $db->prepare("SELECT sectors_name FROM sectors");
                                $sectorcheck->execute();

                                while ($sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                    <option value="<?php echo $sectorinfo['sectors_name'] ?>">
                                        <?php echo $sectorinfo['sectors_name'] ?></option>

                                <?php } ?>
                            </select>
                            <label for="filterSector">Filter by Sector</label>
                        </div>


                        <div class="col-6 select-outline">
                            <select class="mdb-select md-form md-outline Org my-2" multiple id="filLoc">
                                <option disabled selected></option>
                                <?php
                                $citycheck = $db->prepare("SELECT city FROM cities");
                                $citycheck->execute();
                                $countcity = 0;
                                while ($cityinfo = $citycheck->fetch(PDO::FETCH_ASSOC)) {
                                    $countcity++ ?>

                                    <option value="<?php echo $cityinfo['city'] ?>">
                                        <?php echo $cityinfo['city'] ?></option>

                                <?php } ?>
                            </select>
                            <label for="filLoc">Filter by Location</label>
                        </div>

                    </div>
                    <!-- Filter IN ALL talents ends-->



                    <br><br>
                    <h5>Matched Talents</h5>
                    <hr>

                    <?php while ($talentinfo = $talentcheck->fetch(PDO::FETCH_ASSOC)) { ?>
                        <!--Talent Card starts-->
                        <div class="col-12 mb-4">
                            <div class="card z-depth-0 bordered border-light">
                                <div class="card-body p-0">
                                    <div class="row mx-0 grey lighten-4 rounded-left d-flex align-items-center">
                                        <div class="col-1 text-center pt-1">
                                            <i class="far fa-id-badge text-info fa-3x"></i>
                                        </div>
                                        <div class="col-11 px-0 pt-3">
                                            <table class="table m-0">

                                                <tr>
                                                    <td class="p-0 font-weight-light"><small>Name</small>
                                                    </td>
                                                    <td class="p-0 font-weight-light"><small>Gender</small>
                                                    </td>
                                                    <td class="p-0 font-weight-light"><small>Year of Birth</small>
                                                    </td>
                                                    <td class="p-0 font-weight-light"><small>Highest Study
                                                            Level</small></td>
                                                    <td class="p-0 font-weight-light"><small>Sector</small>
                                                    </td>
                                                    <td class="p-0 font-weight-light">
                                                        <small>Language</small></td>
                                                    <td class="p-0 font-weight-light"><small>Check</small>
                                                    </td>
                                                    <td class="p-0 font-weight-light"><small>Reach</small>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td class="px-0 py-3"><?php echo $talentinfo['firstname'] . ' ' . $talentinfo['lastname'] ?></td>
                                                    <td class="px-0 py-3"><?php echo $talentinfo['gender'] ?></td>
                                                    <td class="px-0 py-3"><?php echo $talentinfo['birth'] ?></td>
                                                    <td class="px-0 py-3"></td>
                                                    <td class="px-0 py-3"></td>
                                                    <td class="px-0 py-0"><?php
                                                                            $herlangcheck = $db->prepare("SELECT * FROM herlanguages where her_id=:her_id");
                                                                            $herlangcheck->execute(array(
                                                                                'her_id' => $talentinfo['her_id']
                                                                            ));

                                                                            while ($herlanginfo = $herlangcheck->fetch(PDO::FETCH_ASSOC)) {

                                                                                echo "<br>" . $herlanginfo['language_name'];
                                                                            } ?></td>
                                                    <td class="px-0 py-0"><a href="org-herinfo.php?her_id=<?php echo $talentinfo['her_id'] ?>" class="btn btn-sm btn-info mt-1 mx-0">Profile</a>
                                                    </td>
                                                    <?php
                                                    $usermailcheck = $db->prepare("SELECT * FROM users where user_id=:user_id");
                                                    $usermailcheck->execute(array(
                                                        'user_id' => $talentinfo['user_id']
                                                    ));
                                                    $usermailinfo = $usermailcheck->fetch(PDO::FETCH_ASSOC);
                                                    ?>
                                                    <td class="px-0 py-0 font-weight-light"><a class="btn btn-sm mt-1 mx-0 btn-outline-info" href="mailto:<?php echo $usermailinfo['email'];?>">Contact</a>
                                                    </td>
                                                </tr>


                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Talent Card Ends-->
                    <?php } ?>


                </section>
            </div>
        </div>
        <!-- Panel 333-TALENTS ENDS-->

    </div>
</div>

<?php

include 'org-footer.php';

?>