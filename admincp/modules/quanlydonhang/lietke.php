<h1 style="padding: 10px 0px;">ĐƠN HÀNG</h1>
<?php
	$sql_lietkedh="select * from cart,dangky where cart.fullname=dangky.email order by id desc ";
	$query_lietkedh=mysql_query($sql_lietkedh);
?>

<table width="100%" border="1">
  <tr style="background:lightpink;height: 40px;font-size: 18px;">
    <th>Số thứ tự</th>
    <th>ID Đơn Hàng</th>
    <th>Tên khách hàng</th>
    <th>Địa chỉ</th>
    <th>Thời gian đặt hàng</th>
    <th>Số điện thoại</th>
    <th>Trạng thái</th>
    <th>Quản lý</th>
  </tr>
  <?php
  $i=0;
  $tongtien = 0;
  while($row=mysql_fetch_array($query_lietkedh)){
    $i++;
  ?>
  <tr>
    <td><?php  echo $i;?></td>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['tenkhachhang'] ?></td>
    <td><?php echo $row['diachinhan'] ?></td>
    <td><?php echo $row['createdate'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td>
      <?php 
        if($row['cart_status']==0){
          echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['id'].'">Đơn hàng mới</a>';
        }
        else {
          echo 'Đã xử lý';
        }
      ?>
    </td>
    <td>
      <a href="index.php?quanly=donhang&ac=xemdonhang&code=<?php echo $row['id'] ?>">Xem đơn hàng</a>
    </td>   
  </tr>
  <?php
  }
  ?>
</table>
