

<?php // debut du fichier php

// lien qui permet l'acces vers le fichier function.php
 require __DIR__.'/Functions/functions.php';
 
// variable qui contient le texte de droite
$var ="justin";

// remplacement du titre par ce texte
$title = "mon super titre";

// remplacement du titre de niveau 1, par le texte definie plus un titre deja definie juste la ligne au dessus 
$h1 = "mon super h1" ;

$h2="mon super h2";

$h3="mon superh3";


// get = La méthode GET est utilisée par le navigateur pour demander au serveur de renvoyer une certaine ressource. "Hé le serveur, je veux cette ressource." Dans ce cas, le navigateur envoie un corps vide. Du coup, si un formulaire est envoyé avec cette méthode, les données envoyées au serveur sont ajoutées à l'URL.
if(!empty($_GET['tata']))
{
    
    $tata = $_GET['tata']; 
    
}
else// sinon
{
    
    $tata = 'tata';
    
}


if(!empty($_GET['toto']))
{
    
    $toto = $_GET['toto'];
    
}
else// sinon
{
    
    $toto = 'zero + zero';
    
}


// on appel le fichier dans lequel on ajoute le chemin jusqu'au fichier layout
// on relie le fichier actuelle au fichier layout.php 
// __dir__ signifie chemin entier 
// permet d'utiliser layout.php dans pseudo_frames
require __DIR__."/Views/layout.php";



