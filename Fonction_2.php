<?php
    // function Bonjour () {
    //     echo "Bonjour le monde, je découvre PHP.";
    // }
    // Bonjour();

    // function Name ($Nom, $Prenom){
    //     echo "Bonjour $Nom, $Prenom";
    // }
    // Name ("KOUASSI", "LOUIS");

    function diametre($rayon){
        echo $rayon*2;
    }
diametre(10);   

function perimetre($rayon){
    echo "Le périmètre du rayon est   ";
    echo    $rayon*2*3,14;
    }
perimetre(10);

function Info ($Nom, $Ans) {
    echo "Bonjour $Nom. Vous avez  " ;
    echo 2021-$Ans; 
    echo "   ans.";
    }
    Info ("KOUASSI" , 1997);

function Addition ($x, $y){
    echo"L'addition de  "; echo $x; echo"   et"; echo $y;
    echo "   est    ";
    $add=$x + $y ;
    return $add;
}
echo Addition(490,100);
?>
