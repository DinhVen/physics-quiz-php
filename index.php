<?php
    session_start();
    require_once("./php/connect_MySQL_n_log.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <title>Trang Chủ</title>
    <link rel="icon" href="./resources/dv2.png">
    <link rel="stylesheet" href="css/index.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f0f2f5;
            color: #333;
        }

        #container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            position: relative;
            overflow: hidden;
        }

        .container-content {
            padding: 20px;
        }

        .box-content {
            background: linear-gradient(135deg, #007bff, #6610f2);
            border-radius: 15px;
            padding: 30px;
            color: #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
            text-align: center;
            transition: background-color 0.3s, box-shadow 0.3s;
            cursor: pointer; /* Con trỏ chuột thành bàn tay khi di chuột qua */
            position: relative;
        }

        .box-content:hover {
            background: linear-gradient(135deg, #6610f2, #007bff);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .box-content h1 {
            font-size: 2.5em;
            color: #ffdd57;
            margin-bottom: 20px;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .box-content p {
            font-size: 1.2em;
            line-height: 1.8;
            margin-bottom: 20px;
            color: #e9ecef;
        }

        @media (max-width: 768px) {
            .box-content {
                padding: 20px;
            }

            .box-content h1 {
                font-size: 2em;
            }

            .box-content p {
                font-size: 1em;
            }
        }

        .flower-rain {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .flower {
            position: absolute;
            background-image: url('resources/hoa2.png');
            background-size: contain;
            width: 30px;
            height: 30px;
            animation: fall 10s linear infinite;
            pointer-events: none;
        }

        @keyframes fall {
            0% {
                transform: translateY(-100px) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <div id="container">
        <?php require_once("./html/header.php"); ?>

        <div class="container-content">
            <!--Nội dung của trang-->
            <div class="box-content">
                <h1>Chào mừng đến với Web thi Vật lý trắc nghiệm online!</h1>

                <p>Bài thi trắc nghiệm: Trang web cung cấp một loạt các bài thi trắc nghiệm với nhiều cấp độ khác nhau, từ cơ bản đến nâng cao. Bạn có thể chọn bài thi phù hợp với trình độ của mình và hoàn thành trong thời gian giới hạn.</p>

                <p>Thống kê kết quả: Sau khi hoàn thành bài thi, bạn có thể xem kết quả và nhận phản hồi chi tiết về những câu trả lời đúng và sai. Bạn cũng có thể xem điểm số tổng quan và thống kê tiến bộ của bản thân trong quá trình học.</p>

                <p>Học liệu và tài liệu tham khảo: Trang web cung cấp các tài liệu học tập và tài liệu tham khảo để bạn nắm vững kiến thức vật lý. Bạn có thể tìm hiểu các khái niệm, lý thuyết và bài tập để rèn kỹ năng giải quyết các bài toán vật lý.</p>

                
				<p>Thông tin cá nhân và theo dõi tiến độ: Trang web cho phép bạn tạo một tài khoản cá nhân, nơi bạn có thể theo dõi tiến độ học tập, lưu trữ kết quả bài thi và tùy chỉnh cài đặt cá nhân.</p>
            </div>
        </div>

        <!-- Thêm phần hoa rơi -->
        <div class="flower-rain"></div>

        <?php echo file_get_contents("./html/footer.html"); ?>
    </div>

    <!-- JavaScript cho hoa rơi -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            createFlowers();
        });

        function createFlowers() {
            const numberOfFlowers = 30; // Số lượng hoa rơi

            for (let i = 0; i < numberOfFlowers; i++) {
                createFlower();
            }
        }

        function createFlower() {
            const flower = document.createElement('div');
            flower.classList.add('flower');

            // Random vị trí bắt đầu và độ trễ xuất hiện
            const startDelay = Math.random() * 5; // Độ trễ từ 0 đến 5s
            const startPosition = Math.random() * window.innerWidth; // Vị trí ngẫu nhiên theo chiều rộng màn hình

            flower.style.left = startPosition + 'px';
            flower.style.animationDelay = startDelay + 's';

            document.querySelector('.flower-rain').appendChild(flower);

            // Xóa hoa sau khi hoàn thành animation
            flower.addEventListener('animationend', function () {
                flower.remove();
                createFlower(); // Tạo hoa mới sau khi xóa
            });
        }
    </script>

</body>

</html>
