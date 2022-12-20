<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Pokedex</title>
</head>
<body>
    <div class="container mt-5" style="float: center">
        <form class="form-inline" method="GET">
            <div class="form-group mx-sm-3 mb-2">
                <label class="mr-3">Pokemon</label>
                <input type="text" class="form-control" name="search" required placeholder="Enter ID or Name">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Search</button>
            <button type="reset"class="btn btn-danger mb-2 ml-2">Clear</button>
        </form>
    </div>
</body>
</html>

<?php 

    include "PokePhp.php";

    $obj = new Pokedex;

    if(isset($_GET['search']) && $_GET['search'] != NULL)
    {
        $pokemon = $_GET['search'];
        
        $obj->whoIsThatPokemon($pokemon);
    }

    
?>
