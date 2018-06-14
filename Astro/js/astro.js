
// 
function validFormulaire()
{
    
    if(formOk())
    {
        
        var resultat = valNum();
    
        var signe = calculSigne();
    
        document.getElementById("Pseudo").value = (signe + resultat.toString());
        
        creerCookie();
        
        return true;
    
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
    
    alert("ValNum: " + resultat);
    
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

// recuperation des données et les mettre dans le cookie 
function creerCookie()
{
    
    // creation d'un cookie ! a gauche on le stock et a droite on le recupere !
    document.cookie = "champ_libre=" + document.getElementById("champ_libre").value;
    document.cookie = "NomUtilisateur=" + document.getElementById("NomUtilisateur").value;
    document.cookie = "PrenomUtilisateur=" + document.getElementById("PrenomUtilisateur").value;
    document.cookie = "DatedeNaissance=" + document.getElementById("DatedeNaissance").value;
    
    // 1 D'abord, la paire nom et valeur / 2 Puis un point-virgule et un espace / 3 La date d'expiration dans un format correct (expires=Sun, 28 Feb 2010 00:00:00 UTC)/4 De nouveau un point-virgule et un espace./5Le domaine (path=/).
    document.cookie = "Pseudo=" + document.getElementById("Pseudo").value + '; Expires=Sat, 31 Mar 2018 00:00:00 GMT';
    
    // affiche une liste d'objet 
    console.log(document.cookie);
    
    
}

// 
function lireCookie()
{
    
    // resultat correspond a div du fichier html Acceuil, sert a acceder au nouveau fichier html  
    var resultat = document.getElementById("resultat");
    
    // temp contient le cookie separer par element grace a split par des point virgules et un espace
    var temp = document.cookie.split("; ");
    
    // affiche les element
    console.log(temp);
    
    // i a l'index 0 ; i doit etre inferieur a la longeur de temp (cookie) ; incrementation de i 
    for(i=0; i<temp.length;i++)
    {
        
        // affiche dans le fichier html avec un saut de ligne a chaque element
        resultat.innerHTML += temp[i] +"<br>" ;
        
    }
    
}

// fonction qui calcul le nombre de jour avant la date d'anniversaire 
function nbJoursAnniv()
{
    
    // comparer les mois et années, jours
    
    // mettre la date actuelle dans la variable 
    var aujourdhui = new Date();
    
    // mettre la date saisie de l'utilisateur dans la variable
    var dateDeNaissance = new Date(document.getElementById("DatedeNaissance").value);
    
    var unJour = 24*60*60*1000; // heure minute seconde milliseconde
    
    var temp = (dateDeNaissance.getDate(dateDeNaissance) >= aujourdhui.getDate(aujourdhui) );
    
    if (dateDeNaissance.getMonth().value <= aujourdhui.getMonth().value)
    {
    
        var diffJour = Math.round(Math.abs((aujourdhui.getTime()-dateDeNaissance.getTime())/(unJour)));
        
        
    }
    
}
