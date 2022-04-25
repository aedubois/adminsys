<html>
    <body>
        <?php
            $username = $_POST["username"];
            $login = $_POST["login"];
            if(strcmp($username, "John") && strcmp($login, "Doe"))
                header("Location: http://www.shopandget.com");
                die;
        ?>
    </body>
</html>
