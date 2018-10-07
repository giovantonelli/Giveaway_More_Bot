<?php
$check = file_get_contents("https://api.telegram.org/bot590288363:AAHCptwjQC6q69HWNiOTkC0k-e8Sn1_UbPQ/getChatMember?chat_id=@Giveaway_More&user_id=$userID");
if($msg == "/start" and strpos($check, '"status":"left"') == TRUE){
$menu[] = array(
array(
"text" => "Canale",
"url" => "https://t.me/giveaway_more"),
);
sm($chatID, "*NO!* Non puoi utilizzare questo bot, se non sei iscritto al canale!", $menu, 'Markdown', false, false, true);
}
if($msg == "/start" and strpos($check, '"status":"left"') != TRUE)
{
$menu[] = array(
array(
"text" => "\xF0\x9F\x94\xB0Listino Generatori\xF0\x9F\x94\xB0",
"callback_data" => "/gen"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x93\x8CSupporto\xF0\x9F\x93\x8C",
"callback_data" => "/chat"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x92\xB0Negozio account\xF0\x9F\x92\xB0",
"callback_data" => "/account"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x93\xA2Sponsor Area\xF0\x9F\x93\xA2",
"callback_data" => "/sponsor"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x94\x9DZona Aste-Quiz\xF0\x9F\x94\x9D",
"callback_data" => "/astequiz"),
);
$menu[] = array(
array(
"text" => "\xE2\x9C\x92Feedback\xE2\x9C\x92",
"callback_data" => "/feedback"),
);
$menu[] = array(
array(
"text" => "1",
"callback_data" => "/start2"),
array(
"text" => "	\xE2\x9E\xA1",
"callback_data" => "/start1"),
);
sm($chatID, "\xE2\x9D\x97*Benvenuto, sul Bot ufficiale di Giveaway&More!* \r\n\xE2\x9A\xA0_Utilizza i tasti sottostanti per utilizzarmi!_\r\n\r\n\xF0\x9F\x94\xB0`Versione del Bot:` *1.2*\r\n\r\n*Bot fatto da:* @giovantonelli ", $menu, 'Markdown', false, false, true);
}

if($msg == "/start1")
{
$menu[] = array(
array(
"text" => "\xF0\x9F\x92\xACInfo\xF0\x9F\x92\xAC",
"callback_data" => "/info"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x93\x8AMinecraft\xF0\x9F\x93\x8A",
"callback_data" => "/mc"),
);
$menu[] = array(
array(
"text" => "\xE2\xAC\x85",
"callback_data" => "/start2"),
array(
"text" => "2",
"callback_data" => "/start1"),
);
cb_reply($cbid, "", false, $cbmid, "\xE2\x9D\x97*Benvenuto, sul Bot ufficiale di Giveaway&More!* \r\n\xE2\x9A\xA0_Utilizza i tasti sottostanti per utilizzarmi!_\r\n\r\n\xF0\x9F\x94\xB0`Versione del Bot:` *1.2*\r\n\r\n*Bot fatto da:* @giovantonelli ", $menu, 'Markdown', false, false, true);
}

if($msg == "/start2")
{
$menu[] = array(
array(
"text" => "\xF0\x9F\x94\xB0Listino Generatori\xF0\x9F\x94\xB0",
"callback_data" => "/gen"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x93\x8CSupporto\xF0\x9F\x93\x8C",
"callback_data" => "/chat"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x92\xB0Negozio account\xF0\x9F\x92\xB0",
"callback_data" => "/account"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x93\xA2Sponsor Area\xF0\x9F\x93\xA2",
"callback_data" => "/sponsor"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x94\x9DZona Aste-Quiz\xF0\x9F\x94\x9D",
"callback_data" => "/astequiz"),
);
$menu[] = array(
array(
"text" => "\xE2\x9C\x92Feedback\xE2\x9C\x92",
"callback_data" => "/feedback"),
);
$menu[] = array(
array(
"text" => "1",
"callback_data" => "/start2"),
array(
"text" => "	\xE2\x9E\xA1",
"callback_data" => "/start1"),
);
cb_reply($cbid, "", false, $cbmid, "\xE2\x9D\x97*Benvenuto, sul Bot ufficiale di Giveaway&More!* \r\n\xE2\x9A\xA0_Utilizza i tasti sottostanti per utilizzarmi!_\r\n\r\n\xF0\x9F\x94\xB0`Versione del Bot:` *1.2*\r\n\r\n*Bot fatto da:* @giovantonelli ", $menu, 'Markdown', false, false, true);
}
//prova sottomenu

if($msg == "/gen")
{
$menu[] = array(
array(
"text" => "\xF0\x9F\x92\xB2Acquista",
"callback_data" => "/chat"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x94\x99Torna indietro",
"callback_data" => "/start"),
);
cb_reply($cbid, "", false, $cbmid, "-4€ Template/Source Clydegen + Database (MySql)

(-6€ Template/Source Clydegen V5 (FINALE) + Database)

-5€ Template + Host + Captcha preconfigurato

-6€ Template + Host + Captcha + Setup Database

-7€ Template + Host + Captcha + Setup Database + Modifiche generali (ToS, Plan, Settings)

-8€ Template + Host + Captcha + Setup Database + Modifiche generali + Supporto 24h/7d

-9€ Template + Host + Captcha + Setup Database + Modifiche generali + Supporto 24h/7d + Setup Dominio (.tk/.gq/.ml/.ga/.cf)

-14€ Template + Host + Captcha + Setup Database + Modifiche generali + Supporto 24h/7d + Setup Dominio + Referral System

-20€ Remake TOTALE (Nuovo template per login/register)

-25€ Template + Host + Captcha + Setup Database + Modifiche generali + Supporto 24h/7d + Setup Dominio + Referral System + (facoltativo)Referral System + App android (.apk) del generatore

-26€ Template + Host + Captcha + Setup Database + Modifiche generali + Supporto 24h/7d + Setup Dominio + Referral System + (facoltativo)Referral System + App android (.apk) del generatore + Sponsor su [@giveaway_more](t.me/giveaway_more)

[@giovant2005_bot](t.me/giovant2005_bot)

P.S. 2€ in piu al listino per il template aggiornato", $menu, 'Markdown', false, false, true);
}

if($msg == "/account")
{
$menu[] = array(
array(
"text" => " \xF0\x9F\x92\xB2Acquista",
"callback_data" => "/chat"),
);
$menu[] = array(
array(
"text" => " \xF0\x9F\x94\x99Torna indietro",
"callback_data" => "/start"),
);
cb_reply($cbid, "", false, $cbmid, "▬▬▬▬▬▬▬ \xF0\x9F\x92\xB0 ▬▬▬▬▬▬▬

                           S H O P   

▬▬▬▬▬▬▬ \xF0\x9F\x92\xB0 ▬▬▬▬▬▬▬


\xF0\x9F\x93\xBANETFLIX 4 Screens 4euro
\xF0\x9F\x93\xBANETFLIX 2 Screens 2euro
\xF0\x9F\x93\xBANETFLIX 1 Screen 1,50euro

\xF0\x9F\x93\xBANowTv  3euro

\xF0\x9F\x93\xBAInfinityTv 3euro

\xF0\x9F\x93\xBATim Vision 5euro

▬▬▬▬▬▬▬ \xF0\x9F\x92\xB0 ▬▬▬▬▬▬▬

\xF0\x9F\x91\xBESteam Key Random 1,50euro
\xF0\x9F\x91\xBESteam Key [DLC] 2euro

\xF0\x9F\x91\xBEMinecraft Premium Full Access 3euro
\xF0\x9F\x91\xBEMinecraft Premium Semi Full Access 2euro
\xF0\x9F\x91\xBEMinecraft Premium Non Full Access 0,10euro

\xF0\x9F\x91\xBELoL EUW 2,50euro

▬▬▬▬▬▬▬ \xF0\x9F\x92\xB0 ▬▬▬▬▬▬▬

\xE2\x9E\x96PornHubPremium 2euro

\xE2\x9E\x96JustEat 1,50euro

\xE2\x9E\x96Chili 2euro

\xE2\x9E\x96SocialClub 2euro

\xE2\x9E\x96Wolfarm 2euro

\xE2\x9E\x96BtSport 2euro

\xE2\x9E\x96NapSter 2euro

▬▬▬▬▬▬▬ \xF0\x9F\x92\xB0 ▬▬▬▬▬▬▬

\xF0\x9F\x8E\xA7Spotify 0,75euro

\xF0\x9F\x8E\xA7Deezer 2euro

\xF0\x9F\x8E\xA7Tidal 2euro

▬▬▬▬▬▬▬ \xF0\x9F\x92\xB0 ▬▬▬▬▬▬▬

\xF0\x9F\x93\x9AOther Account 0,15euro

▬▬▬▬▬▬▬ \xF0\x9F\x92\xB0 ▬▬▬▬▬▬▬

                   \xF0\x9F\x8E\x81S A L E\xF0\x9F\x8E\x81

15% Discount Only If You Buy 5 Products

30% Discount Only If You Buy 15 Products

50% Discount Only If You Buy 30 Products

Go To Assistance For Buy This Account!", $menu, 'Markdown', false, false, true);
}

if($msg == "/sponsor")
{
$menu[] = array(
array(
"text" => "\xF0\x9F\x91\xA5Reciproco",
"callback_data" => "/sponsorR"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x92\xB5Pagamento",
"callback_data" => "/sponsorP"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x94\x99Torna indietro",
"callback_data" => "/start"),
);
cb_reply($cbid, "", false, $cbmid, "*A che tipo di Sponsor sei interessato?*", $menu, 'Markdown', false, false, true);
}

if($msg == "/sponsorR")
{
$menu[] = array(
array(
"text" => "\xF0\x9F\x9A\xA8LiveChat",
"callback_data" => "/sponsorchat"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x94\x99Torna indietro",
"callback_data" => "/sponsor"),
);
cb_reply($cbid, "", false, $cbmid, "*Ecco i Requisiti per uno sponsor Reciproco*

_Avere minimo 650+ Membri_
_Avere un buon numero di Visual_

_Se rispetti i seguenti requisiti contatta un nostro admin nella LiveChat!_", $menu, 'Markdown', false, false, true);
}

if($msg == "/sponsorP")
{
$menu[] = array(
array(
"text" => "\xF0\x9F\x92\xB2Acquista",
"callback_data" => "/chat"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x94\x99Torna indietro",
"callback_data" => "/sponsor"),
);
cb_reply($cbid, "", false, $cbmid, "*Ecco il listino Sponsor:*

*Sponsor senza No-Post*

_1 ora >> 1 euro_
_2 ore >> 1,75 euro_
_4 ore >> 2,50 euro_
_8 ore >> 4,50 euro_
_Per più ore >> 0,50 euro l'ora_

*Sponsor con No-Post*

_1 ora >> 2 euro_
_2 ore >> 3,50 euro_
_4 ore >> 5 euro_
_8 ore >> 9 euro_
_Per più ore >> 1 euro l'ora_", $menu, 'Markdown', false, false, true);
}

if($msg == "/astequiz")
{
$menu[] = array(
array(
"text" => "\xF0\x9F\x92\xB2Punta su un Asta",
"callback_data" => "/aste"),
);
$menu[] = array(
array(
"text" => "\xE2\x9C\x94Rispondi ad un quiz",
"callback_data" => "/quiz"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x94\x99Torna indietro",
"callback_data" => "/start2"),
);
cb_reply($cbid, "*Che cosa vuoi fare?*", false, $cbmid, "*Che cosa vuoi fare?*", $menu, 'Markdown', false, false, true);
}


if($msg == "/staff")
{
$menu[] = array(
array(
"text" => "\xF0\x9F\x94\x99Torna indietro",
"callback_data" => "/info"),
);
cb_reply($cbid, "", false, $cbmid, "*Ecco lo staff di* [@giveaway_more](t.me/giveaway_more):

*Fondatore:* @giovantonelli
*Co-Fondatore:* @nxtor2

*Creatore del Bot:* @giovantonelli", $menu, 'Markdown', false, false, true);

}

if($msg == "/info")
{
$menu[] = array(
array(
"text" => "\xE2\x9D\xA4 Donazione",
"url" => "https://paypal.me/giveawaymore1"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x91\x8C Staff del canale",
"callback_data" => "/staff"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x94\x99Torna indietro",
"callback_data" => "/start1"),
);
cb_reply($cbid, "", false, $cbmid, "*Bot fatto in _PHP_ da *[@giovantonelli](t.me/giovantonelli) *per il canale* [@giveaway_more](t.me/giveaway_more)", $menu, 'Markdown', false, false, true);
}

if($msg == "/mc")
{
$menu[] = array(
array(
"text" => "GiveawayCraft",
"callback_data" => "/giveawaycraft"),
);
$menu[] = array(
array(
"text" => "\xF0\x9F\x94\x99Torna indietro",
"callback_data" => "/start1"),
);
cb_reply($cbid, "", false, $cbmid, "\xF0\x9F\x94\xBDScegli il tuo server preferito!\xF0\x9F\x94\xBD", $menu, 'Markdown', false, false, true);
}

//giveawaycraft

$json_string= 'https://mcapi.us/server/status?ip=mc.giveawaycraft.tk';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata, true);

if($obj['online'] == "true")
{
$online = "\xE2\x9C\x85";
}else{
$online = "\xE2\x9D\x8C";
}

if($obj['status'] == "success")
{
$status = "\xE2\x9C\x85";
}else{
$status = "\xE2\x9D\x8C";
} 
if($msg == "/giveawaycraft")
{
$menu[] = array(
array(
"text" => "\xF0\x9F\x94\x99Torna indietro",
"callback_data" => "/mc"),
);
cb_reply($cbid, "", false, $cbmid, "Dominio: " . $status
. "\r\nAttivo: " .  $online
. "\r\nVersione: 1.8"
. "\r\nPlayers online: " . $obj['players']['now'] . " / 100", $menu);
}
?>