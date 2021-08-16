<html>
<head>
</head>
<body>
  <?php
  require_once "sendemails.php";
  $url="imgs.xkcd.com/comics/bluetooth.png";
  $content= '
  <!DOCTYPE html>
  <html>
  <head>
  </head>
  <body>
  <p> 
  <img src="<?=echo $url;?>" />
  </p>
  </body>
  </html>
  ';
  SendEmail::SendMail('ardentcrewu7@gmail.com','hey there!',$content);
   ?>
  <h1> You should receive an email </h1>
</body>
</html>
