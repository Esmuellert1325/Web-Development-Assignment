<?php
    include 'include/functions.php';
    include 'pages/begin.php';

    $page = 'home';

    if (isset($_GET['page'])) 
    {
        $page = $_GET['page'];
    }

    $file = 'pages/' . $page . '.php';

    if (is_file($file)) 
    {
        include $file;
    }
    else 
    {
        notFound();
    }

    include 'pages/end.php';
?>