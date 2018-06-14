<?php

// on met le chemin entier + le nom du fichier dans la variable names
$names = require __DIR__. '/welcome_name.php';

// on vérifie que l'utilisateur a répondu
if($argc > 1 ) // si au moin une saisie est rentrer 
{
    
    // affiche une constante prédéfinie en enlevant les espace avec trim
    echo PHP_EOL . "welcome".trim($argv[1]).PHP_EOL; // alors on l'affiche
    
}
 else 
    {
     
        echo 'hey dude ! what\'s your name?' .PHP_EOL; /* /**/    // la question est reposée
      
        $username =fgets(STDIN); // syntaxe pour récuperer la saisie dans une variable 
      
        var_dump($argv);
        
        echo PHP_EOL . "welcome".trim($username).PHP_EOL;
        
    }
    
 // affiche le fichier welcome en enlevant les espaces .
    echo PHP_EOL."welcome". trim($arg). PHP_EOL;
    
    
    // pour chaque
    // parcour le tableau 
    // fonctionne seulement pour les tableaux et les objets
    // et émettra une erreur si vous tentez de l'utiliser sur une variable de type différent ou une variable non initialisée
    //
    foreach ($names as $key => $value)
    {
        
        // preg_match sert a verifier si dans $arg se trouve le(s) charactere(s)  
        if(preg_match('µ'.$key.'µ', $username))// ($username est la saisie) et (le ou les characteres indiquer 
        {
            
            echo $value; // affiche la valeur correspondante 
            
            break; // mets fin au foreach !(switch aussi)
            
        }
        
    }
    
// avec ligne de commande 
//$argc;/*INT nombre d'argument fourni/**/ 
//
//$argv;/*ARRAY argument/**/
//
//echo 'hey dude ! what\'s your name?' .PHP_EOL; /* /**/ 
//
//$username = fgets(STDIN); /* recuperation de saisie dans une variable/**/
//
//echo PHP_EOL . "welcome".trim($username).PHP_EOL;/* affiche la variable/**/ 

?>
