<head>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body
<div id="head">
<?php
require_once "functions.php";
if (isAdmin()){

 echo   "<div id=\"adminPanel\">
        <li><a href='edit'>Управление деревом вопросов</a></li>
        <li><a href='#'>Просмотр результатов</a></li>
        <li><a href='#'>Списки договоров</a></li>
        <li><a href='#'>Личный кабинет</a></li>
        <li><a href='exit'>Выход</a></li>
    </div>";
     };?>
</div>