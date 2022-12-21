<?php

class Pokedex
{

    public function __construct()
    {
        $this->site = 'https://pokeapi.co/api/v2/pokemon';
    }

    public function getSearch($pokemon)
    {
        $search = (string)$pokemon;

        if (is_string($search))
        {
            if (preg_match('/^\d/', $search) === 1)
            {
                $search = (int)$search;
            }
            else
            {
                $search = strtolower($search);
            }
        }
        return $search;

    }

    public function whoIsThatPokemon($pokemon)
    {
        $search = $this->getSearch($pokemon);

        $url =  $this->site.'/'.$search;

        return $this->getPokemon($url);
    } 

    public function getPokemon($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);

        $data = json_decode($response);

        curl_close($ch);

        return $data;
    }

}

?>

