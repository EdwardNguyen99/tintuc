<?php
    $tukhoa = $_GET['tukhoa'];

    $pageSize = PAGEGINATION_PERPAGE ; //số tin sẽ hiện trong 1 trang

    if (isset($_GET['pageNum'])) $pageNum = $_GET['pageNum'];//trang user xem

    settype($pageNum, "int"); 

    if ($pageNum<=0) $pageNum=1;

    $totalRows=0;
    $offset = PAGEGINATION_OFFSET;
    $kq = $t->TimKiem($tukhoa,$totalRows, $pageNum, $pageSize); //chỉ lấy 1 trang thứ $pageNum , với $pageSize record
?>



<div class="page_header clearfix">
    <div class="page_header_left">
        <h1 class="page_title"><?=$tukhoa?></h1>
    </div>
    <div class="page_header_right">
        <ul class="bread_crumb">
            <li>Số tin tìm được: <?=$totalRows?> tin</li>
        </ul>
    </div>
</div>

<ul class="blog big">
    <?php while ($row=$kq->fetch_assoc()) {?>       
        <li class="post tintrongloai">
            <a href="<?=BASE_DIR?>bv/<?=$row['TieuDe_KhongDau'];?>.html" title="<?=$row['TieuDe']?> ">
                <img src='<?=$row['urlHinh']?>' onerror="this.src='/news/defaultImg.jpg'" alt='img'>
            </a>
            <div class="post_content">
                <h2 class="with_number">
                    <a class="tieude" href="<?=BASE_DIR?>bv/<?=$row['TieuDe_KhongDau'];?>.html" title="<?=$row['TieuDe']?> "><?=$row['TieuDe']?> </a>
                    <a class="comments_number" href="post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
                </h2>
                <ul class="post_details">
                    <li class="date">
                        <?=date( 'd/m/Y', strtotime($row['Ngay']) )?> 
                    </li>
                </ul>
                <p><?=$row['TomTat']?></p>
            </div>
        </li>
    <?php }?>

</ul>


<div class="page_margin_top_section">&nbsp;</div>
<?php if ($totalRows>$pageSize) {?>
    <?php
        $totalPages = ceil($totalRows/$pageSize);   
        $from = $pageNum - $offset;	
        $to = $pageNum + $offset;

        if ($from <=0) { 
            $from = 1;   
            $to = $offset*2; 
        }
        if ($to > $totalPages) $to = $totalPages;

        $pagePrev= $pageNum - 1;
        $pageNext= $pageNum + 1;
    ?>


    <ul class="pagination clearfix page_margin_top_section">

        <?php //Hiện link tới trang đầu, trang trước?>
        <?php if ($pageNum>1) {?>
            <li>
                <a href="index.php?p=search&tukhoa=<?=$tukhoa?>">Đầu</a>
            </li>
            <li>
                <a href="index.php?p=search&tukhoa=<?=$tukhoa?>&pageNum=<?=$pagePrev?>">Trước</a>
            </li>
        <?php } //if ($pageNum>1?>

       

        <?php //Hiện các con sô trong thanh phân trang?>
    
        <?php for($j = $from; $j <= $to; $j++) {?>
            <?php if ($j!=$pageNum) {?> 
                <li>
                    <a href="index.php?p=search&tukhoa=<?=$tukhoa?>  &pageNum=<?=$j?>"><?=$j?></a>
                </li>
            <?php } else {?>
                <li  class="selected">
                    <a href="index.php?p=search&tukhoa=<?=$tukhoa?>  &pageNum=<?=$j?>"><?=$j?></a>
                </li>
            <?php } //if ($j?>   
        <?php } //for?>



        <?php //Hiện link tới trang trước, trang cuối?>
        <?php if ($pageNum<$totalPages) {?>
            <li>
                <a href= "index.php?p=search&tukhoa=<?=$tukhoa?>  &pageNum=<?=$pageNext?>">Sau</a>
            </li>
            <li>
                <a href="index.php?p=search&tukhoa=<?=$tukhoa?>  &pageNum=<?=$totalPages?>">Cuối</a>
            </li>
        <?php } //if ($pageNum<$totalPages) ?>


    </ul>
<?php }?>