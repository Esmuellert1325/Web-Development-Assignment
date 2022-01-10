<h1 class="subtitle">Our Games</h1>

<!-- Játékok kiírása -->
<?php

    $server = 'localhost:3307';
    $user_name = 'root';
    $pw = '';
    $db = 'ragc';

    $conn = mysqli_connect($server, $user_name, $pw, $db);

    $sql = 'SELECT * FROM games';
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $gameNames = array();
    $imgPaths = array();
    $gameLinks = array();

    foreach ($data as $dat) 
    {
        $element = htmlspecialchars($dat['gameName']);
        array_push($gameNames, $element);

        $element = htmlspecialchars($dat['imgPath']);
        array_push($imgPaths, $element);

        $element = htmlspecialchars($dat['link']);
        array_push($gameLinks, $element);
    } 
    
    for ($i = 0; $i < count($gameNames); $i++) 
    {
        $nameOfGame = $gameNames[$i]; 
        $pathOfImg = $imgPaths[$i];
        $gamePHP = $gameLinks[$i];

        echo '<div class="gameBox">
                <div class="row">
                    <div class="gameCol">
                        <img src=' . $pathOfImg . ' alt=' . $nameOfGame . '>
                    </div>
                    <div class="gameCol">
                        <p>' . $nameOfGame . '</p>
                    </div>
                    <div class="gameCol">
                        <div class="playBox" onclick="' . $gamePHP . ';">
                            <h4>Play</h4>
                        </div>
                    </div>
                </div>
            </div>';
    }
    
    mysqli_close($conn)
?>

<div class="credits">
    <h1 class="subtitle">Credits for the Icons</h1>
    <div>Icons made by 
        <a href="https://www.flaticon.com/authors/those-icons" title="Those Icons">Those Icons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
    </div>
</div>