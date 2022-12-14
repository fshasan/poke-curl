<?php

class Pokedex
{
    public function __construct()
    {
        $this->site = 'https://pokeapi.co/api/v2';
    }

    public function pokemonByName($endPoint = 'pokemon', $name = 'bulbasaur')
    {
        $url =  $this->site.'/'.$endPoint.'/?name='.$name;

        return $this->getPokemon($url);
    } 

    public function getPokemon($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);

        echo '<pre>';

        print_r(curl_getinfo($ch));

        curl_close($ch);
    }

}

$obj = new Pokedex;

$obj->pokemonByName();

?>

