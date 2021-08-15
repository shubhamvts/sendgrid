<html>
<head>
</head>
<body>
  <?php
  require_once "sendemails.php";
  $content= "<html><head></head><body><p> <img src="imgs.xkcd.com/comics/floor_tiles.png"> </p></body></html>";
  SendEmail::SendMail('500065684@stu.upes.ac.in','all the best',$content);
   ?>
  <h1> You should receive an email </h1>
</body>
</html>
