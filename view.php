<html>
<head>
</head>
<body>
  <?php
  $url="https://imgs.xkcd.com/comics/bluetooth.png";
  require_once "sendemails.php";
  $content= '
  <!DOCTYPE html>
  <html>
  <head>
  </head>
  <body>
  <p> 
  <img src="https://imgs.xkcd.com/comics/bluetooth.png" />
  </p>
  </body>
  </html>
  ';
  SendEmail::SendMail('ardentcrewu7@gmail.com','BHAGINIYA',$content);
   ?>
  <h1> You should receive an email </h1>
</body>
</html>
