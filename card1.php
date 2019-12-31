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
      <div id="santa-clos" class="block-santaClos ablst">
        <?php require 'asset/img/traineau.php'; ?>
      </div>
      <div class="block-skieur ablst">
        <?php require 'asset/img/skieur.php'; ?>
      </div>
      <div class="text-card h-100 w-100 ablst">
        <p id="who-card" class="mall-15 pall-15 txt-maj ho-ho-X"><?php echo $_GET['who']; ?></p>
        <div class="wish-block">
          <p class="pall-5">I Wish You</p>
          <p class="pall-15 mall-15">A</p>
          <p class="pall-5">Merry Christmas</p>
        </div>
      </div>
    </section>
    <section id="hide-file">
      <div id="neige1" class="ablst">
        <?php require 'asset/img/neige1.php'; ?>
      </div>
      <div id="neige2" class="ablst">
        <?php require 'asset/img/neige2.php'; ?>
      </div>
    </section>
    <script src="asset/js/jquery-3.4.1.js"></script>
    <script src="asset/js/snow2.js"></script>
    <script src="asset/js/santaClos.js"></script>
  </body>
</html>
