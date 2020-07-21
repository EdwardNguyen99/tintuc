<?php $kq= $t->TinNoiBat(4,6,$lang); ?>

<ul class="blog medium">
    <?php while ($row = $kq->fetch_assoc()) {?>
	<li class="post">
		<a href="<?=BASE_DIR?>bv/<?=$row['TieuDe_KhongDau'];?>.html" title="High Altitudes May Aid Weight Control">
			<span class="icon gallery"></span>
			<img class='hinhtinnoibattt' src=<?= $row['urlHinh']?> onerror="this.src='/news/defaultImg.jpg'" alt='img'>
		</a>
		<h5 class='tieudetinnoibattt'><a href="<?=BASE_DIR?>bv/<?=$row['TieuDe_KhongDau'];?>.html" title="High Altitudes May Aid Weight Control"><?=$row['TieuDe']?></a></h5>
        <ul class="post_details simple">
			<li class="category"><a href="<?=BASE_DIR?>category_health.html" title="HEALTH"><?=$row['TenLT']?></a></li>
			<li class="date">
                <?=date('d/m/Y',strtotime($row['Ngay']))?>
			</li>
		</ul>
	</li>
	<?php }?>								
</ul>