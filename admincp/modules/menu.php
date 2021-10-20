<?php
	if(isset($_POST['logout'])){
		unset($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>
<div class="menu">
    <ul>
        <li><a href="index.php?quanly=loaisp&ac=lietke">QUẢN LÝ LOẠI SẢN PHẨM</a></li>
        <li><a href="index.php?quanly=hieusp&ac=lietke">QUẢN LÝ HIỆU SẢN PHẨM</a></li>
        <li><a href="index.php?quanly=sanpham&ac=lietke">QUẢN LÝ SẢN PHẨM</a></li>        
        <li><a href="index.php?quanly=donhang&ac=lietke">QUẢN LÝ ĐƠN HÀNG</a></li>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="submit" id="button_dangxuat" name="logout" value="ĐĂNG XUẤT"/>
        </form>
    </ul>       
</div>

<form action="index.php?quanly=timkiem&ac=sp" method="post" enctype="multipart/form-data">
    <p>
        <input type="text" name="masp" placeholder="  Nhập mã sản phẩm..." id="timkiem" required="required" />
        <input type="submit" id="button_timkiem" name="timkiem" value="Tìm sản phẩm"/>
    </p>
</form>