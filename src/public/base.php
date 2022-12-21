<?php 

    include "PokePhp.php";

    $obj = new Pokedex;

    if(isset($_GET['search']) && $_GET['search'] != NULL)
    {
        $pokemon = $_GET['search'];
        
        $data = $obj->whoIsThatPokemon($pokemon);

    }
    
?>