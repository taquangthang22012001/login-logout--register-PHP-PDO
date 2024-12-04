<?php 
require_once '../controller/registerController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng ký</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="username" placeholder="Tên tài khoản" required>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <button type="submit">Đăng ký</button>
        <a href="login.php">Đăng nhập tại đây</a>
    </form>
    <?php if (isset($e)) echo "<p>$e</p>"; ?>
</body>
</html>
