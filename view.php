<html>
<head>
</head>
<body>
  <?php
  require_once "sendemails.php";
  $url="https://imgs.xkcd.com/comics/bluetooth.png";
  $content= '
  <!DOCTYPE html>
  <html>
  <head>
  </head>
  <body>
  <p> 
  <?php echo '<img src="'.$url.'" alt="Cover">'; ?>
  </p>
  </body>
  </html>
  ';
  SendEmail::SendMail('ardentcrewu7@gmail.com','hey there!',$content);
   ?>
  <h1> You should receive an email </h1>
</body>
</html>
