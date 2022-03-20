<?php
include "conn.php";

if (isset($_POST['simpan'])) {
    //identitas peserta
    $Nama = $_POST['namaPx'];
    $tLahir = $_POST['tl_lahir'];
    $taLahir = $_POST['ta_lahir'];
    $umur = $_POST['umur'];
    $noTlp = $_POST['no_tlp'];
    $alamat = $_POST['alamat'];
    $sex = $_POST['sex'];

    $sql2 = "INSERT INTO id_mr (id_nm_pasien,id_tl_pasien,id_ta_pasien,id_umur_pasien,id_no_tlp,id_sex,id_alamat)
                    VALUES ('$Nama','$tLahir','$taLahir','$umur','$noTlp','$sex','$alamat')";

    $query2 = sqlsrv_query($conn, $sql2);
    if ($query2) {
        //redirect ke halaman index
        echo '<script> alert ("Berhasil Tambah Pasien") </script>';
        header("location:index.php");
    } else {
        die(print_r(sqlsrv_errors(), true));
    }
}
?>
<!-- <script>
    function addpasien() {
        var addnamaPx = $('#namaPx').val();
        var addtl_lahir = $('#tl_lahir').val();
        var addta_lahir = $('#ta_lahir').val();
        var addummur = $('#umur').val();
        var addsex = $('#sex').val();
        var addalamat = $('#alamat').val();
        var addnotlp = $('#no_tlp').val();

        $.ajax({
            url: "save_pasien.php",
            type: 'post',
            data: {
                namaPx: addnamaPx,
                tl_lahir: addtl_lahir,
                taLahir: addta_lahir,
                umur: addummur,
                sex: addsex,
                alamat: addalamat,
                no_tlp: addnotlp
            },
            success: function(data, status) {
                console.log(status);


            }
        });

    }


    // $(document).ready(function() {
    //             $('#insert_form').on("submit", function(event) {
    //                 event.preventDefault();
    //                 if ($('#namaPx').val() == "") {
    //                     alert("Name is required");
    //                 } else if ($('#tl_lahir').val() == '') {
    //                     alert("Address is required");
    //                 } else if ($('#ta_lahir').val() == '') {
    //                     alert("Designation is required");
    //                 } else if ($('#umur').val() == '') {
    //                     alert("Address is required");
    //                 } else if ($('#sex').val() == '') {
    //                     alert("Address is required");
    //                 } else if ($('#alamat').val() == '') {
    //                     alert("Address is required");
    //                 } else if ($('#no_tlp').val() == '') {
    //                     alert("Address is required");
    //                 } else {
    //                     $.ajax({
    //                         url: "save_pasien.php",
    //                         method: "POST",
    //                         data: $('#insert_form').serialize(),
    //                         beforeSend: function() {
    //                             $('#insert').val("Inserting");
    //                         },
    //                         success: function(data) {
    //                             $('#insert_form')[0].reset();
    //                             $('#exampleModal').modal('hide');
    //                             // $('#employee_table').html(data);
    //                         }
    //                     });
    //                 }
    //             });
</script> -->