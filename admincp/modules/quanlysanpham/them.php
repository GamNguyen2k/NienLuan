<h1 style="padding: 20px 0px;">THÊM SẢN PHẨM</h1>
<div class="button_themsp">
  <a href="index.php?quanly=sanpham&ac=lietke">Liệt kê sp</a> 
</div>

<form action="modules/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data">
  <table width="600" border="1">
    <tr>
      <td width="60">Tên sản phẩm</td>
      <td width="87"><input type="text" name="tensp"></td>
    </tr>
    <tr>
      <td>Mã SP</td>
      <td><input type="text" name="masp"></td>
    </tr>
    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="hinhanh" /></td>
    </tr>
    <tr>
      <td>Giá đề xuất</td>
      <td><input type="text" name="giadexuat"></td>
    </tr>
    <tr>
      <td>Giá giảm</td>
      <td><input type="text" name="giagiam"></td>
    </tr>
    <tr>
      <td>Nội dung</td>
      <td><textarea name="noidung" cols="40" rows="10"></textarea></td>
    </tr>
    <tr>
      <td>Số lượng</td>
      <td><input type="text" name="soluong"></td>
    </tr>
    <tr>
    <?php
    $sql_loaisp = "select idloaisp,tenloaisp from loaisp";
    $row_loaisp=mysql_query($sql_loaisp);
    ?>
      <td>Loại sản phẩm</td>
      <td>
        <select name="loaisp">
        <?php
          while($dong_loaisp=mysql_fetch_array($row_loaisp)){
        ?>
            <option value="<?php echo $dong_loaisp['idloaisp'] ?>"><?php echo $dong_loaisp['tenloaisp'] ?></option>
        <?php
        }
        ?>
        </select>
      </td>
    </tr>
    <tr>
    <?php
    $sql_hieusp = "select * from hieusp";
    $row_hieusp=mysql_query($sql_hieusp);
    ?>
      <td>Tên nhà sx</td>
      <td>
        <select name="nhasx">
        <?php
        while($dong_hieusp=mysql_fetch_array($row_hieusp)){
        ?>
          <option value="<?php echo $dong_hieusp['idhieusp'] ?>"><?php echo $dong_hieusp['tenhieusp'] ?></option>
        <?php
        }
        ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Tình trạng</td>
      <td>
        <select name="tinhtrang">   
          <option value="1">Kích hoạt</option>
          <option value="2">Không kích hoạt</option>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center">
          <input type="submit" name="them" value="Thêm sản phẩm">
        </div>
      </td>
    </tr>
  </table>
</form>


