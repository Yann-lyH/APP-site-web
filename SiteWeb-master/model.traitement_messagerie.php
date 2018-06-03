<script>
window.history.go(-1);
</script>
<?php
session_start();
$_SESSION['page'] = $_SESSION['page'] + 1;
//include ('controller.messagerie_client.php');
//include ('model.messagerie_client.php');
new_mail_page();
?>