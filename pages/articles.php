<div class="site-container">
    <div class="article-container">
        <?php
            $server = 'localhost:3307';
            $user_name = 'root';
            $pw = '';
            $db = 'ragc';
        
            $conn = mysqli_connect($server, $user_name, $pw, $db);
        
            $sql = 'SELECT * FROM articles';
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $ids = array();
            $categorys = array();
            $titles = array();
            $intros = array();
            $imgPaths = array();

            foreach ($data as $dat) 
            {
                $element = htmlspecialchars($dat['id']);
                array_push($ids, $element);

                $element = htmlspecialchars($dat['category']);
                array_push($categorys, $element);
                
                $element = htmlspecialchars($dat['title']);
                array_push($titles, $element);

                $element = htmlspecialchars($dat['intro']);
                array_push($intros, $element);

                $element = htmlspecialchars($dat['imgPath']);
                array_push($imgPaths, $element);
            }

            for ($i = 0; $i < count($categorys); $i++) 
            {
                $articleId = $ids[$i]; 
                $articleCategory = $categorys[$i];
                $articleTitle = $titles[$i];
                $articleIntro = $intros[$i];
                $articleImg = $imgPaths[$i];
                $articlePage = "'index.php?page=article-view&x=";

                echo '<article class="article-card" onclick="location.href = ' . $articlePage . $articleId . "'".';">
                        <figure class="article-image">
                            <img src=' . $articleImg . ' alt="' . $articleTitle . '">
                        </figure>
                        <div class="article-content">
                            <a href="#" class="card-category">Games</a>
                            <h3 class="card-title">' . $articleTitle . '</h3>
                            <p class="card-excerpt">' . $articleIntro . '</p>
                        </div>
                    </article>';
            } 

            mysqli_close($conn)
        ?>
    </div>
</div>

<div class="credits">
    <h1 class="subtitle">Credits for the Icons</h1>
    <div>Icons made by 
        <a href="https://www.flaticon.com/authors/those-icons" title="Those Icons">Those Icons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
    </div>
</div>