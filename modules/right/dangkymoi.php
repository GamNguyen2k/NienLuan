<?php
	if(isset($_POST['gui'])){
		$tenkh=$_POST['hoten'];
		$email=$_POST['email'];
		$diachi=$_POST['diachi'];
		$pass=$_POST['pass'];
		$dienthoai=$_POST['dienthoai'];
		$sql_dangky=mysql_query("insert into dangky (tenkhachhang,email,matkhau,dienthoai,diachinhan) value('$tenkh','$email','$pass','$dienthoai','$diachi')");
		    
    if($sql_dangky){
      echo '<h2 style="margin-left:5px; color:red;">Bạn đã đăng ký thành công</h2>';
      echo '<a href="?quanly=dangnhap" style="margin:20px;text-decoration:none;">
              Quay lại để đăng nhập mua hàng
            </a>';
    }
	}
?>
	

<div class="tieude">ĐĂNG KÝ</div>
<div class="thongbao">	
	<p>- Vui lòng liên hệ qua Email khi muốn đặt sô lượng lớn.</p>
  <p>- Vui lòng đặt đơn hàng có tổng giá trị trên 100.000đ</p>
  <p>- Đơn hàng sẽ được miễn phí vận chuyển nếu có giá trị trên 350.000đ</p>
</div>

<div class="dangky">

  <p style="font-size:18px; color:red;margin:5px;">
    Các mục dấu * là bắt buộc tối thiểu. Vui lòng điền đầy đủ và chính xác 
    (Số nhà, Ngõ, thôn xóm/ấp, Phường/xã, huyện/quận, tỉnh, TP)
  </p>
  <form action="" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" style="border-collapse:collapse;">
      <tr>
        <td >Họ tên người mua <strong style="color:red;"> (*)</strong></td>
        <td ><input type="text" name="hoten" size="50" required="required"> </td>
      </tr>
      <tr>
        <td>Địa chỉ Email <strong style="color:red;"> (*)</strong></td>
        <td><input type="text" name="email" size="50" required="required"></td>
      </tr>
      <tr>
        <td>Mật khẩu  <strong style="color:red;"> (*)</strong></td>
        <td><input type="password" name="pass" size="50" required="required"></td>
      </tr>
      <tr>
        <td>Điện thoại <strong style="color:red;"> (*)</strong></td>
        <td><input type="text" name="dienthoai" size="50" required="required"></td>
      </tr>
      <tr>
        <td>Địa chỉ nhận hàng <strong style="color:red;"> (*)</strong></td>
      <td><input type="text" name="diachi" size="50" required="required"></td>
      </tr>
      <tr>
        <td colspan="2">
          <p><input type="submit" name="gui" value="Đăng ký" /></p>              
        </td>
      </tr>
    </table>
  </form>

  <div class="ghichu">
    <p>Ghi chú nếu có :</p>
    <textarea name="ghichu"></textarea>
  </div>

</div>

