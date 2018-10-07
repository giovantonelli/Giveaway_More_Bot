<?php

$SayAdmins = array(
  406475036,
);

if(strpos($msg, "/say")=== 0 and in_array($userID, $SayAdmins)== true)
{
  $command = explode(" ", $msg, 3);

  $newID = $command[1];

  $text = $command[2];

  sm($newID, $text);
}

 ?>