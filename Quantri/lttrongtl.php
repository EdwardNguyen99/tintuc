<?php 
session_start(); 
require_once "../class/quantritin.php";
$qt = new quantritin;
$qt-> checkLogin(); //chuyển qua login.php nếu chưa đăng nhặp or kô là admin

$idTL=-1; ///ko nhat thiet phai la -1, nhưng phải đông nhất với bên function
if (isset($_GET['idTL'])==true) $idTL=$_GET['idTL'];
    
$kq= $qt->LoaiTinTrongTheLoai($idTL);
?>
<?php while($row = $kq->fetch_assoc()){?>
    <option value= "<?=$row['idLT']?>"> <?=$row['Ten']?></option>
<?php }?>
