<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>HubSpot Get Email from Contact ID</title>
</head>
<body>
<?php
    
session_start(); 
$contact_id  = $_SESSION['contact_id'];
$curl = curl_init();
    
/*$data = 
    array(
        "unsubscribeFromAll" => "true",
);   
    
$data_string = json_encode($data);     */

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.hubapi.com/contacts/v1/contact/vid/".$contact_id."/profile?property=email&formSubmissionMode=none&showListMemberships=false",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer CLaQtN7lLBICUYEYpqCgAiD7waUCKPGMCzIZAFZOuvf_10vMz9xlWTi766LNAAC_U_9IEDoLAA4CxwAADIQDAAhCGQBWTrr34_tDAy-lCu83Hq9iVF-fptpfXsE",
    "Cache-Control: no-cache",
    "Content-Type: application/json",
    "cache-control: no-cache"
  ),
));

$$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
    
if(isset($response));
    unset($response); 
    
session_destroy();
    
?>
</body>
</html>