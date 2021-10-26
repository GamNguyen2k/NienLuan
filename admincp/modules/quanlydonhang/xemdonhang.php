<h1 style="padding: 10px 0px;">CHI TIẾT ĐƠN HÀNG</h1>

<?php
  $code = $_GET['code'];
	$sql_lietkedh="select * from cart_detail,sanpham where cart_detail.product_id=sanpham.idsanpham and
    cart_detail.cart_id='".$code."' order by cart_detail.cart_id desc ";
	$query_lietkedh=mysql_query($sql_lietkedh);
?>

<table width="100%" border="1">
  <tr style="background:lightpink;height: 40px;font-size: 18px;">
    <th>Số thứ tự</th>
    <th>ID Đơn Hàng</th>
    <th>Tên sản phẩm</th>
    <th>Mã sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
  </tr>
  <?php
  $i = 0;
  $tongtien = 0;
  while($row=mysql_fetch_array($query_lietkedh)){
    $i++;
    $thanhtien = $row['giadexuat']*$row['quantity'];
    $tongtien += $thanhtien;
  ?>
  <tr>
    <td><?php  echo $i;?></td>
    <td><?php echo $row['cart_id'] ?></td>
    <td><?php echo $row['tensp'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['quantity'] ?></td>
    <td><?php echo number_format($row['giadexuat'],0,',','.').'  VNĐ' ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'  VNĐ' ?></td>   
  </tr>
  <?php
  }
  ?>
  <tr>
    <td colspan="7">
      <p style="font-size:25px;color:red;font-weight:bold;">Tổng tiền :  <?php echo number_format($tongtien,0,',','.').'  VNĐ' ?></p>     
    </td>
  </tr>
</table>
