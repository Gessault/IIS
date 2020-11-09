<!DOCTYPE html>
<html>
<head>
    <?php
  require_once "DataBase/functions.php"; 
    $title = "Guitaress";
    require_once "blocks/head.php";
        $first = getArt(5, "");
    ?>
    </head>
    <body>
 <?php require_once "blocks/header.php" ?>
        <div id="wrapper">
        <div id="leftCol">
            <?php 
        for($i=0;$i<count($first);$i++)
    { 
        if($i==0)
            echo"<div id=\"bigArticle\">"; 
        else echo"<div class=\"article\">"; 
        echo'<img src="img/articles/'.$first[$i]["id"].'.jpg" alt="Стаття '.$first[$i]["id"].'" title="Стаття '.$first[$i]["id"].'"> <h2>'.$first[$i]["title"].'</h2> <p>'.$first[$i]["part_txt"].' <a href="statti.php?id='.$first[$i]["id"].'"> <div class="more">Читати</div> </a> </div>'; 
        if($i==0) 
            echo"<div class=\"clear\"><br></div>"; 
}
        ?>
            </div>
           <?php require_once "blocks/rightCol.php" ?>
            <div class="merez">
            <a href="http://facebook.com" class="merez_item">Facebook<img src="img/facebook.png" alt="Facebook" title="Facebook"></a>
                <a href="http://twitter.com" class="merez_item">Twitter<img src="img/twitter.png" alt="Twitter" title="Twitter"></a>
             <a href="http://telegram.com" class="merez_item">Telegram<img src="img/telegram.png" alt="Telegram" title="Telegram"></a>
             <a href="http://instagram.com" class="merez_item">Instagram<img src="img/instagram.png" alt="Instagram" title="Instagram"></a>
            </div>
        </div>
        <footer>
            <div id="social">
            Guitaress inc.
            </div>
            <div id="rights">
            Stas Pakhomov &copy; <?php echo date ('Y')?> 
            </div>
        </footer>
    </body>
</html>