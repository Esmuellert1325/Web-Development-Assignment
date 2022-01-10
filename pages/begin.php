<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="res/style.css">
    <title>RAGC</title>
</head>
<body>
    <header>
        <a href="index.php" class="title">Retro Arcade Game Cave</a>

<!-- Szlogen változtatása-->
<?php
    $slogans = [
        'The place for retro game experience',
        'Your childhood in one place',
        'Let the nostalgia lead you'
    ];

    $r = rand(0, count($slogans)-1);

    echo '<span class="slogan">' . $slogans[$r] . '</span>';

    // Aloldal nevének kiírása
    $page = 'home';

    if (isset($_GET['page'])) 
    {
        $page = $_GET['page'];
    }

    $page_title = "";

    switch ($page) 
    {
        case 'home': 
            $page_title = "Home";
            break;
        case 'gamecave': 
            $page_title = "Game Cave";
            break;
        case 'articles': 
            $page_title = "Articles";
            break;
        case 'donations': 
            $page_title = "Doantions";
            break;
    }

    echo '<span class="mainTitle">' . $page_title . '</span>';
?>

        <nav>
            <button class="hamburger" id="hamburger">
                <div class="hamburger-bar"></div>
                <div class="hamburger-bar"></div>
                <div class="hamburger-bar"></div>
            </button>
            <ul class="nav-ul" id="nav-ul">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=gamecave">Game Cave</a></li>
                <li><a href="index.php?page=articles">Articles</a></li>
                <li><a href="index.php?page=donations">Donations</a></li>
            </ul>
        </nav>
    </header>
    <script type="text/javascript">
        const hamburger = document.getElementById('hamburger');
        const navUL = document.getElementById('nav-ul');

        hamburger.addEventListener('click', () => {
            navUL.classList.toggle('show');
        });
    </script>
    <main>