<?php

class Pokedex
{
    private $pokename = "dialga";

    public function __construct()
    {
        $this->site = 'https://pokeapi.co/api/v2/pokemon';
    }

    public function getSearch()
    {
        $search = (string)$this->pokename;

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

    public function whoIsThatPokemon()
    {
        $search = $this->getSearch();

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

        echo '<pre>';

        echo "ID => ".$data->id. "\n";
        echo "Name => ".$data->name. "\n";
        echo "Height => ".$data->height." cm". "\n";
        echo "Weight => ".$data->weight." kg". "\n";
        echo "Image => ".$data->sprites->front_default;

        curl_close($ch);
    }

}

    $obj = new Pokedex;

    $obj->whoIsThatPokemon();

?>

