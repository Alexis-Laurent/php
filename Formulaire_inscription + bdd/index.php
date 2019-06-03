<!DOCTYPE html>
<html>
    <header>
        <?php
            require("initialisation.php");
            require("header.php");
        ?>
    </header>

    <body>
        <div class="header">
            <div class="titre">
                <h1>AlexBook</h1>
            </div>    

            <div class="connexion">
                <form method="GET" action="index.php">
                    <h2>Connexion</h2>
                    <input type="text" name="email" value="" placeholder="Email">
                    <input type="text" name="motdepasse" value="" placeholder="Mot de passe">           
                    <input type="submit" name="envoyer" value="Envoyer">
                </form><br/>   
            </div>
        </div>

        <div class="inscription">
            <h2>Inscription</h2>
            <p>C’est gratuit (et ça le restera toujours)</p>
            <form method="GET" action="index.php">
                <input class="form" type="text" name="nom" value="" placeholder="Nom"><br/>
                <input class="form" type="text" name="prenom" value="" placeholder="Prenom"><br/>
                <input class="form" type="text" name="email" value="" placeholder="Email"><br/>
                <input class="form" type="text" name="motdepasse" value="" placeholder="Mot de passe"><br/>
                <input class="buttom" type="submit" name="envoyer" value="Envoyer">
            </form><br/> 
        </div>  


        <?php        
            $mysqli=new mysqli (HOST,LOGIN,PWD,BDD);
            
            
            //afficher les utilisateurs
            /*
            $selectUser="SELECT * FROM Utilisateur";
            
            $queryResult=$mysqli->query($selectUser);

            if($queryResult->num_rows>0){
                while ($resultat_requete=$queryResult->fetch_assoc()) {
                    echo $resultat_requete["Nom"]." ".["Prenom"]."<br/>";
                }
            }
            echo $queryResult->num_rows;
            */        
            

            //create un utilisateur
            $nom=$_GET["nom"];
            $prenom=$_GET["prenom"];
            $email=$_GET["email"];
            $motdepasse=$_GET["motdepasse"];
            
            $stmt = $mysqli->prepare("INSERT INTO Utilisateur(Nom,Prenom,Email,Password) values(?,?,?,?)");  //stmt protection contre les injections
            $stmt->bind_param('ssss', $nom, $prenom, $email, $motdepasse);
            $stmt->execute();
            $stmt->close();


            // Information du navigateur
            //echo $_SERVER['HTTP_USER_AGENT']; 
        ?>
    </body>
</html>
