Quan trọng: Phải chạy file create_database_with_data đầu tiên để tạo database của web.
# Database Setup
1. Import file /php/create_database_with_data.sql vào MySQL.
2. Tạo database tên: ggc_quiz
3. Cấu hình kết nối trong file /php/config.php:
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $db   = 'ggc_quiz';
