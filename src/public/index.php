<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include "ref.php";
    ?>
    <title>Pokedex</title>

</head>
<body>
    <div class="logo mt-5">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/269px-International_Pok%C3%A9mon_logo.svg.png" height="100%" alt="logo"/>
    </div>
    <div class="search-container mt-5">
        <form class="form-inline" method="GET">
            <div class="form-group mx-sm-3 mb-2">
                <label class="mr-3">Pokemon</label>
                <input type="text" class="form-control" name="search" required placeholder="Enter ID or Name">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Search</button>
            <button type="reset" id="resetBtn" class="btn btn-danger mb-2 ml-2" onClick='redirectToURL(this.id)'>Clear</button>
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
        
        $data = $obj->whoIsThatPokemon($pokemon);

        echo '<pre>';

        echo "ID => ".$data->id. "\n";
        echo "Name => ".$data->name. "\n";
        echo "Height => ".$data->height." cm". "\n";
        echo "Weight => ".$data->weight." kg". "\n";
        echo "Image => ".$data->sprites->front_default;
    }
    
?>

<script type="text/javascript">
    function redirectToURL(btnId)
    {
        if(btnId=="resetBtn")
        {
            window.location.replace("http://localhost:8088/");
        }

    }
</script>
