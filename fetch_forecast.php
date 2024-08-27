<?php
    $url = 'https://forecast.weather.gov/MapClick.php?lat=44.7448&lon=-85.6869&unit=0&lg=english&FcstType=dwml';
    $xmlContent = file_get_contents($url);
    header('Content-Type: application/xml');
    echo $xmlContent;
?>
