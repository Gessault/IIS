<!DOCTYPE html>
<html>
<head>
    <?php
  require_once "DataBase/guitfunc.php";
    $guitar = getArt(1, $_GET["id"]);
    $title = $guitar["title"];
    require_once "blocks/head.php";
    ?>
    </head>
    <body>
             <?php require_once "blocks/header.php" ?>
        <div id="wrapper">
        <div id="leftCol">
            <?php 
        echo'<div id="product-item"><img src="img/guitars/'.$guitar["id"].'.jpg"> <h2>'.$guitar["title"].'</h2><br><p>'.$guitar["full_text"].'</p></div>';  
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