<?php
    include "connection.php";

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO feedback VALUES (NULL, '$name', '$email', '$message')";
        $result = $conn->query($sql);

        if ($result) {
            header("Location: feedback.php");
        } else {
            header("Refresh: 0");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Mugiwara Grup</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
        }

        nav {
            width: 97%;
            padding: 1em;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            background-color: #333;
            flex-wrap: wrap;
            padding: 30px 30px;
        }

        nav .menu {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            text-align: center;
        }

        nav .name h3 {
            color: white;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        #home {
            padding-top: 30px;
        }

        #tentang {
            height: 100vh;
        }

        #home .jumbotron {
            width: 100%;
            height: 96vh;
            background: url('https://images.theconversation.com/files/208871/original/file-20180305-65529-y1v85x.jpg');
            background-size: cover;
            text-align: center;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        #home .jumbotron h1 {
            margin: 0.83em 0 0.83em 0;
        }

        #tentang {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        #tentang h1 {
            margin: 0.83em 0 0.83em 0;
        }

        #tentang .image img {
            width: 300px;
        }

        #tentang .container {
            padding: 50px;
        }

        #tentang .container h2 {
            margin: 0.83em 0 0.83em 0;
        }

        #tentang .container p {
            text-align: justify;
        }

        #produk {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        #produk .title {
            padding: 30px 0;
        }

        #produk .container {
            display: block;
        }

        #produk .container .produk-item {
            background-color: white;
            border: 1px solid #ddd;
            margin: 20px 0 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 15px;
        }

        #produk .container .produk-item img {
            width: 270px;
            border-radius: 6px;
        }

        #feedback {
            display: flex;
            height: 100vh;
            width: 100%;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        form {
            width: 100%;
            margin: 0 auto;
        }

        #feedback .form {
            width: 80%;
        }

        .title h2 {
            padding: 30px 0;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #333;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #feedback a {
            color: #333;
            padding: 0 30px;
            text-decoration: none;
        }

        #location {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        #location .maps {
            width: 90%;
            height: 60%;
        }

        #location .description {
            padding: 20px 0;
        }

        #location iframe {
            width: 100%;
            height: 100%;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em 0;
        }

        @media (min-width: 992px) {
            #tentang {
                flex-direction: row;
            }

            #tentang .image img {
                width: 500px;
            }

            #tentang .container {
                width: 50%;
            }

            #produk {
                height: 100vh;
            }

            #produk .container {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 30px;
            }

            #produk .container .produk-item {
                margin: 0;
            }

            #feedback {
                flex-direction: row;
            }
        }


    </style>
</head>
<body>
    <nav>
        <div class="name">
            <h3>PT. Mugiwara Grup</h3>
        </div>
        <div class="menu">
            <a href="#home">Beranda</a>
            <a href="#tentang">Tentang Kami</a>
            <a href="#produk">Produk</a>
            <a href="#location">Location</a>
            <a href="#feedback">Feedback</a>
        </div>
    </nav>

    <section id="home">
        <div class="jumbotron">
            <h1>Selamat Datang di Perusahaan Tembakau</h1>
            <p>Produk Tembakau Terbaik untuk Anda</p>
        </div>
    </section>

    <section id="tentang">
        <div class="image">
            <img src="https://magelangekspres.disway.id/upload/25677447f8dc56ecf41c8c722c0f4d32.jpg" alt="">
        </div>
        <div class="container">
            <h2>Tentang kami</h2>
            <p>
               PT. Mugiwara Grup merupakan salah satu Perusahaan pelopor tembakau di Indonesia. Didirikan pada 14 November 1976 oleh Muhamad Dhani Rizky dan berpusat di kota Bekasi, Jawa Barat. Mugiwara Grup merupakan pemilik dari merek Tembakau terkenal Zhongnanhai, saat ini perusahaan Mugiwara Grup menduduki posisi ke 7 dalam industri tembakau di Indonesia.
            </p>
        </div>
    </section>

    <section id="produk">
        <div class="title">
            <h2>Produk Kami</h2>
        </div>
        <div class="container">
            <div class="produk-item">
                <img src="https://mediaini.com/wp-content/uploads/2021/09/merek-tembakau-tingwe-byPixabay.jpg" alt="Produk 1">
                <p>Deskripsi Produk 1</p>
            </div>
            <div class="produk-item">
                <img src="./tembakau_fanila.jpg" alt="Produk 2">
                <p>Deskripsi Produk 2</p>
            </div>
            <div class="produk-item">
                <img src="https://mediaini.com/wp-content/uploads/2021/09/merek-tembakau-tingwe-byPixabay.jpg" alt="Produk 2">
                <p>Deskripsi Produk 3</p>
            </div>
            <div class="produk-item">
                <img src="https://mediaini.com/wp-content/uploads/2021/09/merek-tembakau-tingwe-byPixabay.jpg" alt="Produk 2">
                <p>Deskripsi Produk 4</p>
            </div>
            <div class="produk-item">
                <img src="https://mediaini.com/wp-content/uploads/2021/09/merek-tembakau-tingwe-byPixabay.jpg" alt="Produk 2">
                <p>Deskripsi Produk 5</p>
            </div>
            <div class="produk-item">
                <img src="https://mediaini.com/wp-content/uploads/2021/09/merek-tembakau-tingwe-byPixabay.jpg" alt="Produk 2">
                <p>Deskripsi Produk 6</p>
            </div>
        </div>
    </section>

    <section id="location">
        <div class="title">
            <h2>Location</h2>
        </div>
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6242943.391491654!2d122.13547891784671!3d40.17986499408576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357e02dae64f4337%3A0x3a0b871c3e1d861c!2sKorea%20Utara!5e0!3m2!1sid!2sid!4v1700097688730!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="description">
            <p>sunan, kota pyongyang.</p>
        </div>
    </section>

    <section id="feedback">
        <div class="form">
            <div class="title">
                <h2>Feedback</h2>
            </div>
            <form class="input" action="index.php" method="post">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="message" rows="4" required></textarea>

                <button type="submit" name="submit">Kirim Pesan</button>
                <a href="feedback.php">Lihat Pesan</a>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 Perusahaan Tembakau. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
</body>
</html>