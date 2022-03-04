<?php

if (isset($_POST['update'])) {
    //identitas peserta
    $Nama = $_POST['i_nm_pasien'];
    $tLahir = $_POST['i_tl_pasien'];
    $taLahir = $_POST['i_tal_pasien'];
    $umur = $_POST['i_umur'];
    $noTlp = $_POST['i_no_tlp'];
    $alamat = $_POST['i_alamat'];
    $sex = $_POST['i_sex'];


    //register
    $noReg = $_POST['kd_reg_pasien'];
    $lay = $_POST['layanan'];
    $drLayanan = $_POST['dokter'];
    $ins = $_POST['inst'];
    $klLayanan = $_POST['kls_layanan'];
    $jaminan = $_POST['jaminan'];
    $noPeserta = $_POST['no_pes'];
    $cMasuk = $_POST['cara_masuk'];
    $fasRujukan = $_POST['f_rujukan'];
    $tglMasuk = $_POST['t_tgl_masuk'];
    $jamMasuk = $_POST['t_jam_masuk'];

    $sql = "UPDATE id_peserta set id_tgl_masuk = '$tglMasuk',id_jam_masuk='$jamMasuk',ki_layanan='$lay',
                    ki_dokter_layanan='$drLayanan',ki_instalasi='$ins',ki_kelas_layanan='$klLayanan',
                    ki_jaminan='$jaminan',ki_no_peserta='$noPeserta',ki_cara_masuk='$cMasuk',ki_faskes_rujukan='$fasRujukan'
                    WHERE ki_no_reg = '$noReg' ";

    // $sql2="INSERT INTO id_mr (id_nm_pasien,id_tl_pasien,id_ta_pasien,id_umur_pasien,id_no_tlp,id_sex,id_alamat)
    // VALUES ('$Nama','$tLahir','$taLahir','$umur','$noTlp','$sex','$alamat')";

    $query = sqlsrv_query($conn, $sql);
    // $query2=sqlsrv_query($conn,$sql2);
    if ($query) {
        //redirect ke halaman index
        echo 'Berhasil';
    } else {
        die(print_r(sqlsrv_errors(), true));
    }
    // if ($query2) {
    //     //redirect ke halaman index
    //     echo 'Very well done sir2!';
    //     }else{
    //         die(print_r(sqlsrv_errors(), true));
    //     }                
}
