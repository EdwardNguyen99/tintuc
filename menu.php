<div class="menu_container sticky style_3 clearfix">
				<nav>
				<ul class="sf-menu">
					<li class="selected">
						<a href="<?=BASE_DIR?>index.php" title="Trang Chủ">
							{Trang_Chu}
						</a>
						
					</li>
					<?php $kq = $t->ListTheLoai($lang);	?>
                    <?php while ($rowTL = $kq->fetch_assoc() ) {?>
					<li class="submenu">
						<a href="#" title="<?=$rowTL['TenTL']?>">
                        <?=$rowTL['TenTL']?>
						</a>
						<ul>
                            <?php $kq1 = $t->ListLoaiTinTrong1TheLoai($rowTL['idTL']);?>
                            <?php while ($rowLT = $kq1->fetch_assoc() ) {?>
							<li>
								<a href="<?=BASE_DIR?>cat/<?php echo $rowLT['Ten_KhongDau']?>/" title="<?=$rowLT['TenLT']?>">
                                <?=$rowLT['Ten']?>
								</a>
							</li>
							<?php }?>
						</ul>
                    </li>
                    <?php }?>				
				</ul>
				</nav>
</div>