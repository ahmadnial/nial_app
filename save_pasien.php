<?php
include "conn.php";

extract($_POST);
if (isset($_POST['namaPx']) && isset($_POST['tl_pasien']) && isset($_POST['ta_pasien']) &&
    isset($_POST['umur']) && isset($_POST['no_tlp'] && isset($_POST['sex']) && isset($_POST['alamat'])){
    //identitas peserta
    // $Nama = $_POST['namaPx'];
    // $tLahir = $_POST['tl_pasien'];
    // $taLahir = $_POST['ta_pasien'];
    // $umur = $_POST['umur'];
    // $noTlp = $_POST['no_tlp'];
    // $alamat = $_POST['alamat'];
    // $sex = $_POST['sex'];

    $sql2 = "INSERT INTO id_mr (id_nm_pasien,id_tl_pasien,id_ta_pasien,id_umur_pasien,id_no_tlp,id_sex,id_alamat)
    VALUES ('$Nama','$tLahir','$taLahir','$umur','$noTlp','$sex','$alamat')";

    $query2 = sqlsrv_query($conn, $sql2);
    if ($query) {
        //redirect ke halaman index
        echo 'Berhasil';
    } else {
        die(print_r(sqlsrv_errors(), true));
    }

?>
