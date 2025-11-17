<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Our Team</title>
	<link rel="icon" href="./resources/dv2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .about-section {
            text-align: center;
            padding: 50px 20px;
            background-color: #333;
            color: white;
        }

        .team-section {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            background-color: #fff;
            padding: 50px 20px;
        }

        .team-member {
            margin: 20px;
            text-align: center;
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            transition: transform 0.3s ease;
        }

        .team-member img:hover {
            transform: scale(1.1);
        }

        .contact-section {
            background-color: #333;
            color: white;
            padding: 50px 20px;
            text-align: center;
        }

        .contact-item {
            margin: 10px 0;
        }

        .contact-item i {
            margin-right: 10px;
        }

        .social-section {
            background-color: #444;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .social-section a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
            font-size: 24px;
        }

        .social-section a:hover {
            color: #ddd;
        }

        .contact-form {
            background-color: #fff;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form h2 {
            margin-bottom: 20px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .contact-form button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="about-section">
        <h1>About Our Team</h1>
        <p>Welcome to our team page! We are a group of dedicated professionals committed to delivering top-notch services.</p>
    </div>

    <div class="team-section">
        <div class="team-member">
            <img src="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-1/442393421_412283938389946_9169306384099975756_n.jpg?stp=dst-jpg_p200x200&_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=0Wd0Zk3-R8gQ7kNvgETHHD7&_nc_ht=scontent.fhan14-1.fna&oh=00_AYBDhkGxmo0I6B4J-T-8X9p3ocR-cGzt09za0yz9l6TfjQ&oe=6670EBE8" alt="Member 1">
            <h2>Nguyen Dinh Van</h2>
            <p>Designer</p>
        </div>
        <div class="team-member">
            <img src="https://scontent.fhan14-5.fna.fbcdn.net/v/t39.30808-1/448089472_122209900730007252_5397065214512308844_n.jpg?stp=dst-jpg_p200x200&_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=BhaXpwVWw3AQ7kNvgHm8MCx&_nc_ht=scontent.fhan14-5.fna&oh=00_AYDdYv9jeG6jaHEkOf3MJ2qlL7lBYePWDZUahk3Ks8CeRg&oe=6670FBF1" alt="Member 2">
            <h2>Truong Quang Tan</h2>
            <p>Leader</p>
        </div>
        <div class="team-member">
            <img src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-1/448359102_1135655261074852_8666327408886131123_n.jpg?stp=dst-jpg_s200x200&_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=msfw0sMe0e4Q7kNvgH4XSF3&_nc_ht=scontent.fhan14-2.fna&oh=00_AYDIG2wNAtRNSnDwAbV5_fWWJp5iwcZBSajwThXJziXZhg&oe=6670F3D6" alt="Member 1">
            <h2>Bui Le Hoang</h2>
            <p>Development</p>
        </div>
        <div class="team-member">
            <img src="https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-1/441971401_955947229324329_8024663551797608423_n.jpg?stp=dst-jpg_p200x200&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=Q09jpE-3iK8Q7kNvgGKj7LQ&_nc_ht=scontent.fhan14-3.fna&oh=00_AYDIwmaCEN6Op_QfwRlfMcUnZMXAP9VD03FD6AUIlEQELg&oe=6670D101" alt="Member 2">
            <h2>Hoang Manh Dung</h2>
            <p>Development </p>
        </div>
    </div>

    <div class="contact-section">
        <h2>Contact Us</h2>
        <div class="contact-item">
            <i class="fa fa-map-marker"></i>
            <p><a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+H%E1%BB%8Dc+Quy+Nh%C6%A1n/@13.7589597,109.2152824,17z/data=!3m1!4b1!4m6!3m5!1s0x316f6cebf252c49f:0xa83caa291737172f!8m2!3d13.7589597!4d109.2178573!16s%2Fg%2F120ylnmc?hl=vi-VN&entry=ttu"><span>Quy Nhon</span> - Binh Dinh</a></p>
        </div>
        <div class="contact-item">
            <i class="fa fa-phone"></i>
            <p><a href="tel:+84963207146">+84963207146</a></p>
        </div>
        <div class="contact-item">
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:info@yourteam.com">info@yourteam.com</a></p>
        </div>
    </div>

    <div class="social-section">
        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <!-- Add more social icons as needed -->
    </div>

    <!-- Contact form section -->
    <div class="contact-form">
        <h2>Contact Us</h2>
        <form action="your_form_processing_script" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</body>
</html>
