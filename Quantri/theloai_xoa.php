<?php
session_start();
require_once "../class/quantritin.php";
$qt = new quantritin;
$qt-> checkLogin();

$idTL = $_GET['idTL']; 
settype($idTL,"int");
$soTin = $qt->DemTinTrongTheLoai($idTL);


If($soTin==0){
    $kq = $qt->TheLoai_Xoa($idTL);
    header("location:index.php?p=theloai_ds");
}
else
    echo "Số tin đã phát sinh dữ liệu!";

?>