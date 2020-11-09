<!DOCTYPE html>
<html>
<head>
    <?php
  require_once "DataBase/functions.php";
    $first = getArt(1, $_GET["id"]);
    $title = $first["title"];
    require_once "blocks/head.php";
    ?>
    </head>
    <body>
             <?php require_once "blocks/header.php" ?>
        <div id="wrapper">
        <div id="leftCol">
            <?php 
        echo'<div id="bigArticle"><img src="img/articles/'.$first["id"].'.jpg" alt="Стаття '.$first["id"].'" title="Стаття '.$first["id"].'"> <h2>'.$first["title"].'</h2> <p>'.$first["full_txt"].'</p></div>'; 
        ?>
            </div>
           <?php require_once "blocks/rightCol.php" ?>
        </div>
        <footer>
            <div id="rights">
            Stas Pakhomov &copy; <?php echo date ('Y')?> 
            </div>
        </footer>
    </body>
</html>