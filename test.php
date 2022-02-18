<h1> Cours de PHP</h1>
<?php
    echo"Bonjour à tous<br/>"; 
    echo" Je suis Louis Kouassi";
    echo"<br/>";
    echo 4+4; 
    echo"<br/>";
    echo 4-4;
    echo"<br/>";
    echo 4/4;
    echo"<br/>";
    $VAR= 7+6;
    echo $VAR;
    echo"<br/>";
    echo "7+6=".$VAR;
    echo"<br/>";

    $VAR=4;

    if($VAR>0){
        echo"$VAR est positif";
    }
    elseif($VAR==0){
        echo"$VAR est nul";
    }
    else{
        echo"$VAR est negatif";
    }

    echo"<br/>";

    $VAR="";
    if($VAR!="f"){
        echo"$VAR ne represente pas une femme"; 
    }
    
    echo"<br/>";
    
    $VAR=37;
    if($VAR>=18 and $VAR<=35){
        echo"vous etes jeune";
    }elseif ($VAR<18){
        echo"vous etes adolescent";
    }elseif ($VAR>35) {
        echo"vous etes adulte";
    }

    echo"<br/>";
    
    $Maths=10;
    $Physique=10;
    if($Maths>=16 OR $Physique>=16){
        echo"vous etes admis";
    }
    elseif ($Maths>=10 and $Physique>=10) {
            echo"vous etes admis";
    }

    echo"<br/>";
    
    $moyenne=13;
    $salaire=50000;
    $nbrenfant=1;
    if($moyenne>=12 and $salaire<=400000 and $nbrenfant>=3){
        echo"vous obtenez une bourse";
    }elseif ($moyenne>=12 and $salaire<=100000) {
            echo"vous obtenez une bourse";
    }else{
        echo"vous n'obtenez pas de bourse";
    }

    $n=1;
    do{
        echo " $n je ne dormirai plus en classe" ;echo"<br/>"; 
        $n++;
    }
     while($n<=30);
       
    
    
    
    
    $n=0;
    do{
         echo " $n " ;echo"<br/>";
    }
     while ($n%2==0) {
        $n=rand(1,100)
     };
        
     
     for($n=0;$n<=10;$n++){
         echo"$n";echo"<br/>"; 
     }

      for ($n=10;$n>=0;$n--){
        echo"$n";echo"<br/>";
     }
     for($n=1;$n<=29;$n++){
        echo"$n JE NE DORMIRAI PAS EN CLASSE";echo"<br/>"; 
    } 

     for($n=1;$n<=10;$n++){
        echo"8X$n= ";
        echo $n*8 ;
        echo"<br/>";
    } 
      
    $n=rand(100,200);
     echo $n ;echo"<br/>";
    for($i=$n;$n>=0;$i--){
       if($i%5==0);
       echo $i;
       echo"<br/>";

    } 
    //  les fonctions 
      echo"<br/>";
    function bonjour(){
        echo"bonjour le monde,je decouvre PHP";

    }
       bonjour();
       echo"<br/>";
       function Mafonction($nom,$prenom){
           echo"je m'appelle $nom $prenom";
       }

       Mafonction("Michel","TRE");
       echo"<br/>";

       function Lediametre($rayon){
           
        echo "le diamètre de notre cercle est " ,  $rayon*2;
       }
       Lediametre("10");
       echo"<br/>";

       function Leperimetre($rayon){
           
        echo "le perimetre de notre cercle est " ,  $rayon*2*3.14;
       }
       Leperimetre("10");
       echo"<br/>";
       function Moninfo($nom,$age){
        echo"Bonjour $nom vous avez ";
        echo 2021-$age; 
        echo" ans";
    }

    Moninfo("Michel",2001);
    echo"<br/>"; 
    function addition($x,$y){
        $add=$x+$y;
        return $add;
    }
    echo addition (4,10);


?> 
