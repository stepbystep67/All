function validFormulaire()
{
    if(formOk())
    {
        
        var resultat = valNum();
    
        var signe = calculSigne();
    
        document.getElementById("Pseudo").value = (signe + resultat.toString());
        
        creerCookie();
    
    }
    else
    {
        alert("remplissez les champs");
    }
   
    //alert(resultat);
    return false;
}

function valNum()
{
    var nom = document.getElementById("NomUtilisateur").value;
    
    var prenom = document.getElementById("PrenomUtilisateur").value;
    
    var maChaine = (nom + prenom).toUpperCase();
    
    //console.log(valeur);
    
    var resultat = 0;
    
    for(i=0; i< maChaine.length; i++)
    {
        resultat += (maChaine.charCodeAt(i)-64);
    }
    
    alert("ValNum: " + resultat)
    return resultat;
}



// fonction qui crée une liste(tableau) et creer une variable temporaire qui contient la saisie utilisateur
function calculSigne()
{
    
    var DatedeNaissance = document.getElementById("DatedeNaissance").value;
    
    var dateUtilisateur = new Date(DatedeNaissance);
    
    var mois = dateUtilisateur.getMonth();
    
    console.log(mois);
    
    // tableau avec tous les signes (respecter l'ordre chronologique 
    signes = ["Verseau","Poisson","Belier","Taureau","Gémeaux","Cancer","Lion","Vierge","Balance","Scorpion","Sagittaire","Capricorne"];
   
    // i doit etre inferieur a la longueur de signes 
    for( var i = 0 ; i < signes.length  ; i++ )
    {
        
       // mets en lien la saisie et le tableau des signes
       if(i == mois)
       {
           alert("Signe: " + signes[i]);// syntaxe messagebox
           
           return signes[i];
       }
    
    }    
    
}

function formOk()
{
    var nom = document.getElementById("NomUtilisateur").value;
    
    var prenom = document.getElementById("PrenomUtilisateur").value;
    
    if(nom.length < 1 || prenom.length < 1)
    {
        return false;
    }
    
    return true;
}


function creerCookie()
{
    
}


