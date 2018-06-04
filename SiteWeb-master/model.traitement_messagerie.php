<?php
$test2 = 2;
include ("vues.messagerie_client.php");
$_SESSION['page'] = $_SESSION['page'] + 1;
new_mail_page($test2);
?>