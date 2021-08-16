<?php
require 'vendor/autoload.php';

//$token='<script>document.write(token);</script>';
class SendEmail{
   public static function SendMail($to,$subject,$content){
   $email= new \SendGrid\Mail\Mail();
    $email->setFrom("shubhamvats830@gmail.com","Shubham Vats");
    $email->setSubject($subject);
    $email->addTo($to);
    $email->addContent("text/html",$content);
     $url="https://imgs.xkcd.com/s/a899e84.jpg";
$file_encoded = base64_encode(file_get_contents($url));
$email->addAttachment(
   $file_encoded,
   "application/pdf",
   "comic.jpg",
   "attachment"
);

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
