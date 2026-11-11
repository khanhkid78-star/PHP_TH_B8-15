<!DOCTYPE html>
<html lang="vi">
<head><meta charset="UTF-8"><title>Kết quả bình chọn</title></head>
<body>
    <h3>KẾT QUẢ BÌNH CHỌN</h3>
    <table width="600" border="1" cellpadding="5" cellspacing="0">
        <?php
        require_once("config.php");
        
   
        $sql = "SELECT * FROM binhchon WHERE idBC = 1";
        $kq = mysqli_query($config, $sql);
        $row_bc = mysqli_fetch_array($kq);
        ?>
        <tr>
            <td colspan="3" bgcolor="#66CCFF" align="center">
                <strong><?php echo $row_bc['MoTa']; ?></strong>
            </td>
        </tr>
        
        <?php
       
        $sql_tong = "SELECT SUM(SoLanChon) AS tong FROM phuongan WHERE idBC = 1";
        $kq_tong = mysqli_query($config, $sql_tong);
        $row_tong = mysqli_fetch_array($kq_tong);
        $tong = $row_tong['tong'];
        if ($tong == 0) $tong = 1; 

        
        $sql_pa = "SELECT * FROM phuongan WHERE idBC = 1";
        $kq_pa = mysqli_query($config, $sql_pa);
        while($row = mysqli_fetch_array($kq_pa)) {
            $rong = ($row['SoLanChon'] / $tong) * 150;
            $phantram = ($row['SoLanChon'] / $tong) * 100;
        ?>
        <tr>
            <td width="200"><?php echo $row['MoTa']; ?></td>
            <td width="200">
               
                <table width="150" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="<?php echo $rong; ?>" bgcolor="#FF0000">&nbsp;</td>
                        <td><?php echo round($phantram, 2); ?>%</td>
                    </tr>
                </table>
            </td>
            <td width="150">Số lần chọn: <?php echo $row['SoLanChon']; ?></td>
        </tr>
        <?php } ?>
        
        <tr>
            <td colspan="3" align="right">
                <strong>Tổng số lượt bình chọn: <?php echo $row_tong['tong']; ?></strong>
            </td>
        </tr>
    </table>
</body>
</html>