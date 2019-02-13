<?php 

$user_id = $_GET['id'];

$token = $_GET['token'];

require './include/db.php';


$req = $pdo->prepare('SELECT * FROM membres WHERE role_id = ?');

$req->execute([$user_id]);

$user = $req->fetch();

if($user && $user->confirmation_token == $token) {

    session_start();
    $pdo->prepare('UPDATE membres SET confirmation_token = NULL, confirmed_at = NOW() WHERE role_id = ?')->execute([$user_id]);
    $_SESSION['auth'] = $user;

    $_SESSION['flash']['success'] = 'Compte créé avec succés !';
     //si l'tulisateur a un role_id de "" alors il se connecte a la page ""
     if($user->role_id == 1) {
        header('Location: register.php?id=1');
    }

    header('Location: index.php');

}

else {
    $_SESSION['flash']['danger'] = "Veuillez vous reconnecter ou vous réinscrire";
    header('Location: index.php');
}
?>

