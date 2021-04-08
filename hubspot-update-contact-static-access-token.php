<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>HubSpot Update Contact Preferences</title>
</head>
<body>
<?php
    
/*session_start(); 
$hubtoken  = $_SESSION['hstoken'];*/
$curl = curl_init();
    
$data = 
    ['properties' => [
        
        [    
        'property' => 'preferences',
        'value' => 'Latest News; General'
        ]
    ]    
];
    
$data_string = json_encode($data);     

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.hubapi.com/contacts/v1/contact/email/marylam35@aol.com/profile",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data_string,
    
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer CPes59zkLBICUYEYpqCgAiD7waUCKPGMCzIZAFayPreb8xZVRpxIbCSHsL7xyCHJwRdTeToLAA4CxwAADIQDAAhCGQBWsj63jJuWTwruzulAJ4IECFwOG9Dntx0",
    "Cache-Control: no-cache",
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string)
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
    
if(isset($response));
    unset($response); 
    
/*session_destroy();*/
    
?>
</body>
</html>