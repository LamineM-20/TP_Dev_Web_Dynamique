<?php
    function dernierElement($t)
    {
        
        if(!empty($t)) 
            return $t[count($t)-1];
        else
            return "null";
       
    }
    echo dernierElement([23,35,4,17])
?>