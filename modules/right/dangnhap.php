<?php
	@session_start();
	if(isset($_POST['dangnhap'])){
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$sql=mysql_query("select * from dangky where email='$email' and matkhau='$pass' limit 1");
		$count=mysql_num_rows($sql);
		if($count>0){
			$tendangnhap=$_SESSION['dangnhap']=$email;
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Bạn đã đăng nhập thành công.</p>';
			echo '<a href="index.php?quanly=dathang" style="font-size:20px;">Quay lại để thanh toán</a>';
		}
		else{
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">
					Email hoặc Mật khẩu của bạn không đúng. Vui lòng thử lại.
				  </p>';
		}
	}
?>

<div class="tieude">ĐĂNG NHẬP</div>

<div class="thongbao">	
	<p>- Vui lòng liên hệ qua Email khi muốn đặt sô lượng lớn.</p>
	<p>- Vui lòng đặt đơn hàng có tổng giá trị trên 100.000đ</p>
  	<p>- Đơn hàng sẽ được miễn phí vận chuyển nếu có giá trị trên 350.000đ</p>
</div>

<div class="dangky">
  <p style="font-size:18px; color:red;margin:5px;">Các mục dấu * là bắt buộc tối thiểu. </p>
  <form action="" method="post" enctype="multipart/form-data">
	<table width="100%" border="1" style="border-collapse:collapse;">
		<tr>
			<td width="40%"><h3>Email : <strong style="color:red;"> (*)</strong></h3></td>
			<td width="60%"><input type="text" name="email" size="50" required="required"></td>
		</tr>
		<tr>
			<td><h3>Mật khẩu : <strong style="color:red;"> (*)</strong></h3></td>
			<td width="60%"><input type="password" name="pass" size="50" required="required"></td>
		</tr>
		<tr>
			<td colspan="2">	
				<p><input type="submit" name="dangnhap" value="Đăng nhập" style="font-size:20px"/></p>	
			</td>
		</tr>
	</table>
  </form>
</div>

<h3>
	<a href="?quanly=dangkymoi" style="text-decoration:none;color:#FFF;margin:10px;border-radius:10px;padding:5px;;background:#F00;float:right;" >Đăng ký tài khoản để mua hàng.</a>
</h3>

