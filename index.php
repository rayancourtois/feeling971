<?php
if (session_id() == "") {
    session_start();
}
if (isset($_REQUEST['useCase'])) {
    $useCase = $_REQUEST['useCase'];

    switch ($useCase) {

        case 'client':
            include('Controllers/clientController.php');
            break;

        case 'circuit':
            include('Controllers/circuitController.php');
            break;

        case 'logInView':
            include('Views\login.php');
            break;

        case 'logOut':
            session_destroy();
            if (isset($_SESSION['id_client'])) {
                unset($_SESSION['id_client']);
                unset($_SESSION['nom']);
                unset($_SESSION['prenom']);
                include('Views\login.php');
            }
            break;
    }

} else {
    if (isset($_SESSION['id_client'])) {
        include('Views/homepage.php');
    } else {
        // Demande d'inscription via Wordpress...
       // include('');
        include('Views/login.php');
    }
}