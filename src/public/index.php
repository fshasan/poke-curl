<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include "ref.php";
        include "base.php";
    ?>
    <title>Poke Curl</title>

</head>
<body>
    <div class="example-box">
    <div class="background-shapes"></div>
        <div class="logo">
        <img src="https://cutt.ly/Q2Wh1oB" height="100%" alt="logo"/>
        </div>
        <div class="search-container mt-3">
            <form class="form-inline" method="GET">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control" id="searchID" name="search" required placeholder="Enter ID or Name" autocomplete="off">
                </div>
                <button type="submit" id="search-id" class="btn btn-primary mb-2"><i class="bi bi-binoculars-fill"></i></button>
                <button type="reset" id="resetBtn" class="btn btn-info mb-2 ml-2" onClick='redirectToURL(this.id)'><i class="bi bi-stars"></i></button>
            </form>
        </div>
        <main>
            <div class="pokemon-card">
                <div class="image-container">
                    <img src=<?php echo $pokemonDetails['front_image'] ?? "https://cutt.ly/02RQ5TZ"?> alt="<?php echo $pokemonDetails['id'] ?? ''?>" width="360px" height="200px">
                </div>       
                <div class="contents mt-4">
                    <p>Name: <?php echo $pokemonDetails['name'] ?? '' ?></p>
                    <p>Type: <?php echo $pokemonDetails['type_1'] ?? ''?> <?php echo $pokemonDetails['type_2'] ?? ''?> </p>
                    <p>Abilities: <?php echo $pokemonDetails['ability_1'] ?? ''?> <?php echo $pokemonDetails['ability_2'] ?? ''?></p>
                    <p>Height: <?php echo $pokemonDetails['height'] ?? ''?> cm</p>
                    <p>Weight: <?php echo $pokemonDetails['weight'] ?? ''?> kg</p>
                </div>
            </div>
        </main>
    </div>
</body>

</html>

<script type="text/javascript">
    function redirectToURL(btnId)
    {
        if(btnId=="resetBtn")
        {
            window.location.replace("http://localhost:8088/");
        }
    }
</script>
