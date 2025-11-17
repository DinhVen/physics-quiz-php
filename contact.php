<?php
    session_start();
    require_once("./php/connect_MySQL_n_log.php");
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="icon" href="./resources/dv2.png">
    <link rel="stylesheet" href="css/index.css">
    <title>Thông Tin Chung</title>
    <style>
        <style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background: #f0f2f5;
    }
    #container {
        max-width: 1200px;
        margin: 0 auto;
        background: #fff;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }
    .container-content {
        padding: 30px;
    }
    .box-content {
        text-align: center;
        padding: 30px;
        border: 1px solid #ddd;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }
    .box-content h1 {
        font-family: 'Cookie', cursive;
        font-size: 3.5em;
        color: #333;
        margin-bottom: 25px;
        text-shadow: 2px 2px #ccc;
    }
    .box-content p {
        font-size: 1.2em;
        color: #666;
        margin: 10px 0;
    }
    .box-content a {
        display: inline-block;
        margin-top: 20px;
        padding: 12px 25px;
        color: #fff;
        background: #007BFF;
        text-decoration: none;
        border-radius: 5px;
        transition: background 0.3s;
    }
    .box-content a:hover {
        background: #0056b3;
    }
    .contact-info {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 20px;
    }
    .contact-card {
        background: #fff;
        border: 1px solid #ddd;
        padding: 30px;
        width: calc(45% - 40px);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }
    .contact-card img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin-bottom: 20px;
    }
    .contact-card p {
        font-size: 1.2em;
        color: #333;
        margin: 10px 0;
    }
    .contact-card p i {
        margin-right: 10px;
        color: #007BFF;
    }
    @media (max-width: 768px) {
        .contact-card {
            width: calc(100% - 40px);
        }
    }
	/* CSS cho liên kết Trở Về Trang Chủ */
    .back-to-home-link {
        display: inline-block;
        padding: 12px 25px;
        margin-top: 20px;
        color: #fff;
        background-color: #007BFF;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .back-to-home-link:hover {
        background-color: #0056b3;
    }
</style>
``

    </style>
</head>

<body>
    <div id="container">
        <?php require_once("./html/header.php"); ?>
        <!--Nội dung của trang-->
        <div class="container-content">
            <div id="box-content" class="box-content">
                <h1>Contact Us</h1>
                <div class="contact-info">
    <div class="contact-card">
        <img src="https://scontent.fhan14-5.fna.fbcdn.net/v/t39.30808-1/448089472_122209900730007252_5397065214512308844_n.jpg?stp=dst-jpg_p200x200&_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=BhaXpwVWw3AQ7kNvgHm8MCx&_nc_ht=scontent.fhan14-5.fna&oh=00_AYDdYv9jeG6jaHEkOf3MJ2qlL7lBYePWDZUahk3Ks8CeRg&oe=6670FBF1" alt="Trương Quang Tấn">
        <p><i class="fa fa-user"></i> <strong>Trương Quang Tấn</strong></p>
        <p><i class="fa fa-phone"></i> +84962082590</p>
        <p><i class="fa fa-envelope"></i> tantruong123@gmail.com</p>
        <a href="https://www.facebook.com/profile.php?id=61550217586846" target="_blank">Xem Facebook</a>
    </div>
    <div class="contact-card">
        <img src="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-1/442393421_412283938389946_9169306384099975756_n.jpg?stp=dst-jpg_p200x200&_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=0Wd0Zk3-R8gQ7kNvgETHHD7&_nc_ht=scontent.fhan14-1.fna&oh=00_AYBDhkGxmo0I6B4J-T-8X9p3ocR-cGzt09za0yz9l6TfjQ&oe=6670EBE8" alt="Nguyễn Đình Văn">
        <p><i class="fa fa-user"></i> <strong>Nguyễn Đình Văn</strong></p>
        <p><i class="fa fa-phone"></i> +84963207146</p>
        <p><i class="fa fa-envelope"></i> dinhvan.ceo@gmail.com</p>
        <a href="https://www.facebook.com/nguyendinhvan204" target="_blank">Xem Facebook</a>
    </div>
    <div class="contact-card">
        <img src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-1/448359102_1135655261074852_8666327408886131123_n.jpg?stp=dst-jpg_s200x200&_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=msfw0sMe0e4Q7kNvgH4XSF3&_nc_ht=scontent.fhan14-2.fna&oh=00_AYDIG2wNAtRNSnDwAbV5_fWWJp5iwcZBSajwThXJziXZhg&oe=6670F3D6" alt="Bùi Lê Hoàng">
        <p><i class="fa fa-user"></i> <strong>Bùi Lê Hoàng</strong></p>
        <p><i class="fa fa-phone"></i> +84385506708</p>
        <p><i class="fa fa-envelope"></i> builehoang@gmail.com</p>
        <a href="https://www.facebook.com/profile.php?id=100038911664454" target="_blank">Xem Facebook</a>
    </div>
    <div class="contact-card">
        <img src="https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-1/441971401_955947229324329_8024663551797608423_n.jpg?stp=dst-jpg_p200x200&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=Q09jpE-3iK8Q7kNvgGKj7LQ&_nc_ht=scontent.fhan14-3.fna&oh=00_AYDIwmaCEN6Op_QfwRlfMcUnZMXAP9VD03FD6AUIlEQELg&oe=6670D101" alt="Hoàng Mạnh Dũng">
        <p><i class="fa fa-user"></i> <strong>Hoàng Mạnh Dũng</strong></p>
        <p><i class="fa fa-phone"></i> +84367043652</p>
        <p><i class="fa fa-envelope"></i> autucute@gmail.com</p>
        <a href="https://www.facebook.com/profile.php?id=100047271830139" target="_blank">Xem Facebook</a>
    </div>
</div>

                </div>
                <a href="./index.php" class="back-to-home-link">Trở Về Trang Chủ</a>

            </div>
        </div>
        <?php 
            echo file_get_contents("./html/footer.html");
            require_once("./php/review_retrieve_data.php");
        ?>
    </div>
</body>

</html>
