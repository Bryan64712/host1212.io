<?php
require("class-Clockwork.php");
$api = 'clef api de votre compte';
$clockwork = new Clockwork($api);

$message = array('to' => '33numéro', 'message' => 'Message');
$envoye = $clockwork->send($message);

?>