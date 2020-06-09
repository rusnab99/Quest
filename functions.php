<?php
function isAdmin()
{
    return isset($_COOKIE["isAdmin"])&&$_COOKIE["isAdmin"]==$_SERVER['REMOTE_ADDR'].md5($_SERVER['REMOTE_ADDR']);
}