<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Yang Penting Merah</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            color: #333;
            background-color: #f5f5f5;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        
        /* Header */
        header {
            background-color: #333;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
        }
        header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        nav ul {
            list-style: none;
            display: flex;
        }
        nav ul li {
            margin-left: 20px;
        }
        nav ul li a {
            color: #fff;
            font-weight: bold;
        }

        /* Hero Section */
        .hero {
            background-image: url("bg2.png"); no-repeat center center/cover;
            height: 80vh;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
        }
        .hero h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }
        .hero p {
            font-size: 18px;
            max-width: 600px;
        }
        .hero a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .hero a:hover {
            background-color: #45a049;
        }

        /* Services Section */
        .services {
            padding: 40px 20px;
            text-align: center;
        }
        .services h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .service-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .service-box {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 250px;
            text-align: center;
            transition: transform 0.3s;
        }
        .service-box:hover {
            transform: scale(1.05);
        }
        .service-box h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .service-box p {
            font-size: 16px;
            color: #666;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
        }
        footer p {
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <div class="logo">Project UAS CRUD</div>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="crud/index.php">Crud</a></li>
            <li><a href="#services">Layanan</a></li>
            <li><a href="kontak.php">Kontak</a></li>
        </ul>
    </nav>
</header>

<!-- Hero Section -->
<section class="hero" id="home">
    <h1>Selamat Datang di Website kami!!</h1>
    <p>Menyediakan solusi teknologi inovatif untuk membantu bisnis Anda berkembang pesat di era digital.</p>
    <a href="#services">Jelajahi Layanan Kami</a>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <h2>Layanan Kami</h2>
    <div class="service-container">
        <div class="service-box">
            <h3>Pengembangan Web</h3>
            <p>Solusi web custom dan berkinerja tinggi untuk kebutuhan bisnis Anda.</p>
        </div>
        <div class="service-box">
            <h3>Aplikasi Crud</h3>
            <p>Pengembangan aplikasi mobile yang responsif dan user-friendly.</p>
        </div>
        <div class="service-box">
            <h3>Konsultasi IT</h3>
            <p>Bantuan ahli dalam mengembangkan strategi IT yang efisien dan efektif.</p>
        </div>
    </div>
</section>



</body>
</html>
