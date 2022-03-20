<?php
//eksekusi simpan data
// if ($_SERVER['REQUEST METHOD'] == 'POST'){
if (isset($_POST['save'])) {
    //identitas peserta
    $Nama = $_POST['i_nm_pasien'];
    $tLahir = $_POST['i_tl_pasien'];
    $taLahir = $_POST['i_tal_pasien'];
    $umur = $_POST['i_umur'];
    $noTlp = $_POST['i_no_tlp'];
    $alamat = $_POST['i_alamat'];
    $sex = $_POST['i_sex'];
    $noRM = $_POST['no_rm_pasien'];

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
    $no_reg = 'dbo.auto_R001()';

    $sql = "INSERT INTO T_registrasi (kd_reg,tgl_masuk,jam_masuk,tgl_batal,jam_batal,tgl_keluar,jam_keluar,id_nama,id_tempat_lahir,
                    id_tanggal_lahir,id_umur,id_sex,id_no_tlp,no_rm,tl_layanan,tl_instalasi,tl_dokter,tl_kelas_layanan,tl_jaminan,tl_no_peserta,tl_cara_masuk,tl_faskes_rujukan)
                    VALUES('dbo.auto_R001()','$tglMasuk','$jamMasuk','','','','','$Nama','$tLahir','$taLahir','$umur','$sex','$noTlp','$noRM','$lay','$ins','$drLayanan','$klLayanan',
                    '$jaminan','$noPeserta','$cMasuk','$fasRujukan')";

    $query = sqlsrv_query($conn, $sql);
    if ($query) {
        //redirect ke halaman index
        echo 'Berhasil';
    } else {
        die(print_r(sqlsrv_errors(), true));
    }
}
