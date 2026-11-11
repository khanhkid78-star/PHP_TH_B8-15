<?php
session_start();

if(isset($_POST['submit'])){
    $input = $_POST['input'];
    if($input === $_SESSION['captcha']){
        $message = "<span style='color:green'>* Right captcha !!!</span>";
    } else {
        $message = "<span style='color:red'>* Wrong captcha !!!</span>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CAPTCHA</title>
    <style>
        body { font-family: sans-serif; }
        form { width: 400px; margin: 20px auto; border: 1px solid #ccc; padding: 20px; }
        input[type="text"] { width: 200px; height: 30px; padding: 5px; }
        #message { margin-top: 10px; font-weight: bold; }
    </style>
</head>
<body>
    <form action="" method="POST">
        <h2>CAPTCHA - WEB</h2>
        <p>Please enter the captcha:</p>
        <input type="text" name="input">
        <!-- Chèn ảnh captcha -->
        <img src="captcha.php" title="" alt="" style="vertical-align: middle;">
        <br><br>
        <input type="submit" name="submit" value="Send">
        <p id="message"><?php if(isset($message)) echo $message; ?></p>
    </form>
</body>
</html>