<?php
    $dta["NIM"] = "1122334455";
    $dta["NAMA"] = "Charlyin Manul";
    $dta["JKEL"] = "P";
    $dta["Alamat"] = "panjer";
    $dta["Jurusan"] = "Ti_pariwisata";


    header("content-type:application/json; charset=utf-8 ");
    echo json_encode($dta);