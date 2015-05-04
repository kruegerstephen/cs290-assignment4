<?php
/**
 * User: stkrueger
 * Date: 5/2/2015
 * Time: 4:21 PM
 */

$min_multiplicand = intval($_GET["min-multiplicand"]);
$max_multiplicand = intval($_GET["max-multiplicand"]);
$min_multiplier=intval($_GET["min-multiplier"]);
$max_multiplier= intval($_GET["max-multiplier"]);

?>
<?php

    $multiplicandArray = array("0");
    $multiplyTHIS;
    $blank = false;

    for($z = $min_multiplicand; $z<$max_multiplicand+3; $z++){
        $multiplicandArray[$z] = "$z";
    }

    for($z = $min_multiplier; $z<$max_multiplier+3; $z++){
        $multiplierArray[$z] = "$z";
    }

echo "<table>";

if($min_multiplicand !==null && $min_multiplicand !==null &&
    $min_multiplier !==null && $max_multiplier !==null) {

    if ($min_multiplicand < $max_multiplicand) {
        
        if ($min_multiplier < $max_multiplier) {
                echo "<tr>";
                for ($i = $min_multiplicand; $i < $max_multiplicand+3; $i++) {
                    if($blank == true){
                    $x = $multiplicandArray[$i];
                    echo "<td id='multiplicand'>$multiplicandArray[$x]</td>";
                    }else{
                        echo "<td></td>";
                        $blank = true;
                        $i--;
                    }
                }
                echo "</tr>";
                for ($d = $min_multiplicand; $d < $max_multiplicand+1; $d++) {
                    echo "<tr>";
                    echo "<td>$multiplierArray[$d]</td>";
                    for ($i = 1; $i < sizeof($multiplicandArray); $i++) {
                        $x = $multiplicandArray[$i] * $multiplierArray[$d];
                        echo "<td id='multiplier'>$x</td>";
                    }
                    echo"</tr>";
                 
     
                }
            
            
        }
    }
}else{
    echo "min mul" .$min_multiplicand."<br>";
    echo "max mul" .$min_multiplicand."<br>";
    echo "min_mult".$min_multiplier."<br>";
    echo "max_mult".$max_multiplier."<br>";
}

?>