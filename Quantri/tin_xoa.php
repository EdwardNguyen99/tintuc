<?php
session_start();

require_once "../class/quantritin.php";
$qt = new quantritin;    
$qt-> checkLogin();

$idTin = $_GET['idTin']; 
settype($idTin,"int");

$soYKien= $qt->YKienTrongTin($idTin);



if($soYKien==0){
    $kq = $qt->Tin_Xoa($idTin);
    header("location:index.php?p=tin_ds");
}
else
    echo "Đa phát sinh ý kiến không được xóa!";


