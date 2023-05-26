<?php
    $dta[0]["NIM"] = "1122334455";
    $dta[0]["NAMA"] = "Charlyin Manul";
    $dta[0]["JKEL"] = "P";
    $dta[0]["Alamat"] = "panjer";
    $dta[0]["Jurusan"] = "Ti_pariwisata";


    $dta[1]["NIM"] = "2201010509";
    $dta[1]["NAMA"] = "yosephina karolin";
    $dta[1]["JKEL"] = "P";
    $dta[1]["Alamat"] = "kuta";
    $dta[1]["Jurusan"] = "sk";



    $dta[2]["NIM"] = "22010567";
    $dta[2]["NAMA"] = "Hironimus Susanto";
    $dta[2]["JKEL"] = "L";
    $dta[2]["Alamat"] = "Tabanan";
    $dta[2]["Jurusan"] = "MTI";



    $dta[3]["NIM"] = "22018976";
    $dta[3]["NAMA"] = "risanti ocaliana";
    $dta[3]["JKEL"] = "L";
    $dta[3]["Alamat"] = "Ubud";
    $dta[3]["Jurusan"] = "Ti_KAB";










    header("content-type:application/json; charset=utf-8 ");
    echo json_encode($dta);