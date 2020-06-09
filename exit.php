<?php setcookie("isAdmin", $_SERVER['REMOTE_ADDR'].md5($_SERVER['REMOTE_ADDR']),time() - 3600, '/', $_SERVER['HTTP_HOST']);

header('Location: http://'.$_SERVER['HTTP_HOST']);