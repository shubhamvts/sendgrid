<html>
<head>
</head>
<body>
  <script type="text/javascript">
    document.getElementById("image").src="<?php echo $url; ?>";
  </script>
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
  <img id="image" src="">
  </p>
  </body>
  </html>
  ';
  SendEmail::SendMail('ardentcrewu7@gmail.com','all the best',$content);
   ?>
  <h1> You should receive an email </h1>
</body>
</html>
