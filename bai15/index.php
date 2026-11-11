<!DOCTYPE html>
<html lang="vi">
<head><meta charset="UTF-8"><title>Bình chọn</title></head>
<body>
    <h3>BÌNH CHỌN</h3>
    <form action="xulybinhchon.php" method="get">
        <p>Bạn nghĩ sao về chất lượng của trang web hocweb.com.vn?</p>
        <?php
        require_once("config.php");
        $sql = "SELECT * FROM phuongan WHERE idBC = 1";
        $kq = mysqli_query($config, $sql);
        $i = 0;
        while($row = mysqli_fetch_array($kq)) {
        ?>
            <label>
                <input type="radio" name="idPA" value="<?php echo $row['idPA']; ?>" <?php if($i==0) echo "checked"; ?>>
                <?php echo $row['MoTa']; ?>
            </label><br>
        <?php 
            $i++;
        } 
        ?>
        <br>
        <input type="submit" value="Bình chọn" name="Submit">
        <a href="ketquabinhchon.php" style="margin-left:20px;">Xem kết quả</a>
    </form>
</body>
</html>