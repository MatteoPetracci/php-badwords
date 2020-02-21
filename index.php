<?php
$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
$badword = $_GET['badword'];
$text_length = strlen($text);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><?php echo $text; ?></p>
    <h2><?php echo $text_length; ?></h2>
    <p><?php echo $text_change = str_replace($badword, '***', $text); ?></p>
    <h2><?php echo strlen($text_change); ?></h2>
  </body>
</html>
