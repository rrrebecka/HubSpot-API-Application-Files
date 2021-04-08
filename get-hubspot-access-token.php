<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Obtain Access Token from HubSpot OAuth Authentication</title>
</head>
<body>
   
<?php


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.hubapi.com/oauth/v1/token",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "grant_type=refresh_token&client_id=a7490ae9-54fd-46b9-88eb-363064ffd469&client_secret=d0e01d5a-9246-4f36-8ce3-87bc33296d94&refresh_token=5519c983-0b2e-4c69-a116-68c480108322",
  CURLOPT_HTTPHEADER => array(
    "Cache-Control: no-cache",
    "Content-Type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
    
$json = json_decode($response, true);

$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    echo $json["access_token"];
}
  
    
?>
</body>
</html>