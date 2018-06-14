/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function renvoie()
{
    if(valider.click)
    {    
        
    if(document.getElementById(champ1.value)<=0 && document.getElementById(champ2.value)<=0)
    {
        
         alert("erreur ! les deux premiers champ sont obligatoire", document.getElementById("slBody").getAttribute("readonly") );
     
    }
    
    else(document.getElementById(champ1.value)>0 && document.getElementById(champ2.value)>0)
    {
        
        alert("vrai");
        champ1.focus();
        
    }
    
}

}

function affiche()
{
    
    
    
}