<html>
    <head>
    <title>OLX</title>
    <style>
        .header{
        background-color:powderblue;
        }
    </style>
    
    
    
    </head>
    <body>
    <div class="header">
    <?php

        $con = new mysqli("127.0.0.1","root","","projekt_sklep");
        if(isset($_POST['login'])&&strlen($_POST['login'])){
        }
      
            
        $login="";
        $password="";
        $res=$con->query("SELECT * FROM users");
        $offers=$res->fetch_all(MYSQLI_ASSOC);
        $res->fetch_all();
        echo"<center><b><h1>ZALOGUJ SIĘ</h1></b></center>";
    ?>
     <br>

    <center>
    <form method="POST">
        
     Login:     <input type="text" name="login" placeholder="Podaj login"value="<?php echo $login;?>">
     Password:  <input type="text" name="password" placeholder="Podaj hasło"value="<?php echo $password;?>">
                <input type=submit value="ZALOGUJ">
    </form>
    </center>
    
   
  
 
    
    </div>
    </body>
</html>
