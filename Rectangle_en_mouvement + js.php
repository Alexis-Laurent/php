<?php

class rectangle{
    var $longueur;
    var $largeur;
    var $background;
    var $posX;
    var $posY;
    var $blocHTML;
    var $borderRadius;

    function __construct($longueur=0,$largeur=0,$posX=0,$posY=0,$background="red",$borderRadius=0){
        $this->longueur=$longueur;
        $this->largeur=$largeur;
        $this->posX=$posX;
        $this->posY=$posY;
        $this->background=$background;
        $this->borderRadius=$borderRadius;
    }

    function ajouterRectangle(){
        $this->blocHTML="<div class='rectangle' id='rectangle' onclick='deplacer()' style='width:".$this->largeur."px;height:".$this->longueur."px;background:".$this->background.";left:".$this->posX."px;top:".$this->posY."px;position:absolute;border-radius:".$this->borderRadius."px;'></div>";
        return $this->blocHTML;
    }    
}

$i=0;
$posX=0;
$posY=0;


// Rectangle clic mouvement
$rectangle1 = new rectangle(100,100,$posX,$posY,"red",10);
    echo $rectangle1 ->ajouterRectangle();
?>

<script>
    function deplacer(){
        if(parseInt(document.getElementById("rectangle").style.left)<(screen.width-500)){
            document.getElementById("rectangle").style.left=parseInt(document.getElementById("rectangle").style.left)+10;
        }
        setTimeout("deplacer()",100);
    }
    deplacer();

</script>