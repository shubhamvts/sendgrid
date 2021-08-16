<?php
require 'vendor/autoload.php';
$url="https://imgs.xkcd.com/s/temperature.png";
//$token='<script>document.write(token);</script>';
class SendEmail{
   public static function SendMail($to,$subject,$content){
   $email= new \SendGrid\Mail\Mail();
    $email->setFrom("shubhamvats830@gmail.com","Shubham Vats");
    $email->setSubject($subject);
    $email->addTo($to);
    $email->addContent("text/html",$content);
     
$filename = basename($url);
$file_encoded = base64_encode(file_get_contents($url));
$attachment = new SendGrid\Attachment();
$attachment->setType("image");
$attachment->setContent($file_encoded);
$attachment->setDisposition("attachment");
$attachment->setFilename($filename);
$email->addAttachment($attachment);

    $sendgrid = new \SendGrid(getenv('api_key'));
    

    try{
      $response = $sendgrid->send($email);
       return $response;
    }catch(Exception $e){
      echo 'Caught Exception : '.$e->getMessage()."\n";
      return false;
    }
  }
}
 ?>
