<?php

if(isset($_POST['email'])) {

 $url = 'https://api.sendgrid.com/';
 $user = 'azure_91d234cb4c2c58734ea5fc3d83d6f0a0@azure.com';
 $pass = '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';

 $params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'to' => 'nickoelton@outlook.com',
      'subject' => 'testing sucsess',
      'html' => 'testing body',
      'text' => 'testing body',
      'from' => 'anna@contoso.com',
   );

 $request = $url.'api/mail.send.json';

 // Generate curl request
 $session = curl_init($request);

 // Tell curl to use HTTP POST
 curl_setopt ($session, CURLOPT_POST, true);

 // Tell curl that this is the body of the POST
 curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

 // Tell curl not to return headers, but do return the response
 curl_setopt($session, CURLOPT_HEADER, false);
 curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

 // obtain response
 $response = curl_exec($session);
 curl_close($session);

 // print everything out
 print_r($response);
}

?>