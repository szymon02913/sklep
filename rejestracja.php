<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php
    $x = new mysqli('127.0.0.1', 'root', '', 'projekt_sklep');
    ?>
</head>
<body>
    <form method="POST">
        Login:
        <input type="text" name="user_name"><br>
        Hasło:
        <input type="password" name='password'><br>
        <button type="submit">Zarejestruje się</button>   
    </form>

    <?php
    if(isset($_POST["login"]) and isset($_POST['password'])) {
        $y = "INSERT INTO `users`(`login`, `password`) VALUES ('".$_POST["login"]."','".$_POST["password"]."')";
        $x->query($y);
        $x->close();
        header('Location: login.php');
    }
    $x->close();
    ?>
</body>
</html>