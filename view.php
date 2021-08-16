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
  <img src="imgs.xkcd.com/comics/bluetooth.png">
  </p>
  </body>
  </html>
  ';
  SendEmail::SendMail('ardentcrewu7@gmail.com','hey there!',$content);
   ?>
  <h1> You should receive an email </h1>
</body>
</html>
