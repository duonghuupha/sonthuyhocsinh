<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - SONTHUY Education</title>
    <link rel="stylesheet" href="<?php echo URL.'/styles/css/' ?>roboto.css"/>
    <link href="<?php echo URL.'/styles/css/' ?>bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo URL.'/styles/css/' ?>all.min.css" rel="stylesheet"/>
    <link href="<?php echo URL.'/styles/css/' ?>jquery.toast.css" rel="stylesheet"/>
    <link href="<?php echo URL.'/styles/css/' ?>login.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="<?php echo URL ?>/styles/images/logo_son_thuy.png" />
    <script>
        var baseUrl = '<?php echo URL; ?>';
    </script>
</head>

<body>
    <div class="background"></div>
    <div class="login-card">
        <div class="icon"><i class="fas fa-graduation-cap"></i></div>
        <h4>Đăng nhập</h4>
        <form id="loginForm" method="POST">
            <div class="form-group">
                <span class="input-icon"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Tên đăng nhập" required=""
                id="username" name="username"/>
            </div>
            <div class="form-group">
                <span class="input-icon"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Mật khẩu" required=""
                id="password" name="password"/>
            </div>
            <button type="button" class="btn btn-login w-100 mb-3" onclick="handleLogin()">Đăng nhập</button>
            <div class="text-center justify-content-between">
                <a href="javascript:void(0)">Quên mật khẩu?</a>
            </div>
        </form>
    </div>
    <script src="<?php echo URL.'/public/' ?>/login.js"></script>
    <script src="<?php echo URL.'/styles/' ?>js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo URL.'/styles/' ?>js/jquery.toast.js"></script>
    <script src="<?php echo URL.'/public/' ?>properties.js"></script>
</body>
</html>