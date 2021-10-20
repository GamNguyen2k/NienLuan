<?php
	$id=$_GET['id'];
?>
<h1 style="padding: 20px 0px;">THÊM HÌNH ẢNH CHO SẢN PHẨM</h1>
<form action="modules/gallery/xuly.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
	<center><p style="margin-top:100px;margin-bottom:5px;"><input type="file" name="file[]" multiple ></p></center>
	<center><p><input type="submit" name="upload" value="Uploads" ></p></center>
</form>