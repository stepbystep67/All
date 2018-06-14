
<?php // ce fichier sert a stocké toutes les functions 


//parametre = a gauche la valeur sinon a droite la valeur par defaut 
function getVar($key,$defaut_value =NULL)
{
    
    if(array_key_exists($key, $_GET))
    {
        
        return strip_tags($_GET[$key]);// on retroune la valeur associÃ©e Ã  la clÃ© $key
        
    }
    // strip_tags = supprime les balises html si elle existe  
   // return array_key_exists($key, $_GET) ? strip_tags($_GET[$key]) : $defaut_value;
    // ancienne version
    
    return $defaut_value;
    
}

//parametre = a gauche la valeur sinon a droite la valeur par defaut 
function postVar($key,$defaut_value=NULL)
{
    
    // Version Ternaire du code de la mÃ©thode getVar() (comportement identique)
    // si la clé existe dans post alors on laffiche sinon se sera la valeur par defaut
    // supprime les balises html si elle existe
    return array_key_exists($key,$_POST) ? strip_tags($_POST[$key]) : $defaut_value;
    
}


// views est le repertoire ou il y a toutes les vues 
// 
function getPage($path_to_views)
{
    
// ancienne version remplacé par les deux fonctions au dessous
//// verification si la page contient 
//if(!empty($_GET['page']))
//{
//    
//    $page = $_GET['page'];
//    
//}
//else// sinon on mets le contenu de home dans $page.
//{
//    
//    // creation de la variable page avec $, pour y insérer 'home' qui correspond a la page d'acceuil
//    $page = 'home';
//    
//}
//
// si elle est rempli on met page sinon home par defaut 
    $page = getVar('page', 'home');
// on nettoie la variable
// http//php.net/manual/fr/function.basename.php
$page = basename($page);


// on définit le chemin vers le fichier php si il existe pas = page 404 sinon celle demandé
// nos fichiers sont stockés dans le repertoire Views !
// on construit le chemin
$page_path = ($path_to_views.'/'.$page.'.php');

// si le fichier existe
if(!is_file($page_path))
{
    
    // appel le fichier avec son chemin d'acces
    require ($path_to_views.'/404.php');

}
else 
{

require $page_path;  

}

}

// fonction qui parcour un tableau avec son element selectionner
function fillSelectByValues(array $input = [],$selected_value = NULL)
{
    
    $result = '<option value = "0" >---</option>';
    
    foreach($input as $value)
    {
        
        if($value == $selectd_value)
        {
            
            // eviter les espaces entre le = et leurs valeurs
            $result .= '<option value="'.$value.'"selected="selected">'.$value.'</option>'."\n";
            
        }
        else
        {
            
            $result .= '<option value="'.$value.'">'.$value.'</option>'."\n" ;
            
        }
        
        // $result .= '<option value="'.$value.'" >
        
    }
    
    return $result;
    
}
