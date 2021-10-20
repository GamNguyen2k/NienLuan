<?php
    include('../config.php');

    if(isset($_GET['code'])){
        $code_cart=$_GET['code'];
        $sql_update="UPDATE cart SET cart_status=1 WHERE id_cart='".$code_cart."'";
        $query=mysql_query($sql_update);
        header('location:../../index.php?quanly=donhang&ac=lietke');
    }
?>