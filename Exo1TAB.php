<?php
  $tab = array("MANE" => array("Prénom" => "Lamine","Ville" => "Yoff","Age" => 21),
               "SAMB" => array("Prénom" => "Khalifa","Ville" => "Dakar","Age" => 23),
               "NDOUR" => array("Prénom" => "Mouhammad","Ville" => "Thies","Age" => 17)
              );
  foreach($tab as $key => $value){
    echo $key. " :\n";
    if(is_array($value)){
        foreach($value as $key => $value){
             echo $key." : ".$value."\n";
        }
    }
    echo "\n";
  }
?>