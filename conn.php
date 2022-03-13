<?php
$Server      = 'INDOMIEGORENG';
//$Database = array("Database"=>"HOSPITAL");
//$username = 'sa';
//$password = 'b35mart1c5';
$connInfo = array("Database" => "XCX", "UID" => "hospitalx", "PWD" => "intersoftindo");
$conn      = sqlsrv_connect($Server, $connInfo);

// if ($conn) {
//     echo 'Koneksi Berhasil !';
// } else {
//     echo 'Koneksi gagal !';
//     die(print_r(sqlsrv_errors(), true));
// }
