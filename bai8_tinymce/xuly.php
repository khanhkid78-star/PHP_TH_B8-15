<?php
if (isset($_POST['submit'])) {
    $noidung = $_POST['tomtat'];
    
    echo "<h3>Nội dung bạn vừa nhập:</h3>";
    echo "<div style='border:1px solid #ccc; padding:10px;'>";
    echo $noidung; 
    echo "</div>";
}
?>