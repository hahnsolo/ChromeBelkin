<?php
// the message
$msg = "You Left The Lights On";
// use wordwrap() if lines are longer than 70 characters
// send email
mail("soundsgood@greenseedmusic.com","Lights",$msg);
?>