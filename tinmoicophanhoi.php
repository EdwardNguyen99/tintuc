
<?php $kq = $t-> TinMoiCoPhanHoi(0, 10, $lang);
    $demTMPH=0;
?>
<div id="most-commented">
	<div class="horizontal_carousel_container page_margin_top">
		<ul class="blog horizontal_carousel page_margin_top autoplay-0 visible-4 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
			<?php while($row = $kq->fetch_assoc() ) { ?>
			<li class="post tinmoiphanhoi">
				<a href="<?=BASE_DIR?>bv/<?=$row['TieuDe_KhongDau'];?>.html" title=<?=$row['TieuDe']?> >
					<img src=<?=$row['urlHinh']?> onerror="this.src='/news/defaultImg.jpg'" alt='img'>
				</a>
				<h5><span class="number"><?=++$demTMPH?></span><a href="<?=BASE_DIR?>bv/<?=$row['TieuDe_KhongDau'];?>.html" title=<?=$row['TieuDe']?> ><?=$row['TieuDe']?> </a></h5>
				<ul class="post_details simple">
					<li class="category"><a href="<?=BASE_DIR?>bv/<?=$row['TieuDe_KhongDau'];?>.html"><?=$row['TenLT']?> </a></li>
					<li class="date">
						<?=date( 'd/m/Y', strtotime($row['Ngay']) )?> 
					</li>
				</ul>
			</li>
			<?php }?>
		</ul>
	</div>
</div>