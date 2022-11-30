<html>
    <head>
    </head>
    <body>
        <?php
            $con = new mysqli("127.0.0.1","root","","projekt_sklep");
            $res=$con->query("SELECT * FROM users");
            $offers=$res->fetch_all(MYSQLI_ASSOC);
            $res->fetch_all();
            ?>
        <h1><center>ZALOGOWANY</center><h1>
            </h1>
        </h1>
        
    </body>
    
</html>