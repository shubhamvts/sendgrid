<html>
<head>
</head>
<body>
  <?php
  require_once "sendemails.php";
  $content= '
  <!DOCTYPE html>
  <html>
  <head>
  </head>
  <body>
  <p> 
  <img src="imgs.xkcd.com/s/a899e84.jpg">
  </p>
  </body>
  </html>
  ';
  SendEmail::SendMail('500065684@stu.upes.ac.in','all the best',$content);
   ?>
  <h1> You should receive an email </h1>
</body>
</html>
