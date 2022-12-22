<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include "ref.php";
        include "base.php";
    ?>
    <title>Pokedex</title>

</head>
<body>
    <div class="logo mt-5">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/269px-International_Pok%C3%A9mon_logo.svg.png" height="100%" alt="logo"/>
    </div>
    <div class="search-container mt-3">
        <form class="form-inline" method="GET">
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" id="searchID" name="search" required placeholder="Enter ID or Name">
            </div>
            <button type="submit" id="search-id" class="btn btn-primary mb-2"><i class="bi bi-binoculars-fill"></i></button>
            <button type="reset" id="resetBtn" class="btn btn-danger mb-2 ml-2" onClick='redirectToURL(this.id)'><i class="bi bi-stars"></i></button>
        </form>
    </div>
    <div class="content-container mt-3">
        <div class="form-group">
            <label>ID</label>
            <input type="text" id="poke-id" class="form-control" name="id" disabled value="<?php echo $data->id ?? ''?>">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" id="poke-name" class="form-control" name="name" disabled value="<?php echo $data->name ?? ''?>">
        </div>
        <div class="form-group">
            <label>Height in cm</label>
            <input type="text" id="poke-height" class="form-control" name="height" disabled value="<?php echo $data->height  ?? ''?>">
        </div>
        <div class="form-group">
            <label>Weight in kg</label>
            <input type="text" id="poke-weight" class="form-control" name="weight" disabled value="<?php echo $data->weight ?? ''?>">
        </div>
        <div class="form-group">
            <label>Types</label>
            <input type="text" id="poke-types" class="form-control" name="types" disabled value="<?php echo $data->types[0]->type->name ?? ''?>">
            <input type="text" id="poke-types" class="form-control" name="types" disabled value="<?php echo $data->types[1]->type->name ?? ''?>">
        </div>

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
