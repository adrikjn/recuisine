<h1 class="mt-5 text-center">Gestion des utilisateurs</h1>
<section class="row">
    <div class="col-3 p-3">
        <?php require "assets/lib/menu-privee.php" ?>
    </div>
    <div class="col">
        <div class="text-end mb-3">
            <a href="<?php echo WWW ?>?page=user&partie=privee&action=add" class="btn btn btn-primary"> Ajouter un nouveau profil 
        </a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>email</th>
                    <th>password</th>
                    <th>dt_creation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="" class="btn btn-warning me-2">Modifier</a>
                        <a href="" class="btn btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            </tbody>
        </table>


    </div>
</section>