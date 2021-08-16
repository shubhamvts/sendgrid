<html>
<head>
</head>
<body>
  <?php
  require_once "sendemails.php";
  $url="imgs.xkcd.com/comics/bluetooth.png";
  <script type="text/javascript">
    var con="<?php echo $url; ?>";
  document.getElementById("image").scr=con;
  </script>
  $content= '
  <!DOCTYPE html>
  <html>
  <head>
  </head>
  <body>
  <p> 
  <img id="image" src="#">
  </p>
  </body>
  </html>
  ';
  SendEmail::SendMail('ardentcrewu7@gmail.com','hey there!',$content);
   ?>
  <h1> You should receive an email </h1>
</body>
</html>
