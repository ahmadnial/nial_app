<!-- <script>
    $(document).ready(function() {
        $("#contactForm").btPxbaruID(function(event) {
            submitForm();
            return false;
        });
    });
    // function to handle form submit
    function submitForm() {
        $.ajax({
            type: "POST",
            url: "save_pasien.php",
            cache: false,
            data: $('form#contactForm').serialize(),
            success: function(response) {
                $("#contact").html(response)
                $("#contact-modal").modal('hide');
            },
            error: function() {
                alert("Error");
            }
        });
    }
</script> -->
<script>
    $(document).ready(function() {
                $('#insert_form').on("submit", function(event) {
                    event.preventDefault();
                    if ($('#namaPx').val() == "") {
                        alert("Name is required");
                    } else if ($('#tl_lahir').val() == '') {
                        alert("Address is required");
                    } else if ($('#ta_lahir').val() == '') {
                        alert("Designation is required");
                    } else if ($('#umur').val() == '') {
                        alert("Address is required");
                    } else if ($('#sex').val() == '') {
                        alert("Address is required");
                    } else if ($('#alamat').val() == '') {
                        alert("Address is required");
                    } else if ($('#no_tlp').val() == '') {
                        alert("Address is required");
                    } else {
                        $.ajax({
                            url: "save_pasien.php",
                            method: "POST",
                            data: $('#insert_form').serialize(),
                            beforeSend: function() {
                                $('#insert').val("Inserting");
                            },
                            success: function(data) {
                                $('#insert_form')[0].reset();
                                $('#exampleModal').modal('hide');
                                // $('#employee_table').html(data);
                            }
                        });
                    }
                });
</script>