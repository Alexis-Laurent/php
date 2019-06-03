<script>

    //requete AJAX ajouter une commande dans la BDD    
        
    function ajouterProduit(IdProduit){
            console.log("Produit ajoutée : "+IdProduit);

        $.ajax({
            type: 'POST',
            datatype: 'html',
            url: 'commande.php',
            data: {
                IdProduit:IdProduit,                         
            },
            success: function (data) {   
                alert(data+IdProduit);
            },        
            error: function (data) {
                alert('error:' + data);
            }
        });        
    }          

</script>