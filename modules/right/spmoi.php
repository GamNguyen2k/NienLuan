<?php
	$sql_moinhat="SELECT * FROM sanpham ORDER BY idsanpham DESC LIMIT 0,6";
	$row_moinhat=mysql_query($sql_moinhat);	
?>
<!-- Thông Tin Trang Web -->
<div class="gioithieu">
	&nbsp
	<div class="co"> Mua Thuốc Dễ Dàng Tại LONG CHÂU </div>
		<div class="ne">
			<i class="ti-truck"></i>
			<h2>MIỄN PHÍ VẬN CHUYỂN</h2>
			<h4>Áp dụng cho hóa đơn trên 350.000đ</h4>
		</div>
		<div class="ne">
			<i class="ti-comments-smiley"></i>
			<h2>TRAO ĐỔI TRỰC TIẾP DƯỢC SỸ</h2>
			<h4>Tư vấn miễn phí</h4>
		</div>
		<div class="ne">
			<i class="ti-thumb-up"></i>
			<h2>SẢN PHẨM CHẤT LƯỢNG</h2>
			<h4>Giá cả hợp lý</h4>
		</div>		
</div>
<!-- Sản Phẩm Mới Nhất -->
<div class="tieude_r">SẢN PHẨM MỚI NHẤT</div>
    <ul class="product">
		<?php
		while($dong_moinhat=mysql_fetch_array($row_moinhat)){
		?>
			<li>
				<a href="?quanly=chitietsp&idloaisp=<?php echo $dong_moinhat['loaisp'] ?>&id=<?php echo $dong_moinhat['idsanpham'] ?>">
					<img src="admincp/modules/quanlysanpham/uploads/<?php echo $dong_moinhat['hinhanh'] ?>" width="150" height="180" />
					<p style="color: #00008f"><?php echo $dong_moinhat['tensp'] ?></p>
					<p style="color:red; border:1px solid #d9d9d9; width:150px;height:30px; line-height:30px;margin-left:35px;
							margin-bottom:5px;"><?php echo number_format($dong_moinhat['giadexuat']).' '.'VNĐ'?></p>                                                    	
					<p>Xem chi tiết</p>
				</a>
			</li>
		<?php
		}
		?>
    </ul>

	<div class="clear"></div>                
 	<?php
 		$sql_loai=mysql_query("SELECT * FROM loaisp ");
		while($dong_loai=mysql_fetch_array($sql_loai)){
			echo '<div class="tieude_r">'.$dong_loai['tenloaisp'].'</div>';
			$sql_loaisp="SELECT * FROM loaisp INNER JOIN sanpham ON sanpham.loaisp=loaisp.idloaisp 
					     WHERE sanpham.loaisp='".$dong_loai['idloaisp']."'";
			$row=mysql_query($sql_loaisp);
			$count=mysql_num_rows($row);
			if($count>0){
	?>      <ul class="product">
    		<?php			
				while($dong=mysql_fetch_array($row)){						
			?>
					<li>
						<a href="?quanly=chitietsp&idloaisp=<?php echo $dong['loaisp'] ?>&id=<?php echo $dong['idsanpham'] ?>">
							<img src="admincp/modules/quanlysanpham/uploads/<?php echo $dong['hinhanh'] ?>" width="150" height="150" />
							<p><?php echo $dong['tensp']?></p>
							<p style="color:red; border:1px solid #d9d9d9; width:150px;height:30px; line-height:30px;
								      margin-left:35px;margin-bottom:5px;"><?php echo number_format($dong['giadexuat']).' '.'VNĐ' ?></p>																
							<p>Xem chi tiết</p>
						</a>
					</li>
		<?php
				}
			}
			else{
				echo '<h3 style="margin:5px;font-style:italic;color:#000">Hiện chưa có sản phẩm...</h3>';
			}						
		?>
            </ul>
            <div class="clear"></div>
    <?php	
		}	
	?>
          
            