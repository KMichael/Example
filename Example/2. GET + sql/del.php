<?php
$id = filter_var(trim($_POST['id']),
FILTER_SANITIZE_STRING);

require "connect.php";
$mysql->query("DELETE FROM `car` WHERE id = $id");

$mysql->close();

header('Location: /');
?>