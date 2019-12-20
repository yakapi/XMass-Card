<?php

 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Page Title</title>
<link rel="stylesheet" type="text/css" title="personnal-stylesheet" href="asset/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Marck+Script&display=swap" rel="stylesheet">
</head>
<body>
  <header id="en-tete" class="txt-c txt-name txt-pc w-100">
    <h1 class="pall-15 mall-15 fs-1 fw-b">X-Mass Card</h1>
    <h2 class="pall-15 mall-15 fs-2">Send Beautifull and Personnal Xmass-eCard</h2>
  </header>
  <section id="corps-page" class="">
    <div class="formulaire-card h-100 w-100 flx-ac rltv">
      <div id="send-form" class="rltv">
        <form id="card-form" class="card-form h-100 w-100" action="index.php" method="post">
          <div class="from-people mall-15">
            <div class="from-name-p">
            <label for="from-n" class="">Name : </label>
            <input id="from-n" type="text" name="from-name" placeholder="Jean" value="">
            <p id="f-name-error" class="error">error</p>
            </div>
            <div class="from-mail-p">
            <label for="from-m" class="">Your Mail : </label>
            <input id="from-m" type="email" name="from-mail" placeholder="jean.valgent@example.com" value="">
            <p id="f-mail-error" class="error">error</p>
            </div>
          </div>
          <div class="to-people mall-15">
            <div class="to-name-p">
            <label for="to-n" class="">Name : </label>
            <input id="to-n" type="text" name="to-name" placeholder="Matthieu" value="">
            <p id="t-name-error" class="error">error</p>
            </div>
            <div class="to-mail-p">
            <label for="to-m" class="">Mail to : </label>
            <input id="to-m" type="email" name="to-mail" placeholder="matthieu.valgent@example.com" value="">
            <p id="t-mail-error" class="error">error</p>
          </div>
          </div>
          <div class="send-card txt-c">
            <input class="sub-send txt-pc fw-b curs-p" type="submit" name="submit-card" value="Send eCard">
          </div>
          <div id="result-form">

          </div>
        </form>
      </div>
    </div>
    <div class="exemple-card h-100 w-100 rltv flx-ac">
      <div id="e-card" class="rltv ovh brd">
        <img class="ablst" src="asset/img/card.svg" alt="card-example">
      </div>
    </div>
  </section>
  <script src="asset/js/jquery-3.4.1.js" type="text/javascript"></script>
  <script src="asset/js/contact-ajax.js" type="text/javascript"></script>
</body>
</html>


<!-- <form class="card-form" action="index.php" method="post">
<div class="from-people">
<div class="from-name-p">
<label for="from-n">Name : </label>
<input id="from-n" type="text" name="from-name" placeholder="Jean" value="">
</div>
<div class="from-mail-p">
<label for="from-m">Your Mail : </label>
<input id="from-m" type="email" name="from-mail" placeholder="jean.valgent@example.com" value="">
</div>
</div>
<div class="to-people">
<div class="to-people">
<div class="to-name-p">
<label for="to-n">Name : </label>
<input id="to-n" type="text" name="to-name" placeholder="Mathieu" value="">
</div>
<div class="to-mail-p">
<label for="to-m">Mail To : </label>
<input id="to-m" type="email" name="to-mail" placeholder="mathieu.dubois@example.com" value="">
</div>
</div>
<div class="send-card">
<input type="submit" name="submit-card" value="Send Card">
</div>
</form> -->
