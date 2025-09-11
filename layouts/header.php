<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Son Thuy Education</title>
    <link rel="stylesheet" href="<?php echo URL.'/styles/css/' ?>styles.css">
</head>

<body>
    <!-- Header -->
    <header class="navbar">
        <div class="logo">SONTHUY Education</div>
        <nav>
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <!--<li><a href="#">Cấp độ bài thi</a></li>-->
                <li><a href="#">Đăng nhập</a></li>
                <!--<li><a href="#">Đăng ký</a></li>-->
            </ul>
        </nav>
    </header>

    <!-- Banner -->
    <section class="banner">
        <h1>Chào mừng đến với SONTHUY Education</h1>
        <p>Khám phá thế giới tiếng Anh sinh động và thú vị dành cho học sinh từ lớp 1 đến lớp 5.</p>
    </section>

    <!-- Nội dung chính -->
    <main class="exam-container">
        <h2 class="title">CHỌN MỤC BẠN MUỐN KHÁM PHÁ</h2>

        <!-- Nút điều hướng + số trang -->
        <!--<div class="slider-controls">
            <button class="prev">&#10094;</button>
            <span class="page-indicator">1/2</span>
            <button class="next">&#10095;</button>
        </div>-->

        <!-- Slider -->
        <div class="exam-slider">
            <!-- Trang 1 -->
            <div class="exam-page active">
                <div class="exam-card free">
                    <span class="badge">FREE</span>
                    <h3>Cấp độ 1: Start</h3>
                    <p>Phù hợp với các bạn mới bắt đầu làm quen với tiếng Anh.</p>
                </div>

                <div class="exam-card free">
                    <span class="badge">FREE</span>
                    <h3>Cấp độ 2: Grow</h3>
                    <p>Thử thách tiếp theo để nâng cao kỹ năng tiếng Anh của bạn.</p>
                </div>

                <div class="exam-card pro">
                    <span class="badge">PRO</span>
                    <h3>Cấp độ 3: Achieve</h3>
                    <p>Chuẩn bị cho kỳ thi TOEFL Primary với những bài tập nâng cao.</p>
                </div>
            </div>

            <!-- Trang 2 -->
            <div class="exam-page active">
                <div class="exam-card free">
                    <span class="badge">FREE</span>
                    <h3>Cấp độ 4: Review</h3>
                    <p>Tổng hợp kiến thức giúp bạn củng cố vững chắc trước kỳ thi.</p>
                </div>

                <div class="exam-card pro">
                    <span class="badge">PRO</span>
                    <h3>Cấp độ 5: Challenge</h3>
                    <p>Bài tập nâng cao dành cho học sinh muốn đạt kết quả xuất sắc.</p>
                </div>

                <div class="exam-card pro">
                    <span class="badge">PRO</span>
                    <h3>Cấp độ 6: Master</h3>
                    <p>Chinh phục TOEFL Primary với thử thách cao nhất.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2025 TOEFL Primary - Phòng thi ảo FLYER</p>
    </footer>
</body>
</html>