<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan Tembakau</title>
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

        #feedback {
            padding: 120px 40px 40px 40px;
        }

        #feedback .card {
            padding: 20px;
            border-radius: 4px;
            border: 1px solid #ddd;
            margin: 20px 0 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #feedback .card h3 {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="name">
            <h3>PT. Mugiwara Grup</h3>
        </div>
        <div class="menu">
            <a href="index.php">Back</a>
        </div>
    </nav>

    <section id="feedback">
        <?php
            include "connection.php";

            $sql = "SELECT * FROM feedback";
            $result = $conn->query($sql);

            if ($result) {
                while ($row = $result->fetch_array()) {
                    echo "<div class='card'>
                    <h3>".$row['name']."</h3>
                    <p>".$row['message']."</p>
                </div>";
                }
            } else {
                echo "<div class='card'>
                    <h3>Error</h3>
                    <p>Refresh Please!</p>
                </div>";
            }
        ?>
    </section>
</body>
</html>