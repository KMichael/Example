<?php
setcookie('user', $user['name'], time() - 1800, "/");
header('Location: /');
?>