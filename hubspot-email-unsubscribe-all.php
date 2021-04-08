<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>HubSpot Unsubscribe All by Email</title>
</head>
<body>
<?php
    
/*session_start(); 
$hubtoken  = $_SESSION['hstoken'];*/
    
    
$curl = curl_init();
    
$data = 
    array(
        "unsubscribeFromAll" => "true",
);
    
    
$data_string = json_encode($data);     

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.hubapi.com/email/public/v1/subscriptions/kwerner@fastenal.com",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => $data_string,
    
  CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer CIDUr_boLBICU4cYpqCgAiD7waUCKPOSCzIZAPNmZ35qXoO_Dq04dTSml1BmjqCnfVFp5DoOAD8mx_8HDIQDALgAAGBCGQDzZmd-94hJZCE_qgQY1iYVVcV3oszf5hM",
   /* "Authorization: Bearer $hubtoken",*/
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