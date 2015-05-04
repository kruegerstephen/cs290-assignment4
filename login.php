<?php

    session_start();
    if(isset($_SESSION)){
        session_destroy();
        session_unset();
    }
    
?>



<html>
    <body>

    <form action="content1.php" method="post">
        UserName: <input type="text" name="username"><br>
        <input type="submit"></input>
    </form>

    </body>
</html>
