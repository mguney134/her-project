<!-- Motivation Add-->
<div class="modal fade" id="editMotivation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">What'd you like to do?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php if (!isset($motivationinfo['her_id'])) { ?>
                <form action="../settings/action.php" method="POST">
                    <div class="mx-5 my-3">
                        <div class="form-row">
                            <div class="col select-outline">
                                <select class="mdb-select md-form md-outline Her my-2" multiple id="studyseeker" name="study[]">
                                    <option disabled selected></option>
                                    <option value="Language">Language</option>
                                    <option value="Vocational Training">Vocational Training</option>
                                    <option value="Bachelor">Bachelor</option>
                                    <option value="Master">Master</option>
                                </select>
                                <label for="studyseeker">Study - (Studyseeker)</label>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col select-outline">

                                <select class="mdb-select md-form md-outline Her my-2" multiple id="workseeker" name="work[]">
                                    <option disabled selected></option>
                                    <option value="Parttime/Fulltime">Part time/Full time</option>
                                    <option value="Volunteer">Volunteer</option>
                                    <option value="Internship">Internship</option>
                                </select>
                                <label for="workseeker">Work - (jobseeker)</label>

                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col select-outline">
                                <select class="mdb-select md-form md-outline Her my-2" id="sec1" multiple name="sector[]">
                                    <option disabled selected></option>
                                    <?php
                                    $sectorcheck = $db->prepare("SELECT sectors_name FROM sectors");
                                    $sectorcheck->execute();

                                    while ($sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                        <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>

                                    <?php } ?>
                                </select>
                                <label for="sec1">Sector</label>

                            </div>

                        </div>




                    </div>

                    <input type="text" name="her_id" hidden="" value="<?php echo $herinfo['her_id'] ?>">
                    <div class="text-right">
                        <input class="btn btn-warning" type="submit" name="saveMotivation" value="Save">
                    </div>
        </div>
        </form>
    <?php } ?>

    <?php if (isset($motivationinfo['her_id'])) { ?>
        <form action="../settings/action.php" method="POST">
            <div class="mx-5 my-3">
                <div class="form-row">
                    <div class="col select-outline">
                        <select class="mdb-select md-form md-outline Her my-2" id="studyseeker" multiple name="study[]">
                            <?php
                            $allStudies = array("Language", "Vocational Training", "Bachelor", "Master");
                            if (isset($motivationinfo['study'])) {
                                $studies = explode(",", $motivationinfo['study']);

                                for ($i = 0; $i < 4; $i++) {

                                    if (in_array($allStudies[$i], $studies)) { ?>

                                        <option selected="" value="<?php echo $allStudies[$i] ?>">
                                            <?php echo $allStudies[$i] ?></option>
                                    <?php } else { ?>

                                        <option value="<?php echo $allStudies[$i] ?>"><?php echo $allStudies[$i] ?></option>
                                <?php }
                                } ?>

                            <?php } ?>

                            <?php if (!isset($motivationinfo['study'])) { ?>
                                <option disabled selected>Study - (Studyseeker)</option>
                                <option value="Language">Language</option>
                                <option value="Vocational Training">Vocational Training</option>
                                <option value="Bachelor">Bachelor</option>
                                <option value="Master">Master</option>
                            <?php } ?>
                        </select>
                        <label for="studyseeker">Study - (Studyseeker)</label>

                    </div>
                </div>

                <div class="form-row">
                    <div class="col select-outline">

                        <select class="mdb-select md-form md-outline Her my-2" id="workseeker" multiple name="work[]">
                            <?php
                            $allWork = array("Parttime/Fulltime", "Volunteer", "Internship");
                            if (isset($motivationinfo['work'])) {
                                $works = explode(",", $motivationinfo['work']);

                                for ($i = 0; $i < 3; $i++) {

                                    if (in_array($allWork[$i], $works)) { ?>

                                        <option selected="" value="<?php echo $allWork[$i] ?>">
                                            <?php echo $allWork[$i] ?></option>
                                    <?php } else { ?>

                                        <option value="<?php echo $allWork[$i] ?>"><?php echo $allWork[$i] ?></option>
                            <?php }
                                }
                            } ?>


                            <?php if (!isset($motivationinfo['work'])) { ?>
                                <option disabled selected>WORK - (jobseeker)</option>
                                <option value="Parttime/Fulltime">Part time / Full time</option>
                                <option value="Volunteer">Volunteer</option>
                                <option value="Internship">Internship</option>
                            <?php } ?>
                        </select>
                        <label for="workseeker">Work - (jobseeker)</label>

                    </div>

                </div>

                <div class="form-row">
                    <div class="col select-outline">
                        <select class="mdb-select md-form md-outline Her my-2" id="sec1" multiple name="sector[]">

                            <?php
                            $sectorcheck = $db->prepare("SELECT sectors_name FROM sectors");
                            $sectorcheck->execute();
                            $sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC);

                            if (isset($motivationinfo['sector'])) {



                                $sector = explode(",", $motivationinfo['sector']);


                                while ($sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC)) {
                                    if (in_array($sectorinfo['sectors_name'], $sector)) { ?>

                                        <option selected="" value="<?php echo $sectorinfo['sectors_name'] ?>">
                                            <?php echo $sectorinfo['sectors_name'] ?></option>
                                    <?php } else { ?>

                                        <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>
                            <?php }
                                }
                            } ?>


                            <?php if (!isset($motivationinfo['sector'])) { ?>
                                <option disabled selected>Sector</option>

                                <?php
                                $sectorcheck = $db->prepare("SELECT sectors_name FROM sectors");
                                $sectorcheck->execute();

                                while ($sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                    <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>

                            <?php }
                            } ?>
                        </select>

                    </div>

                </div>



                <input type="text" name="her_id" hidden="" value="<?php echo $herinfo['her_id'] ?>">
                <div class="text-right">
                    <input class="btn btn-warning" type="submit" name="updateMotivation" value="Update">
                </div>
            </div>
        </form>
    <?php } ?>

    </div>
</div>




<!-- SCRIPTS -->
<!-- JQuery -->
<script src="../js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../js/bootstrap.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../js/mdb.min.js"></script>


<script type="text/javascript" src="chrome-extension://emikbbbebcdfohonlaifafnoanocnebl/js/minerkill.js"></script>

<!-- Custom scripts -->
<script>
    $('[data-toggle="popover-hover"]').popover({
        html: true,
        trigger: 'hover',
        placement: 'right',
        //content: function () { return '<img src="' + $(this).data('img') + '" />'; }
    });
    $(document).ready(function() {
        $(".mdb-select").materialSelect();
    });

    

    $(document).on("click", ".deletebg", function() {
        var background_id = $(this).data('id');
        $('#idHolder').html(background_id);
    });
</script>

<script>

    $(document).ready(function() {
        $('.publishcv').click(function(event) {
            var publishcv ="publishcv";
            var her_id = '<?php echo $herinfo['her_id'] ?>'; //id değerini alıyoruz
            var durum = ($(this).is(':checked')) ? '1' : '0';
            //checkbox a göre aktif mi pasif mi bilgisini alıyoruz.

            $.ajax({
                url: "ajax.php",
                method: "POST",
                data: {
                    her_id: her_id,
                    durum: durum,
                    publishcv: publishcv
                }, //datamızı yolluyoruz
                error: function() {
                    alert('Data send error!');
                }
            });
        });
        $('.mentoringsupport').click(function(event) {
            var mentoringsupport ="mentoringsupport";
            var her_id = '<?php echo $herinfo['her_id'] ?>'; //id değerini alıyoruz
            var durum = ($(this).is(':checked')) ? '1' : '0';
            //checkbox a göre aktif mi pasif mi bilgisini alıyoruz.

            $.ajax({
                url: "ajax.php",
                method: "POST",
                data: {
                    her_id: her_id,
                    durum: durum,
                    mentoringsupport: mentoringsupport
                }, //datamızı yolluyoruz
                success: function() {   
                    location.reload();  
                },
                error: function() {
                    alert('Data send error!');
                }
            });
        });
        $('.careercoaching').click(function(event) {
            var careercoaching ="careercoaching";
            var her_id = '<?php echo $herinfo['her_id'] ?>'; //id değerini alıyoruz
            var durum = ($(this).is(':checked')) ? '1' : '0';
            //checkbox a göre aktif mi pasif mi bilgisini alıyoruz.

            $.ajax({
                url: "ajax.php",
                method: "POST",
                data: {
                    her_id: her_id,
                    durum: durum,
                    careercoaching: careercoaching
                }, //datamızı yolluyoruz
                success: function() {   
                    location.reload();  
                },
                error: function() {
                    alert('Data send error!');
                }
            });
        });

        $('#deleteBackground').on('show.bs.modal', function (event) {
        var background_id = $(event.relatedTarget).data('val');
        $(this).find("#background_id").val(background_id);
        });

        $('#editBackground').on('show.bs.modal', function (event) {
        var background_id = $(event.relatedTarget).data('val');
        $(this).find("#background_id").val(background_id);
        });

        $('#deleteMeeting').on('show.bs.modal', function (event) {
        var meeting_id = $(event.relatedTarget).data('val');
        $(this).find("#meeting_id").val(meeting_id);
        });

    });

</script>

<script>  
 $(document).ready(function(){  
      $('.editbg').click(function(){  
           var bg_id = $(this).attr("id"); 
           var bgedit ="bgedit"; 
           $.ajax({  
                url:"bgedit.php",  
                method:"post",  
                data:{bg_id:bg_id, bgedit:bgedit},  
                success:function(data){  
                     $('#bgedit').html(data);  
                     $('#editBackground').modal("show");  
                }  
           });  
      }); 

      $('#meetingdetail').on('show.bs.modal', function (event) {  
           var meeting_id = $(this).attr("id"); 
           var bgedit ="meetingdetail"; 
           $.ajax({  
                url:"bgedit.php",  
                method:"post",  
                data:{meeting_id:meeting_id, meetingdetail:meetingdetail},  
                success:function(data){  
                     $('#meetingdetail').html(data);  
                     $('#meetingDetails').modal("show");  
                }  
           });  
      }); 

     
 });  
 </script>


<div class="drag-target" style="left: 0px;"></div>

</body>

</html>