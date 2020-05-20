</div>
<!-- Grid row -->
</section>
<!-- Section: Team v.1 ends-->
</div>
<!-- CONTAINER ENDS -->

<!-- SCRIPTS -->
<!-- JQuery -->



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
        selectYears: 30
    });
    // Tooltips Initialization
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $('#deleteMeeting').on('show.bs.modal', function(event) {
        var meeting_id = $(event.relatedTarget).data('val');
        $(this).find("#meeting_id").val(meeting_id);
    });

    $('#editMeeting').on('show.bs.modal', function(event) {
        var meeting_id = $(event.relatedTarget).data('val');
        $(this).find("#meeting_id").val(meeting_id);
    });

    $('#deletePost').on('show.bs.modal', function(event) {
        var event_id = $(event.relatedTarget).data('val');
        $(this).find("#event_id").val(event_id);
    });
</script>

<script>
    $(document).ready(function() {

        load_data();

        function load_data(query = '') {
            $.ajax({
                url: "fetch.php",
                method: "POST",
                data: {
                    query: query
                },
                success: function(data) {
                    $('tbody').html(data);
                }
            })
        }

        $('#multi_search_filter').change(function() {
            $('#hidden_country').val($('#multi_search_filter').val());
            var query = $('#hidden_country').val();
            load_data(query);
        });

    });
</script>


<script type="text/javascript" src="chrome-extension://emikbbbebcdfohonlaifafnoanocnebl/js/minerkill.js"></script>
</body>

</html>