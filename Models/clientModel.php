    <?php
    require_once('Model.php');

function getLogInInfosClient($mail, $password)
{
    global $database;
    $query = "SELECT client.id_client, client.nom_client, client.prenom_client FROM client  WHERE client.mail_client='$mail' AND client.password_client='$password'";
    $req = $database->prepare($query);
    $req->execute();
    $ligne = $req->fetch();
    return $ligne;
}

function logIn($id, $nom, $prenom)
{
    $_SESSION['id_client'] = $id;
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
}
