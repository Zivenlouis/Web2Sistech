<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <<?php require_once("Layout/head.php");?>

    <style>
        /* main {
            height: -60vh;
        } */

        h1 {
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 50px;
        }

        .container {
            display: grid;
            grid-template-columns: auto auto;
        }
        
        .item {
            display: flex;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border: 1px solid;
            border-color: #a3edfa;
        }

        a {
            text-decoration: none;
            color: white;
        }

        img {
            width: 150px;
        }
    </style>
</head>
<body>
    <?php require_once("Layout/header.php");?>

    <main>
        <!-- <?php
            // Simulated news data
            $news = array(
                array(
                    'title' => 'Breaking News',
                    'category' => 'Politics',
                    'date' => 'June 22, 2023',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at magna vitae ex ullamcorper efficitur. Nullam et tellus ultricies, gravida elit et, maximus nisl.'
                ),
                array(
                    'title' => 'Economy Update',
                    'category' => 'Business',
                    'date' => 'June 21, 2023',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at magna vitae ex ullamcorper efficitur. Nullam et tellus ultricies, gravida elit et, maximus nisl.'
                ),
                array(
                    'title' => 'Sports News',
                    'category' => 'Sports',
                    'date' => 'June 20, 2023',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at magna vitae ex ullamcorper efficitur. Nullam et tellus ultricies, gravida elit et, maximus nisl.'
                )
            );

            // Display news articles
            foreach ($news as $article) {
                echo '<article>';
                echo '<h2>' . $article['title'] . '</h2>';
                echo '<p><strong>Category:</strong> ' . $article['category'] . '</p>';
                echo '<p><strong>Date:</strong> ' . $article['date'] . '</p>';
                echo '<p>' . $article['content'] . '</p>';
                echo '</article>';
            }
        ?> -->

        <div class="background">
            <div class="eclipse1"></div>
            <div class="eclipse2"></div>
            <div class="eclipse3"></div>
            <div class="eclipse4"></div>
        </div>

        <h1>NEWS</h1>

        <div class="container">
            <div class="item">
                <a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti architecto, quis porro quo nobis hic in quaerat aliquid laudantium amet voluptatibus explicabo cum sequi placeat perspiciatis. Illum accusamus optio eaque!</a>
                <img src="Image/Header/logo.png" alt="">
            </div>
            <div class="item">
                <a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti architecto, quis porro quo nobis hic in quaerat aliquid laudantium amet voluptatibus explicabo cum sequi placeat perspiciatis. Illum accusamus optio eaque!</a>
                <img src="Image/Header/logo.png" alt="">
            </div>
            <div class="item">
                <a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti architecto, quis porro quo nobis hic in quaerat aliquid laudantium amet voluptatibus explicabo cum sequi placeat perspiciatis. Illum accusamus optio eaque!</a>
                <img src="Image/Header/logo.png" alt="">
            </div>
            <div class="item">
                <a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti architecto, quis porro quo nobis hic in quaerat aliquid laudantium amet voluptatibus explicabo cum sequi placeat perspiciatis. Illum accusamus optio eaque!</a>
                <img src="Image/Header/logo.png" alt="">
            </div>
            <div class="item">
                <a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti architecto, quis porro quo nobis hic in quaerat aliquid laudantium amet voluptatibus explicabo cum sequi placeat perspiciatis. Illum accusamus optio eaque!</a>
                <img src="Image/Header/logo.png" alt="">
            </div>
            <div class="item">
                <a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti architecto, quis porro quo nobis hic in quaerat aliquid laudantium amet voluptatibus explicabo cum sequi placeat perspiciatis. Illum accusamus optio eaque!</a>
                <img src="Image/Header/logo.png" alt="">
            </div>
        </div>  
    </main>

    <?php require_once("Layout/footer.php"); ?>
</body>
</html>