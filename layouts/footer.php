<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập - SONTHUY Education</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(to bottom right, #e0f7fa, #fce4ec);
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
    }
    .login-card {
      width: 100%;
      max-width: 380px;
      padding: 2rem;
      border-radius: 1rem;
      background: #fff;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .login-card .icon {
      font-size: 2.5rem;
      color: #2e7d32;
      margin-bottom: 0.8rem;
    }
    .login-card h4 {
      font-weight: 600;
      margin-bottom: 1.5rem;
    }
    .form-control {
      height: 40px;
      font-size: 0.9rem;
      border-radius: 0.5rem;
      padding-left: 40px; /* để icon không chồng lên chữ */
    }
    .input-icon {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: #6c757d;
      font-size: 0.9rem;
    }
    .form-group {
      position: relative;
      margin-bottom: 1rem;
    }
    .btn-login {
      background: linear-gradient(45deg, #43a047, #2e7d32);
      border: none;
      color: #fff;
      font-weight: 600;
      border-radius: 0.6rem;
      padding: 10px;
      transition: 0.3s;
    }
    .btn-login:hover {
      opacity: 0.9;
      transform: translateY(-2px);
    }
    .login-card a {
      font-size: 0.85rem;
      color: #2e7d32;
      text-decoration: none;
    }
    .login-card a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <div class="icon"><i class="fas fa-graduation-cap"></i></div>
    <h4>Đăng nhập</h4>
    <form>
      <div class="form-group">
        <span class="input-icon"><i class="fas fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Tên đăng nhập">
      </div>
      <div class="form-group">
        <span class="input-icon"><i class="fas fa-lock"></i></span>
        <input type="password" class="form-control" placeholder="Mật khẩu">
      </div>
      <button type="submit" class="btn btn-login w-100 mb-3">Đăng nhập</button>
      <div class="d-flex justify-content-between">
        <a href="#">Quên mật khẩu?</a>
        <a href="#">Tạo tài khoản</a>
      </div>
    </form>
  </div>
</body>
</html>
