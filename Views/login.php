<!doctype html>
<html lang="fr">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Application web">
<title>Feeling Guadeloupe - Application</title>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="icon" href="./assets/logofav.png"/>
<link href="css/style2.css" rel="stylesheet">

<div class="logo">
    <a class="navbar-brand" href="index.php">
        <img src="./assets/logo.png" alt="Feeling Guadeloupe">
    </a>
</div>

<div class="container-fluid">
    <div class="row justify-content-center align-items-center d-flex-row text-center">
        <div class="col-12 col-lg-4 h-50 ">
            <div class="card shadow border border-5">
                <div class="card-body mx-auto">
                    <h4 class="card-title mt-3 text-center">Connexion</h4><br>
                    <form method="POST" action="index.php?useCase=client&action=logIn">
                        <div class="form-group input-group mb-3">
                            <input name="mail" class="form-control" placeholder="Mail :" type="text" required>
                        </div>
                        <div class="form-group input-group mb-3">
                            <input name="password" class="form-control" placeholder="Mot de passe :" type="password"
                                   required>
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-outline-primary">Se connecter</button>
                        </div>
                        <a href="#">Vous n'avez pas de compte ? Inscrivez-vous ici.</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

