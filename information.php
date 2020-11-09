<!DOCTYPE html>
<html>
    <head>
<?php $title = "Контакти";
        require_once "blocks/head.php"; ?>
        </head>
    <body>
        <?php require_once "blocks/header.php"; ?>
        <div id="wrapper">
        <div id="leftCol">
            <h1>Контакти</h1><br>
            <div id="map">
               <script>
function initMap(){
  var uluru = {lat: 49.8351972, lng: 24.0131132};
  var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6, 
      center: uluru});
  var marker = new google.maps.Marker({position: uluru, map: map}); }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYGBto9TO1LZYPvmtO6Z7m7YIuN8UmeZU&callback=initMap">
    </script>
            </div>
            <div if="contacts"><br>
            м. Львів ,Вул. Степана Бандери 12, Національний університет "Львівська Політехніка"
            </div>
            </div>
             <div class="merez">
            <a href="http://facebook.com" class="merez_item">Facebook<img src="img/facebook.png" alt="Facebook" title="Facebook"></a>
                <a href="http://twitter.com" class="merez_item">Twitter<img src="img/twitter.png" alt="Twitter" title="Twitter"></a>
             <a href="http://telegram.com" class="merez_item">Telegram<img src="img/telegram.png" alt="Telegram" title="Telegram"></a>
             <a href="http://instagram.com" class="merez_item">Instagram<img src="img/instagram.png" alt="Instagram" title="Instagram"></a>
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