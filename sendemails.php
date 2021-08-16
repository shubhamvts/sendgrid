<?php
require 'vendor/autoload.php';
$url="https://xkcd.com/998/info.0.json";
//$token='<script>document.write(token);</script>';
class SendEmail{
   public static function SendMail($to,$subject,$content){
   $email= new \SendGrid\Mail\Mail();
    $email->setFrom("shubhamvats830@gmail.com","Shubham Vats");
    $email->setSubject($subject);
    $email->addTo($to);
    $email->addContent("text/html",$content);
     
$filename = "your comic";
$file_encoded = file_get_contents(global $url);
      $data=json_decode($json,true);
$attachment = new SendGrid\Attachment();
$attachment->setType("text/application");
$attachment->setContent($data['img']);
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
