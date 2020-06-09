<?php
$data=json_decode(file_get_contents("accs.json"));
if($data->login==$_POST["login"]&&$data->pass==$_POST["pass"])
{
    setcookie("isAdmin", $_SERVER['REMOTE_ADDR'].md5($_SERVER['REMOTE_ADDR']),time() + 3600, '/', $_SERVER['HTTP_HOST']);
    header('Location: http://'.$_SERVER['HTTP_HOST']);
}
else header('Location: http://'.$_SERVER['HTTP_HOST']."/admin?failed=true");


