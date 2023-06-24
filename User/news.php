<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <<?php require_once("Layout/head.php");?>
</head>
<body>
    <?php require_once("Layout/header.php");?>

    <?php
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
        ?>
    </main>
    
</body>
</html>