
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>X-Mass Card</title>
    <link rel="stylesheet" href="asset/css/card2.css">
  </head>
  <body>
    <section id="screen-card" class="rltv ovh h-100 w-100">
      <div class="background-card ablst">
        <?php require 'asset/img/bg-ny.php'; ?>
      </div>
      <div class="ablst h-100 w-100">
        <div class="rltv h-100 w-100 flx-ac">
          <div class="box-newYear">
            <div class="dessin rltv ovh h-100 w-100">
              <div class="balloon-block ablst h-100 w-100">
                <?php require 'asset/img/balloon.php'; ?>
              </div>
              <div class="HNY-block ablst h-100 w-100">
                <?php require 'asset/img/HNY.php'; ?>
              </div>
            </div>
            <div class="name-people flx-ac pall-15">
              <p class="txt-who fs-1 txt-maj txt-pc pall-15"><?php echo $_GET['who']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="hide-file">
      <div id="starA">
        <?php require 'asset/img/starsA.php'; ?>
      </div>
    </section>
    <script src="asset/js/jquery-3.4.1.js"></script>
    <script src="asset/js/starsA.js"></script>
  </body>
</html>
