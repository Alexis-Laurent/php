<!DOCTYPE html>
<html>
    <head>
        <?php
            require("initialisation.php");
            require("header.php");
            require("./Script/script.php");
        ?>    
    </head>

    <body>    
        <?php
            //affichage liste des produits + Onclick ajouterProduit  
            $mysqli=new mysqli ("localhost","root","","TP"); 
            $selectProduit="SELECT * FROM Produit";
            $result=$mysqli->query($selectProduit);

            if($result->num_rows>0){

                $nombre=$result->num_rows;

                echo'<div class="listeProduits">';
                    while($resultat=$result->fetch_assoc()){    //fetch_assoc() Récupère une ligne de résultat sous forme de tableau
                        ?>
                            <div class="classeProduits" onclick="javascript:ajouterProduit(<?php echo $resultat['IdProduit'];?>);">
                                <h3><?php echo $resultat["NomProduit"];?></h3>
                                <p><?php echo $resultat["PrixHT"];?></p>                            
                            </div>
                            
                            <!--Formulaire de quantitée-->
                            <div class="formulaireQuantite">
                                <input type="text" name="quantite" value="" placeholder="Quantité">           
                                <input type="submit" name="ajoutQuantite" value="Ajouter">
                            </div>

                            <!--drag-->
                            <div id="draggable<?php echo $resultat['IdProduit'];?>" class="draggable">
                                <p>Bouge moi</p>
                            </div> 
                            <br><br><br><br>                           
                        <?php       
                    }
                echo'</div>';
            }
        ?>        

        <!--drop-->
        <div id="droppable" class="droppable">
            <p>Pose ici</p>
        </div>  


        <script>
            //Fonction drag
            <?php
                $i=0;
                
                while($nombre>=$i){
                    echo"$( function() {
                            $( \"#draggable".$i."\" ).draggable();                        
                        }); ";
                        $i++;
                }
            ?>   
                     
            //Fonction drop
            $( function() {        
                $( "#droppable" ).droppable({
                drop: function( event, ui ) {
                    $( this )
                    .find( "p" )
                        .html( "Merci !" );
                }
                });
            }); 
        </script>  
    </body>
</html>