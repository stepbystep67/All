
<?php

// on met la saisie dans la variable
$userEntry = postVar('userEntry');

//  
$selectedHash = postVar('listeHash');

// 
$algos = hash_algos();

// 
$resultat = null;

if(null != $selectedHash)
{
    
    $resultat = hash($selectedHash,$userEntry); 
    
}

?>

<article>
    
    <header>
        
        <h1>Hash</h1>
        
    </header>
    
    <div>
        
        <form method="post" action="">
            
            <label for="userEntry">Entrée utilisateur</label>
                <input type="text" id="champ_a_encoder" name="userEntry" value="<?php echo $userEntry?>">
                
                <label for="listHash">Hash</label>
                <select id="listHash" name="listHash">
                    
                    <!-- affiche le dernier element selectionner  -->
                    <!--  affiche le resultat de cette fonction fillSelectByValues() -->
                    <?php echo fillSelectByValues($algos, $selectedHash) ?>
                    
                </select>
                
        </form>
           
        
    </div>
    
</article>