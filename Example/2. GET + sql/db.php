<?php
$mark = filter_var(trim($_POST['mark']),
FILTER_SANITIZE_STRING);
$color = filter_var(trim($_POST['color']),
FILTER_SANITIZE_STRING);
$type = filter_var(trim($_POST['type']),
FILTER_SANITIZE_STRING);

require "connect.php";
$mysql->query("INSERT INTO `car` (`mark`, `color`, `type`)
VALUES('$mark', '$color', '$type')");

$mysql->query("DELETE FROM `car` WHERE id = $id");

$mysql->close();

header('Location: /');
?>