<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>X-Mass Card</title>
    <link rel="stylesheet" href="asset/css/card.css">
  </head>
  <body>
    <section id="screen-card" class="rltv h-100 w-100">
      <div class="text-card h-100 w-100 ablst">
        <p>I Wish you <br> a Merry Christmas <br>and<br> a Happy New Year</p>
        <p><?php echo $_GET['who']; ?></p>
      </div>
    </section>
    <section id="hide-file">
      <div id="flocon-test" class="ablst">
        <?php require 'asset/img/flocon1.php'; ?>
      </div>
    </section>
    <script src="asset/js/jquery-3.4.1.js"></script>
    <script src="asset/js/snow.js"></script>
  </body>
</html>
