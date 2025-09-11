<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - TOEFL Primary</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo URL.'/styles/css/' ?>login.css">
</head>

<body>
    <header>
        SONTHUY EDUCATION
        <nav>
            <a href="#">Trang chủ</a>
        </nav>
    </header>

    <div class="login-container">
        <div class="login-box">
            <div class="icon"><i class="fa fa-graduation-cap"></i></div>
            <h2>Đăng nhập</h2>
            <form>
                <div class="input-group">
                    <input type="text" placeholder="Tên đăng nhập">
                    <i class="fa fa-user"></i>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Mật khẩu">
                    <i class="fa fa-lock"></i>
                </div>
                <button type="submit">Đăng nhập</button>
            </form>
            <div class="links">
                <a href="#">Quên mật khẩu?</a> |
                <a href="#">Tạo tài khoản</a>
            </div>
        </div>
    </div>

    <footer>
        © 2025 TOEFL Primary - Phòng thi ảo FLYER
    </footer>
</body>

</html>