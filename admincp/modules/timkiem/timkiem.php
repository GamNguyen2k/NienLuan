<?php
	if(isset($_POST['timkiem'])){
    $search=$_POST['masp'];
    echo 'Mã tìm kiếm :<strong>'.' '.$search.'</strong><br/>';
    $sql_timkiem="select * from sanpham,hieusp,loaisp where sanpham.loaisp=loaisp.idloaisp and sanpham.nhasx=hieusp.idhieusp and  masp='".$search."'";
    $row_timkiem=mysql_query($sql_timkiem);
    $count=mysql_num_rows($row_timkiem);
	if($count>0){
?>
    <h3 style="margin-top:8px;margin-bottom:8px;font-size:25px">KẾT QUẢ TÌM KIẾM</h3>
    <table width="100%" border="1">
      <tr style="background:lightpink;">
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td>Mã sp</td>
        <td>Hình ảnh</td>
        <td>Giá đề xuất</td>
        <td>Giá giảm</td>
        <td>Số lượng</td>
        <td>Loại hàng</td>
        <td>Nhà SX</td>
        <td>Tình trạng</td>
        <td colspan="2">Quản lý</td>
      </tr>
  <?php
    $i=1;
    while($dong=mysql_fetch_array($row_timkiem)){
  ?>
      <tr>
        <td><?php  echo $i;?></td>
        <td><?php echo $dong['tensp'] ?></td>
        <td><?php echo $dong['masp'] ?></td>
        <td>
          <img src="modules/quanlysanpham/uploads/<?php echo $dong['hinhanh'] ?>" width="80" height="80" />
        </td>
        <td><?php echo $dong['giadexuat'] ?></td>
        <td><?php echo $dong['giagiam'] ?></td>
        <td><?php echo $dong['soluong'] ?></td>
        <td><?php echo $dong['tenloaisp'] ?></td>
        <td><?php echo $dong['tenhieusp'] ?></td>
        <td>
        <?php $sql_tinhtrang = "select tinhtrang from sanpham";
          $row_tinhtrang = mysql_query($sql_tinhtrang);
          $dong_tinhtrang=mysql_fetch_array($row_tinhtrang);
          if($dong_tinhtrang['tinhtrang'] == 1 ){
            echo 'Kích hoạt';
          }elseif($dong_tinhtrang['tinhtrang'] ==2){
            echo 'Không kích hoạt';
          }
        ?>
        </td>
        <td><a href="index.php?quanly=sanpham&ac=sua&id=<?php echo $dong['idsanpham'] ?>"><center><img src="../imgs/edit.png" width="30" height="30" /></center></a></td>
        <td><a href="modules/quanlysanpham/xuly.php?id=<?php echo $dong['idsanpham']?>"><center><img src="../imgs/delete.png" width="30" height="30" /></center></a></td>
      </tr>
    <?php
      $i++;
      }
      }else{
        echo '&nbsp&nbsp<h1 style="color:red;">Không tìm thấy sản phẩm. Vui lòng thử lại.</h1>';
      }
    }
    ?>
    </table>
