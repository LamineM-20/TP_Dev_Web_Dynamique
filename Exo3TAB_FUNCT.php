<?php
    function verification(String $i)
    {
        if(strlen($i)>=8)
        {
            return "true";
        }
        else
       { 
           return "false";
       }
    }
    echo verification("LamineMANE");
?>