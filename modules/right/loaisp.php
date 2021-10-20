<?php
	$sql_loaisp="SELECT * FROM sanpham WHERE sanpham.loaisp='$_GET[id]'";
	$num_loaisp=mysql_query($sql_loaisp);
	$count=mysql_num_rows($num_loaisp);
	
?>

<?php
	$sql_tenloaisp="SELECT tenloaisp FROM loaisp WHERE idloaisp='$_GET[id]' ";
	$row=mysql_query($sql_tenloaisp);
	$dong=mysql_fetch_array($row);
?>

<div class="tieude"><?php echo $dong['tenloaisp'] ?></div>
	<ul class="product">
        <?php
			if($count>0){
				while($dong_loaisp=mysql_fetch_array($num_loaisp)){
		?>
					<li>
						<a href="?quanly=chitietsp&idloaisp=<?php echo $dong_loaisp['loaisp'] ?>&id=<?php echo $dong_loaisp['idsanpham'] ?>">
							<img src="admincp/modules/quanlysanpham/uploads/<?php echo $dong_loaisp['hinhanh'] ?>" width="150" height="150" />
							<p><?php echo $dong_loaisp['tensp'] ?></p>
							<p style="color:red;"> <?php echo number_format($dong_loaisp['giadexuat']).' '.'VNĐ'?></p> 					
							<p>Xem chi tiết</p>
						</a>
					</li>
        <?php
				}
			}
			else{
				echo 'Hiện chưa có sản phẩm...';
			}
		?>
    </ul>                            
</div>