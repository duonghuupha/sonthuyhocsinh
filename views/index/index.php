<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bài giảng - Son Thuy Education</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      height: 100vh;
      margin: 0;
      display: flex;
      background: linear-gradient(180deg, #f1f8e9, #e8f5e9); /* nền pastel xanh nhạt */
      font-family: 'Segoe UI', sans-serif;
    }
    /* Sidebar */
    .sidebar {
      width: 260px;
      background: #2E7D32; /* xanh logo */
      padding: 20px;
      display: flex;
      flex-direction: column;
      color: #fff;
    }
    .sidebar h5 {
      font-weight: bold;
      margin-bottom: 15px;
    }
    .sidebar .form-control {
      border-radius: 20px;
      font-size: 0.9rem;
    }
    .lesson-list {
      margin-top: 20px;
    }
    .lesson-item {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 0.95rem;
      padding: 6px 10px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.2s;
      color: #fff;
    }
    .lesson-item:hover {
      background: #1B5E20;
    }
    .btn-back {
      margin-top: auto;
      border-radius: 20px;
      font-size: 0.85rem;
      background: #66bb6a;
      color: #fff;
    }
    .btn-back:hover {
      background: #43a047;
    }
    /* Main content */
    .main-content {
      flex: 1;
      padding: 20px;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .content-card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.1);
      padding: 15px;
      max-width: 600px;
      text-align: center;
    }
    /* Floating buttons */
    .btn-float {
      position: absolute;
      padding: 10px 16px;
      font-size: 0.9rem;
      border-radius: 12px;
      background: #2E7D32; /* xanh logo */
      color: #fff;
      border: none;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      transition: transform 0.2s, box-shadow 0.2s, background 0.2s;
    }
    .btn-float:hover {
      background: #1B5E20;
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(0,0,0,0.3);
    }
    .btn-media { top: 20px; left: 280px; }
    .btn-flash { top: 20px; right: 20px; }
    .btn-question { bottom: 20px; left: 280px; }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h5>DANH SÁCH BÀI GIẢNG</h5>
    <input type="text" class="form-control" placeholder="Tìm kiếm bài giảng">
    <div class="lesson-list">
      <div class="lesson-item">
        <i class="fa-solid fa-book-open"></i> Unit 1: Hello
      </div>
      <div class="lesson-item">
        <i class="fa-solid fa-book-open"></i> Unit 2: Family
      </div>
    </div>
    <button class="btn btn-back mt-4">
      <i class="fa-solid fa-arrow-left"></i> Về trang quản lý
    </button>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <div class="content-card">
      <h4>Bài giảng sẽ hiển thị tại đây</h4>
      <p>Ví dụ: hình ảnh, sách, flashcard,...</p>
    </div>
    <!-- Floating Buttons -->
    <button class="btn-float btn-media"><i class="fa-solid fa-photo-film"></i> Media</button>
    <button class="btn-float btn-flash"><i class="fa-solid fa-clone"></i> Flash card</button>
    <button class="btn-float btn-question"><i class="fa-solid fa-circle-question"></i> Question</button>
  </div>
</body>
</html>
