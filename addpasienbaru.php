<script>
$(document).ready(function(){    
    $("#contactForm").btPxbaruID(function(event){
        submitForm();
        return false;
    });
});
// function to handle form submit
function submitForm(){
     $.ajax({
        type: "POST",
        url: "save_pasien.php",
        cache:false,
        data: $('form#contactForm').serialize(),
        success: function(response){
            $("#contact").html(response)
            $("#contact-modal").modal('hide');
        },
        error: function(){
            alert("Error");
        }
    });
}
</script>