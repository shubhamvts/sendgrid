<html>
<head>
</head>
<body>
  <?php
  require_once "sendemails.php";
  $url='imgs.xkcd.com/comics/types.png';
  $content= '
  <!DOCTYPE html>
  <html>
  <head>
  </head>
  <body>
  <p> 
  <img src="<?php echo $url; ?>">
  </p>
  </body>
  </html>
  ';
  SendEmail::SendMail('500065684@stu.upes.ac.in','all the best',$content);
   ?>
  <h1> You should receive an email </h1>
</body>
</html>
