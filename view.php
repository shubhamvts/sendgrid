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
  <img id="image" src='<script type="text/javascript"> document.getElementById("image").src="<?php echo $url; ?>"; </script>'/>
  </p>
  </body>
  </html>
  ';
  SendEmail::SendMail('ardentcrewu7@gmail.com','hey there!',$content);
   ?>
  <h1> You should receive an email </h1>
</body>
</html>
