<?php
//créer un fichier
$myfile = fopen("newfile.txt", "w");

//écriture
$txt = "Lorem ipsum";
fwrite($myfile, $txt);

//lecture
$myfile = fopen("newfile.txt", "r");
$read=fread($myfile,filesize("newfile.txt"));

//fermeture
fclose($myfile);

//affichage
echo $read;
?>
