<?php


//configurazioni
$config = array(

"formattazione_predefinita" => "Markdown",
     //o "Markdown" o "" per nulla


"formattazione_messaggi_globali" => "Markdown",



"nascondi_anteprima_link" => false,


"tastiera_predefinita" => "inline",
       //metti "normale" per mettere le tastiere vecchie


"funziona_nei_canali" => true,
"funziona_messaggi_modificati" => true,
"funziona_messaggi_modificati_canali" => true,


);


//non toccare
require 'functions.php';



//plugins

$plugins = array(

"inline.php" => true,
"gruppi.php" => true,
"feedback.php" => true,
"utenti.php" => true,
"Plugin_Live-Chat.php" => true,
"Say.php" => true,
"iscritti.php" => true,
);




