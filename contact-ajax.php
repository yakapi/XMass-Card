<?php

//===========================================================================//
//======================== Verification Ajax ================================//
//==========================================================================//
$contact_val = array("from_name" => "",
                  "to_name" => "",
                    "from_mail" => "",
                      "to_mail" => "",
                      "to_mail_error" => "",
                      "from_mail_error" => "",
                      "to_name_error" => "",
                      "from_name_error" => "",
                        "isSuccess" => false);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $contact_val["from_name"] = $_POST["from-name"];
  $contact_val["to_name"] = $_POST["to-name"];
  $contact_val["from_mail"] = $_POST["from-mail"];
  $contact_val["to_mail"] = $_POST["to-mail"];
  $contact_val["isSuccess"] = true;
  if (empty($contact_val["from_name"])) {
      $contact_val["from_name_error"] = "complete the field name";
      $contact_val["isSuccess"] = false;
  }
  if (empty($contact_val["from_mail"])) {
      $contact_val["from_mail_error"] = "complete the field mail";
      $contact_val["isSuccess"] = false;
  }
  if (empty($contact_val["to_name"])) {
      $contact_val["to_name_error"] = "complete the field name ";
      $contact_val["isSuccess"] = false;
  }
  if (empty($contact_val["to_mail"])) {
      $contact_val["to_mail_error"] = "complete the field mail";
      $contact_val["isSuccess"] = false;
  }
  header('Content-type: application/json');
  echo json_encode($contact_val);

//===========================================================================//
//======================= Mail Stylise en HTML ==============================//
//==========================================================================//

  if ($contact_val['isSuccess']) {
    $to = $_POST['to-mail']; // Déclaration de l'adresse de destination.
    $passage_ligne = "\n";
    //=====Déclaration des messages au format texte et au format HTML.
    $message_txt = $_POST['from-name'] ."&nbsp Send you a wish card !".$passage_ligne."Follow this link to see it :".$passage_ligne."https://lucasv.promo-24.codeur.online/carte-de-voeux/";
    $message_html = '<!doctype html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><title></title><!--[if !mso]><!-- --><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--><meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><style type="text/css">#outlook a { padding:0; }
      .ReadMsgBody { width:100%; }
      .ExternalClass { width:100%; }
      .ExternalClass * { line-height:100%; }
      body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
      table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
      img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
      p { display:block;margin:13px 0; }</style><!--[if !mso]><!--><style type="text/css">@media only screen and (max-width:480px) {
        @-ms-viewport { width:320px; }
        @viewport { width:320px; }
      }</style><!--<![endif]--><!--[if mso]>
      <xml>
      <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
      </xml>
      <![endif]--><!--[if lte mso 11]>
      <style type="text/css">
      .outlook-group-fix { width:100% !important; }
      </style>
      <![endif]--><!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css"><style type="text/css">@import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);</style><!--<![endif]--><style type="text/css">@media only screen and (min-width:480px) {
        .mj-column-per-100 { width:100% !important; max-width: 100%; }
      }</style><style type="text/css"></style></head>
      <body style="background-color:#d7dde5;">
      <table bgcolor="#2A2A2C" width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
      <td background="" bgcolor="#CC4137" valign="top">
      <!--[if gte mso 9]>
      <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;">
      <v:fill type="tile" src="https://imagizer.imageshack.com/img923/8622/37GLDR.png" color="#7b89eb" />
      <v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0">
      <![endif]-->
      <div>
      <table align="center" width="590" border="0" cellpadding="0" cellspacing="0">
      <tr>
      <td height="30" style="font-size:30px; line-height: 30px;"></td>
      </tr>
      <!--logo-->
      <tr>
      <td align="center" style="text-align: center">
      <img src="https://imagizer.imageshack.com/img923/8622/37GLDR.png" alt="logo">
      </td>
      </tr>
      <tr>
        <td height="30" style="font-size:30px; line-height: 30px;"></td>
      </tr>
    </table>
  </div>
  <!--[if gte mso 9]>
  </v:textbox>
  </v:rect>
  <![endif]-->
  </td>
  </tr>
  <tr>
    <td>
      <div>
        <table align="center" width="590" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="30" style="font-size:30px; line-height: 30px;"></td>
          </tr>
          <!-- Gros Text -->
          <tr>
            <td align="center" style="text-align: center; color:lightgrey;">
              <p style="font-weight: bold; font-size: 32px;">You received a Wish Card !</p>
              <p style="font-size: 24px;"></p>
              <hr>
            </td>
          </tr>
          <tr>
            <td height="30" style="font-size:30px; line-height: 30px;"></td>
          </tr>
          <!--message-->
          <tr>
            <td align="center" style="text-align: center; color:lightgrey;">
              <p style="font-size: 24px">Hello '. $_POST['to-name'] .',</p>
              <p>'. $_POST['from-name'] .' send you a wish card from ,'. $_POST['from-mail'] .'</p>
              <hr>
            </td>
          </tr>
          <tr>
            <td height="30" style="font-size:30px; line-height: 30px;"></td>
          </tr>
          <tr>
            <td align="center" style="text-align: center; color:lightgrey;">
              <p>Click to see your eCard !</p>
              <div><!--[if mso]>
                <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:40px;v-text-anchor:middle;width:200px;" arcsize="10%" strokecolor="#131B25" fillcolor="#1A2533">
                <w:anchorlock/>
                <center style="color:#ffffff;font-family:sans-serif;font-size:13px;font-weight:bold;">AnyTransfer Me !</center>
              </v:roundrect>
              <![endif]-->
              <a href="http://vps605256.ovh.net/XMass-Card/'. $_POST['card'] .'.php?who='.$_POST['to-name'].'"style="background-color:#CC4137;border:1px solid #CC4137;border-radius:4px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:13px;font-weight:bold;line-height:40px;text-align:center;text-decoration:none;width:200px;-webkit-text-size-adjust:none;mso-hide:all;">
                Open eCard
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td height="30" style="font-size:30px; line-height: 30px;"></td>
        </tr>
        <tr>
          <td height="30" style="font-size:30px; line-height: 30px;"></td>
        </tr>
      </table>
    </div>
  </td>
  </tr>
  <tr>
    <td background="" bgcolor="#CC4137" valign="top">
      <!--[if gte mso 9]>
        <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;">
        <v:fill type="tile" src="https://i.imgur.com/YJOX1PC.png" color="#7b89eb" />
        <v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0">
        <![endif]-->
        <div>
          <table align="center" width="590" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="30" style="font-size:30px; line-height: 30px;"></td>
            </tr>
            <!--logo-->
            <tr>
              <td align="center" style="text-align: center; color: lightgrey;">
                <p>Delivered by X-Mass Card</p>
              </td>
            </tr>

            <tr>
              <td height="30" style="font-size:30px; line-height: 30px;"></td>
            </tr>
          </table>
        </div>
        <!--[if gte mso 9]>
        </v:textbox>
      </v:rect>
      <![endif]-->
    </td>
  </tr>
  </table>
  </body></html>';
  //=====Création de la boundary.
  $boundary = "-----=".md5(rand());
  $boundary_alt = "-----=".md5(rand());
  //=====Définition du sujet.
  $sujet = $_POST['name']." send you a wish card !";
  //=====Création du header de l'e-mail.
  $header = "From: <x-mass@card.net>".$passage_ligne;
  $header.= "Reply-to: <x-mass@card.net>".$passage_ligne;
  $header.= "MIME-Version: 1.0".$passage_ligne;
  $header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
  //=====Création du message.
  $message = $passage_ligne."--".$boundary.$passage_ligne;
  $message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
  $message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
  //=====Ajout du message au format texte.
  $message.= "Content-Type: text/plain; charset=\"UTF-8\"".$passage_ligne;
  $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
  $message.= $passage_ligne.$message_txt.$passage_ligne;
  $message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
  //=====Ajout du message au format HTML.
  $message.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
  $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
  $message.= $passage_ligne.$message_html.$passage_ligne;
  //=====On ferme la boundary alternative.
  $message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
  //==========
  $message.= $passage_ligne."--".$boundary.$passage_ligne;
  //=====Envoi de l'e-mail.
  mail($to,$sujet,$message,$header);
  };

};




 ?>
