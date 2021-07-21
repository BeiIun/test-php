<?php

function yo ($maBoule, $key){
//define("DECALAGE", 3);
$mot_clair = $maBoule;
$mot_crypte ="";
$tab_clair = $tab_crypte = range("a", "z");

for($i=0; $i < $key; $i++){
    array_push($tab_crypte, array_shift($tab_crypte));
}

foreach (str_split($mot_clair) as $value){
    $i = array_search($value, $tab_clair);
    $mot_crypte .= $tab_crypte[$i];
}
return $mot_crypte;
};








echo yo("constantinople", 3);