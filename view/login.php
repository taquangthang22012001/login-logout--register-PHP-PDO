<?php require_once '../controller/loginController.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng nhập</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="username" placeholder="Tên tài khoản" required>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <button type="submit">Đăng nhập</button>
        <a href="register.php">Đăng ký tại đây</a>
    </form>
    <?php if (isset($e)) echo "<p>$e</p>"; ?>
</body>
</html>
