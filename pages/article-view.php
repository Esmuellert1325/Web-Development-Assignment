<div class="article-box">
    <?php
        $x = $_GET['x'];

        $file = 'articles/article-' . $x . '.txt';

        $article = file_get_contents($file);
        $article = explode(';', $article);

        $title = $article[0];
        $content = $article[1];
        $author = $article[2];

        echo '<h1 class="subtitle">' . $title . '</h1>
            <p class="article-p">' . $content . '</p>
            <div class="written-by">Written By: ' . $author . '</div>';
    ?>
</div>