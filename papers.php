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
    <title>Tài liệu</title>
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
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .container-content {
            padding: 20px;
        }
        .box-content {
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            background: #fafafa;
            margin-bottom: 20px;
        }
        .box-content h1 {
            font-family: 'Cookie', cursive;
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
        }
        .box-content a {
            display: inline-block;
            margin: 10px 0;
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
        .box-content label,
        .box-content input[type="text"] {
            margin: 10px 0;
            font-size: 1.1em;
        }
        .box-content input[type="button"] {
            padding: 5px 10px;
            font-size: 1em;
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .box-content input[type="button"]:hover {
            background: #0056b3;
        }
        .box-content iframe {
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>
    <div id="container">
        <?php require_once("./html/header.php"); ?>
        
        <!--Nội dung của trang-->
        <div class="container-content">
            <div class="box-content">
                <h1>Tài liệu tham khảo</h1>
                <a href="https://www.vnteach.com/tai-lieu-mon-vat-li">Tài liệu mẫu 1</a>
                <a href="https://thuvienhoclieu.com/tai-lieu-vat-li/">Tài liệu mẫu 2</a>
                
                <iframe id="yt-iframe" width="650" height="366" src="https://www.youtube.com/embed/goXoezdP2To?si=CCr2uwfXtThMBrbF"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>

        <?php 
            echo file_get_contents("./html/footer.html");
        ?>
    </div>

    <script>
        const ytGoTo = () => {
            let link = document.getElementById("yt-url").value;
            if (link.includes("watch?v=")) {
                link = link.replace("watch?v=", "embed/");
            } else if (link.includes("youtu.be")) {
                link = link.replace("youtu.be", "youtube.com/embed");
            }
            if (!link.includes("https://")) {
                link = "https://" + link;
            }
            if (link.includes("playlist")) {
                link = link.replace("playlist?", "embed/videoseries?");
            } else if (link.includes("list")) {
                deleteStr = link.slice(link.lastIndexOf("/") + 1, link.indexOf("&list") + 1);
                link = link.replace(deleteStr, "");
                link = link.replace("embed/", "embed/videoseries?");
            }
            document.getElementById("yt-iframe").src = link;
        }

        const checkEnter = (event) => {
            if (event.keyCode == 13) {
                ytGoTo();
            }
        }
    </script>
</body>

</html>
