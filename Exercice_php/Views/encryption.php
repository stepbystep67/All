
<!--  balise php debut  -->
<?php 
 

// dirname — Renvoie le chemin du dossier parent
//require est identique à include mis à part le fait que lorsqu'une erreur survient, il produit également une erreur fatale de niveau E_COMPILE_ERROR. En d'autres termes, il stoppera le script alors que include n'émettra qu'une alerte de niveau E_WARNING, ce qui permet au script de continuer.
require (dirname(__dir__)).'/traitement/encryption_fonction.php'; 


// si un le champ a etait rempli alors on peut continuer
// quelquechose = name du champ utilisateur
// $_post = Un tableau associatif des valeurs passées au script courant via le protocole HTTP et la méthode POST lors de l'utilisation de la chaîne application/x-www-form-urlencoded ou multipart/form-data comme en-tête HTTP Content-Type dans la requête.
// La méthode POST est un peu différente.C'est la méthode que le navigateur utilise pour demander au serveur une réponse qui prend en compte les données contenues dans le corps de la requête HTTP : "Hé le serveur, regarde ces données et renvoie-moi le résultat approprié". Si un formulaire est envoyé avec cette méthode, les données sont ajoutées au corps de la requête HTTP.
if(!empty($_POST['quelquechose']))
{
   
   echo hash($_POST['quelquechose'],$_POST['hash']);


    //var_export() retourne des données structurées sur la variable donnée. C'est le même principe que var_dump() mais avec une exception : le résultat retourné est du code PHP valide.
    // var export = affiche tout ce qui se trouve a l'interieur du tableau
    // exit affiche le resultat final en sortie
   // exit(var_export($_POST, true));
    //Retourne la représentation de la variable lorsque le paramètre return est utilisé et évalué à TRUE. Autrement, cette fonction retournera NULL.
    
   
}
else
{
    
    
}

?> 

<!-- formulair -->
<!--method = Cet attribut définit comment les données sont envoyées. Le Protocole HTTP fournit plusieurs façons d'envoyer une requête. Les données des formulaires HTML peuvent être envoyées via au moins deux méthodes : la méthode GET et la méthode POST. -->
<!--   -->

<form method="post" name="saisie">
    
     <!-- for fait reference a un autre id -->
    <!--    -->
    <label for="commejeveux">before hash</label>
   
    <!--  champ correspondant -->
    <input type="text" id="champ_a_encoder" name="champ_a_encoder" value="<?php 
    if (!empty($_POST['champ_a_encoder'])) 
    { echo $_POST['champ_a_encoder'];}  
    
    ?>">

    <!-- for fait reference a un autre id -->
    <label for="commejeveux2"> </label>

    <!--  bouton qui declenche l'evenement  --> 
    <input type="submit" name="valider" id="valider" value="valider">
    
    <!--  champ contenant la reponse  --> 
    <input type="text" id="resultat_final" name="resultat_final" value="<?php echo hashage()?>">
    
    <!-- appel (affiche) la fonction -->
    <?php echo genererSelect()?>
    <!--    --> 
    
</form>


