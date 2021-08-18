<html>

<body>
    <?php
    setcookie( "name", "", time()- 60, "/","", 0);
    setcookie("age", "25", time() + 3600, "/", "",  0);
    //    var_dump($_COOKIE);
    if (isset($_COOKIE["age"])) {
        echo "Cookie age :" . $_COOKIE['age'] . "<br>";

    }

    else {
        echo "Cookie không tồn tại." . "<br>";
    }
    ?>
</body>

</html>