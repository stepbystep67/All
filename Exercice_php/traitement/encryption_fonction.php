<?php

function genererSelect()
{

    // creation de la variable hash, Retourne une liste des algorithmes de hachage enregistrés
    $hash = hash_algos();
    
    // creation de la variable liste (pour le moment vide)
    $liste = '';
    
    // 
    $liste .= '<select name="liste_hash" id="liste_hash">';
    
    // selection mise a null par défault volontairement 
    $hash_choisi = null;
    
    // si pas de choix alors on rentre la saisie utilisateur 
    if(!empty($_POST['liste_hash']))
    {
        
        // et on met la valeur 
        $hash_choisi = $_POST['liste_hash'];
        
    }
    
    // foreach = pour chaque
    // parcour chaque index du tableau 
    // concerne la concervation des saisies dans le formulaire lors de l'evenement click sur submit qui renvoie le formulaire 
    foreach ($hash as $value)
    {
        
        // comparaison de la valeur 
        if($hash_choisi == $value)
        {
            
            // le choix a etait fait alors on le reaffiche
            if(isset($_POST['liste_hash']))
            {
                
                // reaffichage
                echo $_POST['liste_hash'];
                
            }
            
        }
        // on concatener en dur entre simple quote et la valeur qui se trouve apres la parenthese 
        $liste .= '<option value="'.$value.'">'.$value.'</option>';  
        
    }
    
    $liste .= '<select value="'.$value.'">'.$value.'</select>';
    
    // dans la liste concatenation 
    $liste .= '</select>';
    
    // retourne le resultat de la liste 
    return $liste;
    
}

function hashage()
{
        
    if(!empty($_POST['champ_a_encoder']) && !empty($_POST['liste_hash']))
    {
        
    $data = $_POST['champ_a_encoder'];
    
    
    $hash = $_POST['liste_hash'];
    
    // on met le resultat du calcul dans la variable resultat 
    $resultat = hash($hash,$data);
    
    
    return $resultat;
        
    }
   // sinon vide 
    
    return "";
    
}

?>