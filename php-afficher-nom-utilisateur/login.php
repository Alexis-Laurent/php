<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <!--afficher le nom d'utilisateur-->
    <?php
    session_start();
    if(isset($_SESSION['user'])){
    echo "Bienvenue ".$_SESSION['user']." ".date('h:i:s');
    }
    ?>

    <h2>Formulaire de connexion</h2>

    <form id="login-form" action="result.php" method="post">
        <input type="text" placeholder="user" name="user" id="user">
        <input type="text" placeholder="password" name="password" id="password">
        <input type="submit" id="valider" value="valider" name="valider">       
    </form>

</body>
</html>