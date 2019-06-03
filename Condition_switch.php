<?php
    $note = 10;

    switch ($note)
    { 
        case 0: 
            echo "Tu es nul";
        break;
        
        case 5: 
            echo "Tu es mauvais";
        break;              
        
        case 10: 
            echo "Tu as pile poil la moyenne";
        break;       
        
        case 15:
            echo "Tu te débrouilles bien !";
        break;
        
        case 20:
            echo "Excellent travail, c'est parfait !";
        break;
        
        default:
            echo "Désolé, je n'ai pas de message à afficher pour cette note";
    }
?>