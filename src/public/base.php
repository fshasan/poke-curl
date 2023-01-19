<?php 

    include "PokePhp.php";

    $obj = new Pokedex;

    if(isset($_GET['search']))
    {
        $pokemon = $_GET['search'];
        
        $data = $obj->whoIsThatPokemon($pokemon);

        $pokemonDetails = array(
            'id' => $data->id,
            'name' => $data->name,
            'front_image' => $data->sprites->front_default,
            'type_1' => $data->types[0]->type->name,
            'type_2' => $data->types[1]->type->name,
            'ability_1' => $data->abilities[0]->ability->name,
            'ability_2' => $data->abilities[1]->ability->name,
            'height' => $data->height * 10,
            'weight' => $data->weight / 10
        );

    }
    
?>
