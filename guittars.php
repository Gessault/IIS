<!DOCTYPE html>
<html>
<head>
    <?php
  require_once "DataBase/guitfunc.php"; 
    $title = "Гітари";
    require_once "blocks/head.php";
        $guitar = getArt(5, "");
    ?>
    </head>
    <body>
 <?php require_once "blocks/header.php" ?>
        <div id="wrapper">
        <div id="leftCol">
            <?php 
        for($i=0;$i<count($guitar);$i++) { 
         echo"<div class=\"product-item\">"; 
        echo'<img src="img/guitars/'.$guitar[$i]["id"].'.jpg"> <h2>'.$guitar[$i]["title"].'</h2> <a href="guitarsmore.php?id='.$guitar[$i]["id"].'"> <div class="button">Деталі</div> </a> </div>'; 
        if($i==0) 
           echo"<div class=\"clear\"><br></div>";  
} ?>
            </div>
           <?php require_once "blocks/rightCol.php" ?>
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