                
            </div>
            <!-- Grid row -->
        </section>
        <!-- Section: Team v.1 ends-->
    </div>
    <!-- CONTAINER ENDS -->

    <!-- SCRIPTS -->
    <!-- JQuery -->

    <!-- SCRIPTS -->
 
<script type="text/javascript" src="../js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../js/bootstrap.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../js/mdb.min.js"></script>

    <!-- Custom scripts -->
    <script>
        // $(document).ready(function () {
        //   $(".mdb-select").materialSelect();
        // });

        $(".datepicker").pickadate({
            // Escape any “rule” characters with an exclamation mark (!).
            format: " mmm, yyyy",
            formatSubmit: "mmm/yyyy",
            hiddenPrefix: "prefix__",
            hiddenSuffix: "__suffix"
        });
        // Material Select Initialization
        $(document).ready(function () {
            $(".mdb-select").materialSelect();
        });
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

</body>
<script type="text/javascript" src="chrome-extension://emikbbbebcdfohonlaifafnoanocnebl/js/minerkill.js"></script>
</html>