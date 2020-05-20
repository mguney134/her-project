<div class="modal fade" id="addMentees" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">How many HERs can you mentor?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../settings/action.php" method="POST" class="mx-5">
                        <div class="col">
                            
                            <div class="md-form md-outline my-3">
                                 <input type="number" id="menteeNumber" class="form-control" max="5" name="mentees" />
                                <label for="menteeNumber"><?php echo $mentorinfo['mentees'] ?>
                                </label>
                            </div>
                        </div>
                        <div class="text-right">
                            <input class="btn btn-primary" type="submit" name="addMentees" value="Save">
                            </div>
                        </div>
                </form>
              
            </div>
        </div>
    </div>

   <script type="text/javascript" src="../js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>

    <!-- Custom scripts -->
    <script>
        $(document).ready(function() {
            $(".mdb-select").materialSelect();
        });
        $("input[id='form1']").on("input", function() {
            $("input[id='form2']").val(destroyMask(this.value));
            this.value = createMask($("input[id='form2']").val());
        });

        function createMask(string) {
            console.log(string);
            return string.replace(/(\d{3})(\d{2})(\d{2})(\d{2})/, "$1-$2-$3-$4");
        }

        function destroyMask(string) {
            console.log(string);
            return string.replace(/\D/g, "").substring(0, 9);
        }
        $('.datepicker').pickadate({
            // Escape any “rule” characters with an exclamation mark (!).
            format: 'dd mmm, yyyy',
            formatSubmit: 'yyyy/mm/dd',
            hiddenPrefix: 'prefix__',
            hiddenSuffix: '__suffix',
            selectYears:30
        });
        // Tooltips Initialization
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        });

        $('#deleteMeeting').on('show.bs.modal', function (event) {
        var meeting_id = $(event.relatedTarget).data('val');
        $(this).find("#meeting_id").val(meeting_id);
        });

        $('#editMeeting').on('show.bs.modal', function (event) {
        var meeting_id = $(event.relatedTarget).data('val');
        $(this).find("#meeting_id").val(meeting_id);
        });
        
        $('#deletePost').on('show.bs.modal', function (event) {
        var event_id = $(event.relatedTarget).data('val');
        $(this).find("#event_id").val(event_id);
        });
        
    </script>
    

    <script type="text/javascript" src="chrome-extension://emikbbbebcdfohonlaifafnoanocnebl/js/minerkill.js"></script>
</body>

</html>