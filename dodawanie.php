<html>
    <head>
        <style>
        .d1
        {
            background: pink;
            height: 800px;
            width: 1200px;
            font-size: 20px;
            text-align: center;
        }
        input
        {
            background: lightgrey;
        }
        button
        {
            background: lightgrey;
        }
        </style>
    </head>
    <body>
        <center><div class="d1">
    <?php
    session_start();
    $con = new mysqli("127.0.0.1","root","","projekt_sklep");
    echo '<form method="POST">';
    $res = $con->query("SELECT * FROM users");
    $cos = $res->fetch_all();

    $res1 = $con->query("SELECT * FROM offers");
    $cos1 = $res1->fetch_all();
    echo '<center><div class="d1"> Zalogowany jako: '.$_SESSION["login"].'<h1>Wystaw:</h1><br> Nazwa Itemu: <input name="name"><br> Opis: <input name="description"><br><input type="submit">';
    if($_POST!=NULL)
    {
            $sqlquery = "INSERT INTO `offerts` VALUES ('".count($cos1)."', '".$_POST['name']."', '".$_POST['description']."','".$_SESSION["id"]."');";
            $con->query($sqlquery);
            header('location: strona.php');
    }
    echo '</form>';

    echo '<form action="strona.php"><button>Wróć</button></form></center></div>';
    ?>
        </div></center>
    </body>
</html>