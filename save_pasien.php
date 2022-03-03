<?php
include "conn.php";


                    if (isset($_POST['btPXbaruadd'])) {
                        //identitas peserta
                        $Nama=$_POST['i_nm_pasien'];
                        $tLahir=$_POST['i_tl_pasien'];
                        $taLahir=$_POST['i_tal_pasien'];
                        $umur=$_POST['i_umur'];
                        $noTlp=$_POST['i_no_tlp'];
                        $alamat=$_POST['i_alamat'];
                        $sex=$_POST['i_sex'];
    
                        $sql2="INSERT INTO id_mr (id_nm_pasien,id_tl_pasien,id_ta_pasien,id_umur_pasien,id_no_tlp,id_sex,id_alamat)
                        VALUES ('$Nama','$tLahir','$taLahir','$umur','$noTlp','$sex','$alamat')";
                        
                        $query2=sqlsrv_query($conn,$sql2);
                        if ($query) {
                        //redirect ke halaman index
                        echo 'Berhasil';
                        }else{
                            die(print_r(sqlsrv_errors(), true));
                        }             
                    }  
?>
