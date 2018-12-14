<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>userName Form</title>
  </head>
  <body>
    <h1>It's your user name!</h1>

    <?php
      $userName = $_GET['userName'];
      $myName = "Jess";

      echo "Hello $userName!  How are you today?<br>".
      "My name is $myName.  I'll be helping you through the site!";

     ?>

  </body>
</html>
