<h1 style="padding: 20px 0px;">THÊM HIỆU/NHÀ SẢN XUẤT SẢN PHẨM</h1>
<div class="button_themsp">
  <a href="index.php?quanly=hieusp&ac=lietke">Liệt kê sp</a> 
</div>

<form action="modules/quanlyhieusp/xuly.php" method="post" enctype="multipart/form-data">
  <table width="200" border="1">
    <tr>
      <td width="60">Tên hiệu/nhà sản xuất sản phẩm</td>
      <td width="87"><input type="text" name="hieusp"></td>
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
          <input type="submit" name="them" value="Thêm">
        </div>
      </td>
    </tr>
  </table>
</form>


