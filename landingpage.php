<?php
$title = "Kent Studio";
$tagline = "Where Creativity Meets Technology";
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #111;
            color: white;
        }
        header {
            background: linear-gradient(135deg, #ff0080, #7928ca);
            height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 20px;
        }
        header h1 {
            font-size: 3rem;
            margin: 0;
        }
        header p {
            font-size: 1.3rem;
            margin-top: 10px;
            opacity: 0.9;
        }
        main {
            padding: 50px 20px;
            max-width: 1100px;
            margin: auto;
        }
        h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2rem;
            color: #ffcc00;
        }
        .card-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card {
            background: #1c1c1c;
            border-radius: 15px;
            padding: 25px;
            flex: 1 1 280px;
            max-width: 300px;
            text-align: center;
            box-shadow: 0 0 15px rgba(255, 0, 128, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 25px rgba(255, 0, 128, 0.7);
        }
        .card img {
            width: 80px;
            height: 80px;
            object-fit: contain;
            margin-bottom: 15px;
        }
        footer {
            background: #000;
            color: #888;
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
            font-size: 0.9rem;
        }
        footer span {
            color: #ff0080;
        }
    </style>
</head>
<body>

<header>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $tagline; ?></p>
</header>

<main>
    <h2>What We Do</h2>
    <div class="card-container">
        <div class="card">
            <img src="pencil.png" alt="Design">
            <h3>Creative Design</h3>
            <p>We craft visually stunning digital experiences that leave an impact.</p>
        </div>
        <div class="card">
            <img src="laptop.png" alt="Development">
            <h3>Web Development</h3>
            <p>From concept to code, we build responsive, high-performance sites.</p>
        </div>
        <div class="card">
            <img src="gear.png" alt="Branding">
            <h3>Brand Identity</h3>
            <p>We create brands that connect emotionally with your audience.</p>
        </div>
    </div>
</main>

<footer>
    &copy; <?php echo $year; ?> <span><?php echo $title; ?></span>. All rights reserved.
</footer>

</body>
</html>
