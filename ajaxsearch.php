<?php
include "conn.php";

$SEARCH_DATA = $_POST['ki_no_reg'];
$SEARCH_DATA2 = $_POST['id_nm_pasien'];
$search = "SELECT * FROM id_peserta WHERE ki_no_reg = '$SEARCH_DATA' ";
$search2 = "SELECT * FROM id_mr WHERE id_nm_pasien = '$SEARCH_DATA2' ";
$execute = sqlsrv_query ($conn, $search);
$execute2 = sqlsrv_query ($conn, $search2);

while ($row = sqlsrv_fetch_array ($execute)){
    $returnarray ['aj_id_nm_pasien']=$row['id_nm_pasien'];
    $returnarray ['aj_ki_layanan']=$row['ki_layanan'];
    $returnarray ['aj_ki_dokter_layanan']=$row['ki_dokter_layanan'];
    $returnarray ['aj_ki_instalasi']=$row['ki_instalasi'];
    $returnarray ['aj_id_tgl_masuk']=$row['id_tgl_masuk'];
    $returnarray ['aj_id_jam_masuk']=$row['id_jam_masuk'];
    $returnarray ['aj_id_tl_pasien']=$row['id_tl_pasien'];
    $returnarray ['aj_id_ta_pasien']=$row['id_ta_pasien'];
    $returnarray ['aj_id_umur_pasien']=$row['id_umur_pasien'];
    $returnarray ['aj_id_no_tlp']=$row['id_no_tlp'];
    $returnarray ['aj_id_sex']=$row['id_sex'];
    $returnarray ['aj_id_alamat']=$row['id_alamat'];
    $returnarray ['aj_id_no_rm']=$row['id_no_rm'];
    $returnarray ['aj_ki_no_reg']=$row['ki_no_reg'];
    $returnarray ['aj_ki_kelas_layanan']=$row['ki_kelas_layanan'];
    $returnarray ['aj_ki_jaminan']=$row['ki_jaminan'];
    $returnarray ['aj_ki_no_peserta']=$row['ki_no_peserta'];
    $returnarray ['aj_ki_cara_masuk']=$row['ki_cara_masuk'];
    $returnarray ['aj_ki_faskes_rujukan']=$row['ki_faskes_rujukan'];
    

    echo json_encode($returnarray);

}
while ($row = sqlsrv_fetch_array ($execute2)){
    $returnarray ['aj_id_nm_pasien']=$row['id_nm_pasien'];
    $returnarray ['aj_ki_layanan']=$row['ki_layanan'];
    $returnarray ['aj_ki_dokter_layanan']=$row['ki_dokter_layanan'];
    $returnarray ['aj_ki_instalasi']=$row['ki_instalasi'];
    $returnarray ['aj_id_tgl_masuk']=$row['id_tgl_masuk'];
    $returnarray ['aj_id_jam_masuk']=$row['id_jam_masuk'];
    $returnarray ['aj_id_tl_pasien']=$row['id_tl_pasien'];
    $returnarray ['aj_id_ta_pasien']=$row['id_ta_pasien'];
    $returnarray ['aj_id_umur_pasien']=$row['id_umur_pasien'];
    $returnarray ['aj_id_no_tlp']=$row['id_no_tlp'];
    $returnarray ['aj_id_sex']=$row['id_sex'];
    $returnarray ['aj_id_alamat']=$row['id_alamat'];
    $returnarray ['aj_id_no_rm']=$row['id_no_rm'];
    $returnarray ['aj_ki_no_reg']=$row['ki_no_reg'];
    $returnarray ['aj_ki_kelas_layanan']=$row['ki_kelas_layanan'];
    $returnarray ['aj_ki_jaminan']=$row['ki_jaminan'];
    $returnarray ['aj_ki_no_peserta']=$row['ki_no_peserta'];
    $returnarray ['aj_ki_cara_masuk']=$row['ki_cara_masuk'];
    $returnarray ['aj_ki_faskes_rujukan']=$row['ki_faskes_rujukan'];
    

    echo json_encode($returnarray);

}


?>

