<html>
    <body>
        <?php
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            if(strcmp($fname, "John") && strcmp($lname, "Doe"))
                header("Location: http://shopandget.com/index.html");
                die;
        ?>
    </body>
</html>
