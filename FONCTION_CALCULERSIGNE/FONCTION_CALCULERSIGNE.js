/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// fonction qui remplie les select(liste deroulante) de façon dynamique(automatiquement)
function remplirSelect(_nomSelect, _valeurMin, _valeurMax)
{
    
    // variable contenant les elements par id !
    selection = document.getElementById(_nomSelect);
    
    line="";
    
    for( var i = _valeurMin; i <= _valeurMax; i++)
    {
        
        line += "<option>";
        line += signe ;
        line += "</option>";
        
        // variable temporaire qui contient les elements
        var signe = document.createElement('option');
        
        // recuperation de la valeur de i dans la variable
        signe.value = i;
        
        // inser les données de la variable dans le fichier html lié
        signe.innerHTML = i;
        
        // variable selection 
        selection.appendChild(signe);
        
    }
        
}
     
// fonction qui récupère la saisie utilisateur et l'affiche
function mafonction(_nomDuChamp)
{
    
    //variable de type var. recupere lelement par l'id
    var valeurDuChamp = document.getElementById(_nomDuChamp);
    
    // affiche la valeur de la variable
    alert(valeurDuChamp.value);
    
}

// fonction qui crée une liste(tableau) et creer une variable temporaire qui contient la saisie utilisateur
function calculSigne()
{
    
    // tableau avec tous les signes (respecter l'ordre chronologique 
    signes = ["", "Verseau","Poisson","Belier","Taureau","Gémeaux","Cancer","Lion","Vierge","Balance","Scorpion","Sagittaire","Capricorne"];
    
    // variable temporaire pour stocker la valeur du mois,jour,annee choisis , comparer par la suite avec le tableau signes
    temp = document.getElementById('mois').value;
    temp1 = document.getElementById('jour').value;
    temp2 = document.getElementById('annee').value;
    
    // i doit etre inferieur a la longueur de signes 
    for( var i = 0 ; i < signes.length  ; i++ )
    {
        
       // mets en lien la saisie et le tableau des signes
       if(i == temp)
       {
           
        // récupère la valeur du signes et du jour saisie , puis l'affiche dans le champ_utilisateur (énoncé afficher le signe et le jour )
        document.getElementById('champ_utilisateur').value = signes[i] + temp1;// syntaxe resultat dans champ 
           
        document.getElementById("champ_utilisateur").getAttribute("readonly");    
           
        // affichage du signes en correspondant au choix du mois !
        alert(signes[i]);// syntaxe messagebox
        
       }
    
    }    
    
}
