<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Get First Refresh and Access Token from HubSpot OAuth Authentication</title>
</head>
<body>
   
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.hubapi.com/oauth/v1/token?grant_type=authorization_code&client_id=118e00a3-6a49-4c7e-aad2-571b6539bac7&client_secret=af0b1e5f-9fdd-4115-b9f3-f3e1a5c528de&redirect_uri=https://www.example.com/&code=f85ab4cc-585c-4c41-a1f9-0610c673f967",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/x-www-form-urlencoded;charset=utf-8",
    "Postman-Token: 90c5f20c-7815-4744-9326-e2c59e432d31",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
   ?> 
</body>
</html>