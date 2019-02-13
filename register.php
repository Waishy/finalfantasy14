<?php 
require './include/functions.php';
?>

<?php 

if (!empty($_POST)) {

    $errors = array();
    require_once './include/db.php';

    if(empty($_POST['nom'])) {
        $errors['nom'] = "Veuillez entrer votre Nom";
    }
    
    if(strlen($_POST['password']) < 6) {
        $errors['password'] = "Mot de passe invalide, un minimum de 6 caractères est requis";
    }

    if(empty($_POST['password'])) {
        $errors['password'] = "Veuillez entrer votre mot de passe";
    }

    if(($_POST['password']) != $_POST['password_confirm']) {
        $errors['password'] = "Les deux mot de passe sont différents";
    }

    if(empty($errors)) {

        $req = $pdo->prepare("INSERT INTO membres SET nom = ?, password = ?, confirmation_token = ?, role_id = ?");
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $token = str_random(60);

        $req->execute([$_POST['nom'], $password, $token, $_POST['utilisateur']]);

        $user_id = $pdo->lastInsertId();

        header('Location: ./confirm.php?id=' . $user_id . '&token=' .$token); //permet de rediriger vers confirm.php avec l'id et le token en GET

        exit();
    }
}

?>

<?php include './include/header.php'; ?>

<h1 class="title-content">Inscrire un nouvel utilisateur</h1>

<?php if(!empty($errors)): ?>
<div class="errortest">
    <ul>
    <?php foreach($errors as $error): ?>
        <li><?= $error; ?></li>
    <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<div id="main">
 <div class="page">
        <div class="inscript">
        <form action="#" method="POST">
    
            <div class="insinput">
    
                <label for="">Nom</label> <br>
                <input class="" type="text" name="nom" >
    
            </div>
    
            <div class="insinput">
    
                <label for="">Mot de passe</label> <br>
                <input class="" type="password" name="password"  >
    
            </div>
    
            <div class="insinput">
    
                <label for="">Comfirmez votre mot de passe</label> <br>
                <input class="" type="password" name="password_confirm" >
    
            </div>
            <div class="radiobut">

    <input type="radio" id="admin" name="utilisateur" class="radiobut" value="1">
    <label class="radiobut" for="admin">Administrateur</label>

</div>
            <button type="submit" class="insinput">Inscrire</button>
            
        </form>
        </div>
    </div>

    </div>

<?php require_once './include/footer.php'; ?>