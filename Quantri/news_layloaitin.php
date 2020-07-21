<?php
	require_once "../class/quantritin.php";
	$qt = new quantritin;
	$idTL = $_GET['idTL'];  
	$loaitin = $qt->LoaiTinTrongTheLoai($idTL);
?>
<?php while ($row_loaitin = $loaitin->fetch_assoc()) { ?>
	<option value="<?php echo $row_loaitin['idLT'];?>">
	<?php echo $row_loaitin['Ten'];?> 
	</option>
<?php } ?>

<?php
if (isset($_POST['TieuDe'])){ 
    $TD = $_POST['TieuDe'];
    $TD_KD = $_POST['TieuDe_KhongDau'];
    $TT = $_POST['TomTat'];
    $Ngay = $_POST['Ngay'];   
    $AnHien = $_POST['AnHien'];
    $TNB = $_POST['TinNoiBat'];
    $idTL = $_POST['idTL'];
    $idLT = $_POST['idLT'];
    $urlHinh = $_POST['urlHinh'];
    $ND = $_POST['NoiDungTin'];
    $tags = $_POST['tags'];
    $lang = $_POST['lang'];
    $qt->Tin_Them($TD, $TD_KD, $TT,$Ngay, $AnHien, $TNB, $urlHinh, $ND, $idTL, $idLT, $tags, $lang);
    echo "<script>document.location='index.php?p=tin_ds';</script>";
    exit();
 }
 
?>
