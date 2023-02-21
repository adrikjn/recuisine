<h1 class="text-center mt-5">Connexion</h1>

<form action="f" method="POST">
    <div class="row mt-5">
        <div class="col-3 offset-3">
            <input type="text" name="login" placeholder="login" id="login" class="form-control">
        </div>
        <div class="col-3">
            <input type="password" name="password" id="password" placeholder="mot de passe" class="form-control">
        </div>
        <div class="col-12 d-flex justify-content-center mt-5">
            <input type="submit" class="btn btn-outline-primary">
        </div>
    </div>
    <?php if(!empty($_SESSION["message"])) : ?>
    <?php if($_SESSION["message"]["alert"] === "success") : ?> 
        <p class="alert alert-success" >
            <?php echo $_SESSION["message"]["info"]  ?>
        </p>
    <?php elseif($_SESSION["message"]["alert"] === "danger") : ?> 
        <p class="alert alert-danger">
            <?php foreach($_SESSION["message"]["info"] as $i) : ?>
                <?php echo $i  ?><br>
            <?php endforeach ?>
        </p>
    <?php endif ?>
<?php endif ?>

</form>