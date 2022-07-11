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
<link href="css/style.css" rel="stylesheet">
<link rel="icon" href="./assets/logofav.png"/>

<header>
    <div class="logo">
        <a class="navbar-brand" href="index.php">
        <img src="./assets/logo.png" alt="Feeling Guadeloupe">
         </a>
     </div>
    <nav>
        <div class="container-fluid">
                <div class="menu">
                    <a href="index.php?useCase=circuit&action=dashboard"" class="menunav">Circuit</a>
                    <a href="#" class="menunav">Activité</a>
                    <a href="#" class="menunav">Hébergement</a>
                    <a href="#" class="menunav">Services</a>
                    <?php if(isset($_SESSION['id_client'])) {
                            include('Views\logOutBtn.php');
                        } ?>
                </div>
                <div class="btnmenu">
                    <div class="navbar-light navbar-1 white">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
                                aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent15">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php?useCase=circuit">Circuit</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Activité</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Hébergement</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div><div class="information">
        <?php if (isset($_SESSION['id_client'])) {
            echo('Vous êtes connecter en tant que ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom']);
        } ?> </div>
         </nav>
</header>
<body>