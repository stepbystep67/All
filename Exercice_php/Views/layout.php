<!doctype html> <!-- premiere balise a declarer obligatoire pour un fichier html -->

<!-- row = rangée,ligne-->
<!-- home = acceuil-->
<!-- Layout = disposition--> 
<!--  début de la balise html ou l'on défini la langue francaise  -->
<html lang="fr">
    
    <head> 
        
        <!--  titre défini dans pseudo_frames  -->
        <!-- syntaxe pour afficher un autre titre-->
        <title><?php echo $title; ?> </title>
        
        <!-- l'element metadonnée du document: declarer l'encodage de la page--> 
        <meta charset="utf-8">
        
        <!-- permet l'affichage sur mobile  -->
        <meta name="viewport" content="width:device-width,initial-scale=1.0">
        
        <!--  lien pour relier le fichier actuelle avec le fichier css -->
        <link rel="stylesheet" href="/assets/css/bootstrap.css">
        
        <!--  procedure pour lier un fichier javascript a ce fichier actuelle -->
        <script src="/assets/js/jquery-3.3.1.min.js"></script>
        <script src="/assets/js/bootstrap.js"></script>
            
        <!--  lien pour le fichier css, mis ici pour respecter l'ordre logique d'affichage  -->
        <link rel="stylesheet" href="/Jalemany/Exercice_php/assets/css/style.css"> 
        
    </head>

    <body>
        
        <header>   
            
<!-- valeur défini dans le fichier pseudo_frames-->
<h1><?=$h1; ?></h1>
<h2><?=$toto; ?>  </h2>
<h3><?=$tata; ?> </h3>

        </header>
        
        <!-- contient tout le body qui a etait deplacer dans pseudo_frames -->
        <div class="container">
            
            <!-- class = rangée -->
            <div class="row">
                
        <!--  menu latéral !  --> 
       <nav class= "col-lg-2">   <!--  dimension du nav  -->
           
           <ul> <!--  début de la liste non ordonnée -->
           <li><a href="Pseudo_Frames?page=home">home</a></li>
           <li><a href="Pseudo_Frames?page=fichier1">fichier 1</a></li>
           <li><a href="Pseudo_Frames?page=fichier2">fichier 2</a></li>
           <li><a href="Pseudo_Frames?page=fichier3">fichier 3</li>
           <li><a href="Pseudo_Frames?page=fichier4">fichier 4</a></li>
           <li><a href="Pseudo_Frames?page=encryption">liste</a></li>
           </ul>
           
       </nav>  
        
     
<!--  englobe la totalité des articles, col= colonne,lg = large, dimension sur 12-->         
<main class="col-lg-10">   
 
    
<!--  balise php, permet fait appel au fichier et le mets au milieu de la page principale(pseudo_frames), remplace le body --> 
<?php 
getPage(__DIR__.'/');

/*
// si 
// verification si la page contient 
if(!empty($_GET['page']))
{
    
    $page = $_GET['page'];
    
}
else// sinon on mets le contenu de home dans $page.
{
    
    // creation de la variable page avec $, pour y insérer 'home' qui correspond a la page d'acceuil
    $page = 'home';
    
}

// on nettoie la variable
// http//php.net/manual/fr/function.basename.php
$page = basename($page);


// on définit le chemin vers le fichier.
// nos fichiers sont stockés dans le repertoire Views ! 
$chemin_page = __DIR__.'/'.$page.'.php';


// introduction de chemin_page, et produit une erreur fatale de niveau e_compil_error
require $chemin_page;   

*/
// fin du code php
?> 
   
</main>

 </div><!-- fin du class = "row" -->
            
        </div><!-- fin du class = "container" -->
        
<footer>
    
    ©Copyright Justin Alemany
    
</footer>
        
    </body>        
    
</html>
