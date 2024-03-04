<?php
function area($rad){
    define("PI",3.142); 
    

    $area = PI * $rad * $rad;
    echo $area;

}

area(7);

?>