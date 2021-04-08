<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Get HubSpot Access Token via API</title>
</head>

<body>
    
<?php

    json_encode ($array);
    json_decode($json);

    $file="test.csv";
    $csv= file_get_contents($file);
    $array = array_map("str_getcsv", explode("\n", $csv));
    //print json_encode($array);

    print json_encode($array,JSON_PRETTY_PRINT);
    
?>
</body>
</html>