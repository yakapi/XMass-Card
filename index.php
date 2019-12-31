<?php

 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>eWish Card</title>
<link rel="stylesheet" type="text/css" title="personnal-stylesheet" href="asset/css/frm-pers.css">
<link rel="stylesheet" type="text/css" title="personnal-stylesheet" href="asset/css/style-accueil.css">
<link href="https://fonts.googleapis.com/css?family=Assistant|Fredoka+One&display=swap" rel="stylesheet"></head>
<body>
  <section id="choose-card">
    <form id="card-form" class="form-sizin" action="index.php" method="post">
      <div class="card-block">
        <h2 class="cl-jaune fs-quatre fw-b mall-15 pall-15 family-title">Choose Card :</h2>
        <div class="encard-card">
          <div class="englobage-card pall-15">
            <label class="radio-card-block" for="radio-card1">
              <div class="encard-radio-card">
                <img src="asset/img/ewishlogo.png" alt="wishCard 1">
              </div>
            </label>
            <input id="radio-card1" class="radio-put" type="radio" name="card1" value="card1">
          </div>
          <div class="englobage-card pall-15">
            <label class="radio-card-block" for="radio-card2">
              <div class="encard-radio-card">
                <img src="asset/img/ewishlogo.png" alt="wishCard 2">
              </div>
            </label>
            <input id="radio-card2" class="radio-put" type="radio" name="card2" value="card2">
          </div>
        </div>
      </div>
      <div class="info-block">
        <div class="from-block mall-15">
          <h2 class="fs-trois fw-b pall-15 txt-pc">From :</h2>
          <div class="from-form">
            <div class="input-line mall-15">
              <label for="nameFrom" class="cl-jaune fw-b">Your Name :</label>
              <input id="nameFrom" type="text" name="from-name" placeholder="ex: Jean">
              <p id="f-name-error" class="cl-error error"></p>
            </div>
            <div class="input-line mall-15">
              <label for="mailFrom" class="cl-jaune fw-b">Your Mail :</label>
              <input id="mailFrom" type="email" name="from-mail" placeholder="ex: example@example.com">
              <p id="f-mail-error" class="cl-error error"></p>
            </div>
          </div>
        </div>
        <div class="msg-block mall-15">
          <h2 class="fs-trois fw-b pall-15 txt-pc">Your Message :</h2>
          <div class="msg-form">
            <textarea id="message" class="mall-15" name="message" rows="4" cols="32">ex: I Wish you Merry X-Mas</textarea>
            <p class="txt-c cl-error error"></p>
          </div>
        </div>
        <div class="to-block mall-15">
          <h2 class="fs-trois fw-b pall-15 txt-pc">To :</h2>
          <div class="to-form">
            <div class="input-line mall-15">
              <label for="nameTo" class="cl-jaune fw-b">Name Of :</label>
              <input id="nameTo" type="text" name="to-name" placeholder="ex: Math">
              <p id="t-name-error" class="cl-error error"></p>
            </div>
            <div class="input-line mall-15">
              <label for="mailTo" class="cl-jaune fw-b">Mail Of :</label>
              <input id="mailTo" type="email" name="to-mail" placeholder="ex: example@example.com">
              <p id="t-mail-error" class="cl-error error"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="send-block flx-ac">
        <input id="send-mail" class="send-mail-btn fw-b fs-trois mall-15 txt-pc" type="submit" name="envoie" value="Send Mail">
      </div>
    </form>
  </section>
  <footer  id="pied-page" class="flx-foot">
    <div class="logo mall-15">
      <img src="asset/img/ewishlogo.png" alt="eWishCard Logo">
    </div>
    <p class="txt-pc">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  eWishCard Ent. © 2019 - 2020 </p>
    <div class="social-bar flx-ac">
      <div class="social-icon mall-15">
        <a href="#">
          <?php require 'asset/img/fb-icon.php'; ?>
        </a>
      </div>
      <div class="social-icon mall-15">
        <a href="#">
          <?php require 'asset/img/insta-icon.php'; ?>
        </a>
      </div>
      <div class="social-icon mall-15">
        <a href="#">
          <?php require 'asset/img/pint-icon.php'; ?>
        </a>
      </div>
    </div>
  </footer>
  <script src="asset/js/jquery-3.4.1.js" type="text/javascript"></script>
  <script src="asset/js/contact-ajax.js" type="text/javascript"></script>
</body>
</html>


<!-- <form id="card-form" class="card-form h-100 w-100" action="index.php" method="post">
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
</form> -->
