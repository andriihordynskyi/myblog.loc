<?php
require_once "session.inc.php";
require_once "secure.inc.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Создание пользователя</title>
    <meta charset="utf-8" ;
</head>

<body>
<?
$login = 'root';
$password = '1234';
$result = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'] ?: $login;
    if (!userExists($login)) {
        $password = $_POST['password'] ?: $password;
        $hash = getHash($password);
        if (saveUser($login, $hash)) {
            $result = 'Хеш ' . $hash . ' успешно добавлен в файл.';
        } else {
            $result = 'При записи хеша ' . $hash . ' произошла ошибка.';
        }
    } else {
        $result = "Пользователь $login уже существует. Выберите другое имя.";
    }
}

if ($_POST['logOut']){
    session_destroy();
    exit;
}
?>
<h1>Создание пользователя</h1>
<h3><?=$result?></h3>
<p><?=$user?></p>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <div>
        <label for="userLogin">Логин</label>
        <input type="text" name="login" id="userLogin" value="<?=$login?>"/>
    </div>
    <div>
        <label for="userPassword">Пароль</label>
        <input type="password" name="password" id="userPassword" value="<?=$password?>"/>
    </div>
    <div>
        <input type="submit"/>
    </div>
</form>
<h3>Выйти</h3>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
    <input type="submit" value="Выйти" name="logOut"/>
</form>
</body>
</html>
