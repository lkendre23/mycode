<?php
function visitorIP() {  
//Check if visitor is from shared network 
  if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
            $vIP = $_SERVER['HTTP_CLIENT_IP'];  
    }  
//Check if visitor is using a proxy 
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){  
            $vIP = $_SERVER['HTTP_X_FORWARDED_FOR'];  
  }  
//check for the remote address of visitor.  
else{  
          $vIP = $_SERVER['REMOTE_ADDR'];  
  }  
  return $vIP;  
}  
$vIP = visitorIP();  
echo 'The visitors Real address : '.$vIP;  

$to = "laxmantest2525@gmail.com";
$subject = "Someone is trying to login please check.";
$message = "";
$message .= "Remote machine IP address :".$vIP.'<br />';
$message .= "If this is not you please change your machine Username and Password.<br />";
$message .= "<br /><br /> Thanks and Regards,<br />Security Team";

mail($to,$subject,$message,$headers);

?> 



