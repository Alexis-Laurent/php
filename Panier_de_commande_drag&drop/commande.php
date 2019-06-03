<?php   
   
    //Requête ajouter une commande dans la BDD 
    
    $mysqli=new mysqli ("localhost","root","","TP");    

    if(isset($_POST["IdProduit"])){

        $req = "SELECT * FROM Produit WHERE IdProduit=".$_POST["IdProduit"];
        $result=$mysqli->query($req);              

        if($result->num_rows>0){            
            $stmt = $mysqli->prepare("INSERT INTO Commande(IdProduit,Quantite,PrixTotalHT) VALUES(?,?,?)"); //stmt protection contre les injections
            $stmt->bind_param('iid',$IdProduit,$Quantite,$PrixTotalHT);             

            $stmt->execute();
            echo"Commande enregistrée";
            $stmt->close();
        }
        else{
            echo"Commande non enregistrée";
        }
    }
    else{
        echo"Erreur Commande";
    }

?>