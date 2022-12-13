<?php

$ch = curl_init();

$url = 'https://pokeapi.co/api/v2/pokemon/bulbasaur';

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);

echo '<pre>';

print_r(curl_getinfo($ch));

curl_close($ch);