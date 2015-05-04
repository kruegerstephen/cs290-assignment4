<?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_POST!=null){
            $keysOfArray = array_keys($_POST);
        
            $postArrayValues = array('type'=>"POST");
                for($i = 0; $i<sizeof($_POST); $i++){
                    $postArrayValues[$keysOfArray[$i]] = $_POST[$keysOfArray[$i]];
                }
            
            
            $objectDeJSON = json_encode($postArrayValues);
            echo $objectDeJSON;
        }
    }
    
        
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if(sizeof($_GET)!=null){
            $keysOfArray = array_keys($_GET);
        
            $getArrayValues = array('type'=>"GET");
                for($i = 0; $i<sizeof($_GET); $i++){
                    $getArrayValues[$keysOfArray[$i]] = $_GET[$keysOfArray[$i]];
                }
            
            
            $objectDeJSON = json_encode($getArrayValues);
            echo $objectDeJSON;
        }
    }


?>


<html>
    <body>

    <form action="loopback.php" method="post">
        Name: <input type="text" name="0" value = "Steve"><br>
        E-mail: <input type="text" name="1" value = "krueg.stpehen@gmail"><br>
        E-mail: <input type="text" name="1" value = "krueg.stpehen@gmail"><br>
        E-mail: <input type="text" name="1" value = "krueg.stpehen@gmail"><br>
        E-mail: <input type="text" name="1" value = "krueg.stpehen@gmail"><br>
        E-mail: <input type="text" name="1" value = "krueg.stpehen@gmail"><br>
        E-mail: <input type="text" name="1" value = "krueg.stpehen@gmail"><br>
        E-mail: <input type="text" name="1" value = "krueg.stpehen@gmail"><br>
        
        <input type="submit">
    </form>

    </body>
</html>
