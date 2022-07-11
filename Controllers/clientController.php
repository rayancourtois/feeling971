<?php
require_once('Models\clientModel.php');

if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
    switch ($action) {
        case 'logIn':
            if (isset($_REQUEST['mail'], $_REQUEST['password'])) {
                $mail = $_REQUEST['mail'];
                $password = $_REQUEST['password'];
                $client = getLogInInfosClient($mail, $password);
                if ( $client == null) {
                    $message = "Login ou mot de passe incorrect";
                    include('Views\notificationVue.php');
                    include_once('Views\login.php');
                } else {
                    $id = $client['id_client'];
                    $nom = $client['nom_client'];
                    $prenom = $client['prenom_client'];
                    logIn($id, $nom, $prenom);
                    include('Views\homepage.php');
                }
            }
            break;

        case 'espaceAdmin':
            include ('Views\login.php');
            break;
    }
}