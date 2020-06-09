<?php if(isAdmin())
    echo "<span id='justLogined'>Вы уже вошли в систему</span>";
else echo "<form id=\"signin\" action=\"signin.php\" method=\"post\" >";
if(isset($_GET["failed"])) echo "<span>Неверный логин или пароль</span>";
echo
"
    <label  for=\"login\">Login</label>
    <input name=\"login\" type=\"text\" id=\"login\">

    <label for=\"pass\">Password</label>
    <input name=\"pass\" type=\"password\" id=\"pass\">
    <input value=\"Войти\" type=\"submit\">
</form>";