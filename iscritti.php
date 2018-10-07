<?php

if(strpos($msg, '/lag')=== 0 and $userID == $adminID) {
  $first = microtime();
  sm($chatID, 'Calcolo lag...', false, 'HTML', false, false, true);
  $now = microtime();
  sm($chatID, 'Lag: ' . ($now - $first), false, 'HTML', false, false, true);
  exit;
}



 ?>
