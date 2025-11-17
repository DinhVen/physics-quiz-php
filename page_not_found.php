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
    <title>Thông Tin Chung</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="icon" href="./resources/dv2.png">
    <link rel="stylesheet" href="css/index.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }

        #container {
            max-width: 1200px;
            margin: 0 auto;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container-content {
            padding: 20px;
        }

        .box-content {
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            background: #fafafa;
        }

        .box-content h1 {
            font-family: 'Cookie', cursive;
            font-size: 3em;
            color: #333;
            margin-bottom: 20px;
            text-shadow: 2px 2px #ccc;
        }

        .box-content p {
            font-size: 1.1em;
            color: #666;
            margin: 10px 0;
        }

        .box-content a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            color: #fff;
            background: #333;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .box-content a:hover {
            background: #555;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-card {
            background: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            margin: 10px 0;
            width: 80%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .contact-card:active {
            transform: scale(0.95); /* Hiệu ứng khi nhấp chuột vào */
        }

        .contact-card p {
            display: flex;
            align-items: center;
            font-size: 1.1em;
            color: #333;
            margin: 10px 0;
            flex-wrap: wrap;
        }

        .contact-card p i {
            margin-right: 10px;
            color: #007BFF;
        }

        .contact-card a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 16px;
            color: #fff;
            background: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .contact-card a:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <div id="container">
        <?php require_once("./html/header.php"); ?>

        <div class="container-content">
            <div id="box-content" class="box-content">
                <h1>Những Người Thực Hiện</h1>
                <div class="contact-info">
                    <div class="contact-card">
                        <p><i class="fa fa-user"></i> <strong>Trương Quang Tấn</strong></p>
                        <p><i class="fa fa-home"></i> Quê quán: Bình Định</p>
                        <p><i class="fa fa-birthday-cake"></i> Ngày sinh: 14/03/2004</p>
                        <p><i class="fa fa-briefcase"></i> Lĩnh vực: Phát triển Web</p>
                        <a href="https://www.facebook.com/profile.php?id=61550217586846" target="_blank">Xem Facebook</a>
                    </div>
                    <div class="contact-card">
                        <p><i class="fa fa-user"></i> <strong>Nguyễn Đình Văn</strong></p>
                        <p><i class="fa fa-home"></i> Quê quán: Bình Định</p>
                        <p><i class="fa fa-birthday-cake"></i> Ngày sinh: 05/09/2004</p>
                        <p><i class="fa fa-briefcase"></i> Lĩnh vực: Thiết kế UX/UI</p>
                        <a href="https://www.facebook.com/nguyendinhvan204" target="_blank">Xem Facebook</a>
                    </div>
                    <div class="contact-card">
						<p><i class="fa fa-user"></i> <strong>Bùi Lê Hoàng</strong></p>
						<p><i class="fa fa-home"></i> Quê quán: Bình Định</p>
						<p><i class="fa fa-birthday-cake"></i> Ngày sinh: 08/10/2004</p>
						<p><i class="fa fa-briefcase"></i> Lĩnh vực: An ninh mạng</p>
						<a href="https://www.facebook.com/profile.php?id=100038911664454" target="_blank">Xem Facebook</a>
					</div>
					<div class="contact-card">
						<p><i class="fa fa-user"></i> <strong>Hoàng Mạnh Dũng</strong></p>
						<p><i class="fa fa-home"></i> Quê quán: Bình Định</p>
						<p><i class="fa fa-birthday-cake"></i> Ngày sinh: 04/11/2004</p>
						<p><i class="fa fa-briefcase"></i> Lĩnh vực: Phát triển phần mềm</p>
						<a href="https://www.facebook.com/profile.php?id=100047271830139" target="_blank">Xem Facebook</a>
					</div>

