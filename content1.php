 <?php
    
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: login.php ");
    }
   
    if(isset($_SESSION['pageCounter'])){
        $pageCounter = $_SESSION['pageCounter'];
        $pageCounter = $pageCounter+1;
        $_SESSION['pageCounter'] = $pageCounter;
    }else{
        $_SESSION['pageCounter'] = 1;
    }
   
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($_POST!=null){
                $keysOfArray = array_keys($_POST);
                    for($i = 0; $i<sizeof($keysOfArray); $i++){
                        if($keysOfArray[$i] == 'username')
                            $username = $_POST[$keysOfArray[$i]];
                    }
                $_SESSION['username'] = $username; 
               
            }
        }
        
        if(isset($_SESSION['pageCounter']) && isset($_SESSION['username'])){ 
             $pageCounter = $_SESSION['pageCounter'];
             echo "Hello ". $username ." you have visited this page ".$pageCounter. " times before. "."<br><a href='login.php'>Click here to logout.</a>";
             echo "<br><a href= 'content2.php'>Content2</a>";
        }
?>
