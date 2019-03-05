<?php
require_once './include/functions.php';
session_start();
if(isset($_SESSION['auth'])){
    header('createnews.php');
        exit();
}
if(!empty($_POST) && !empty($_POST['nom']) && !empty($_POST['password'])) {
    require_once './include/db.php';
    $req = $pdo->prepare('SELECT * FROM membres WHERE confirmed_at IS NOT NULL');
    $req->execute([$_POST['nom']]);
    $user = $req->fetch();
    if($user) {
        
    if(password_verify($_POST['password'], $user->password)) {
        
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
        
        header('Location: createnews.php');
    }

    else {
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
    }
    }else {
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
    }
}

?>

<?php require './include/header.php'; ?>
<div id="main">
<div class="page">
<h1>Se connecter</h1>

<div class="login">
        
        <form action="#" method="POST">
    
            <div class="form-group">
    
                <label for="">Pseudo</label>
                <input class="" type="text" name="nom" >
    
            </div>
    
            <div class="">
    
                <label for="">Mot de passe</label>
                <input class="" type="password" name="password"  >
    
            </div>

    

            <button type="submit" class="">Se connecter</button>
            
        </form>
        </div>
    </div>
    </div>

    <?php
    include './include/footer.php';
    ?>