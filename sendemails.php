<script type='text/javascript' src='config.js'></script>
<script type='text/javascript' src='script.js'></script>
<?php
require 'vendor/autoload.php';
//$token='<script>document.write(token);</script>';
class SendEmail{
  public static function SendMail($to,$subject,$content){

   $token='<script>document.write(token);</script>';
   $email= new \SendGrid\Mail\Mail();
    $email->setFrom("shubhamvats830@gmail.com","Shubham Vats");
    $email->setSubject($subject);
    $email->addTo($to);
    $email->addContent("text/plain",$content);

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
