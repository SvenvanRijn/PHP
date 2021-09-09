<?php
$random = rand(1,100);
$input = readLine("Raad een getal tussen 1 en 100: ");
$counter = 1;
$g = "groter";
$k = "kleiner";
$verschil; 

//Functie die kijkt of de UserInput geldig is.
function checkValidInput($in){
    if ($in == "stop"){
        echo "Stopping program.\n";
        return false;
    }
    if ($in >= 1 && $in <= 100){
        return true;
    } else{
        echo "Invalid. Stopping program.\n";
        return false;}
    
}

while ($random != $input){
    //check of de input geldig is anders stopt het programma.
    if (!checkValidInput($input)){
        return;
    }
    //vergelijking tussen de getallen.
    if($random > $input){
        $verschil = $g;
    }else {
        $verschil = $k;
    }
    echo "Helaas. Het getal is ". $verschil. " dan wat je geraden hebt.\n";
    $input = readline("Probeer het nogmaals: ");
    $counter++;
    
}
//Winnend bericht.
if ($random == $input){
    echo "Gefeliciteed. Je hebt het getal in ". $counter. " keer geraden";
}
?>