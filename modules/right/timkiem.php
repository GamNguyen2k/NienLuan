<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }
    $sql_pro = "SELECT * FROM sanpham,loaisp WHERE sanpham.loaisp=loaisp.idloaisp 
                AND sanpham.tensp LIKE '%".$tukhoa."%'";
    $query_pro = mysql_query($sql_pro);
?>

<h3 style="padding:20px;color:red;">Từ khóa tìm kiếm :    <?php echo $_POST['tukhoa'];?></h3>
<ul class="product">
<?php
    while ($row = mysql_fetch_array($query_pro)) {
?>
        <li>
            <a href="index.php?quanly=sanpham&id=<?php echo $row['idsanpham'] ?>" >
                <img src="admincp/modules/quanlysanpham/uploads/<?php echo $row['hinhanh']?>" width="150" height="180"/>
                <p style="color: #00008f"><?php echo $row['tensp']?></p>
                <p style="color:red; border:1px solid #d9d9d9; width:150px;height:30px; line-height:30px;
                        margin-left:35px;margin-bottom:5px;"><?php echo number_format($row['giadexuat']).' '.'VNĐ' ?></p>
            </a>
        </li>
<?php
    }
?>
</ul>
    
<div class="clear"></div>