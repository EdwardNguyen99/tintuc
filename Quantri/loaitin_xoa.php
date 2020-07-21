<?php
session_start();
require_once "../class/quantritin.php";
$qt = new quantritin;
$qt-> checkLogin ();

$idLT = $_GET['idLT']; 
settype($idLT,"int");
$soTin= $qt->DemTinTrongLoaiTin($idLT);

if($soTin==0){
    $kq = $qt->LoaiTin_Xoa($idLT);
    header("location:index.php?p=loaitin_ds");
}
else
    echo "Số tin đã phát sinh dữ liệu!";

?>
