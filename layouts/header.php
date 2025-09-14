<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SONTHUY Education</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL.'/styles/css/' ?>styles.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <header class="bg-success text-white py-3 shadow-sm">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="<?php echo URL.'/styles/images/' ?>logo_son_thuy.png" alt="Logo" class="me-2" style="height:50px;">
                <h1 class="h5 m-0 fw-bold">SONTHUY Education</h1>
            </div>
            <nav>
                <a href="#" class="text-white me-3 text-decoration-none">Trang chủ</a>
                <a href="#" class="text-white text-decoration-none">Đăng nhập</a>
            </nav>
        </div>
    </header>

    <!-- Main -->
    <main class="flex-grow-1">
        <div class="container py-5 text-center">
            <h2 class="fw-bold text-success mb-2">Chào mừng đến với SONTHUY Education</h2>
            <p class="text-muted mb-5">
                Hãy chọn mục bạn muốn khám phá để nâng cao kỹ năng tiếng Anh của mình.
            </p>

            <div class="row g-4">
                <!-- Học -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card card-hover card-green h-100 text-center p-3">
                        <div class="card-body">
                            <i class="fas fa-book-reader fa-3x icon-gradient-green mb-3"></i>
                            <h5 class="card-title text-gradient-green">Học</h5>
                            <p class="card-text">Bài học sinh động giúp bạn tiếp cận kiến thức tiếng Anh hiệu quả.</p>
                        </div>
                    </div>
                </div>
                <!-- Từ vựng -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card card-hover card-blue h-100 text-center p-3">
                        <div class="card-body">
                            <i class="fas fa-language fa-3x icon-gradient-blue mb-3"></i>
                            <h5 class="card-title text-gradient-blue">Từ vựng</h5>
                            <p class="card-text">Kho từ vựng phong phú, dễ nhớ và áp dụng trong giao tiếp.</p>
                        </div>
                    </div>
                </div>
                <!-- Thử thách -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card card-hover card-orange h-100 text-center p-3">
                        <div class="card-body">
                            <i class="fas fa-trophy fa-3x icon-gradient-orange mb-3"></i>
                            <h5 class="card-title text-gradient-orange">Thử thách</h5>
                            <p class="card-text">Các trò chơi và hoạt động giúp bạn rèn luyện kỹ năng tiếng Anh.</p>
                        </div>
                    </div>
                </div>
                <!-- Kiểm tra -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card card-hover card-red h-100 text-center p-3">
                        <div class="card-body">
                            <i class="fas fa-clipboard-check fa-3x icon-gradient-red mb-3"></i>
                            <h5 class="card-title text-gradient-red">Kiểm tra</h5>
                            <p class="card-text">Đánh giá trình độ qua các bài kiểm tra trực tuyến thông minh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-success text-white text-center py-3 mt-auto">
        © 2025 SONTHUY Education - Trung tâm Ngoại ngữ & Kỹ năng sống
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>