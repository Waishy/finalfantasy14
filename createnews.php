<?php 
session_start();
require './include/functions.php';
include './include/header.php';
admin_only();
?>
<?php
        
        if (!empty($_POST)){
            $errors = array();

            if (empty($_POST['title'])){
                $errors['title'] = "vous n'avez pas renseigner de titre";
            }
            if (empty($_POST['content'])){
                $errors['content'] = "vous n'avez pas écrit";
            }
            if(empty($errors)){
                require './include/db.php';
        
                $req = $pdo->prepare('INSERT INTO news SET title = ?, content = ?, creation_date = NOW()');
                $req->execute([$_POST['title'],$_POST['content']]);
                $errors['message'] = 'message enregistré';
            }
              }
              else{
                  $errors['formulaire'] = 'Veuillez renseigner les champs';
              }
        ?>

<div id="main">
<form action="#" method="POST">
<?php if (isset($errors)){
    foreach ($errors as $message){
        echo "<p class='errortest'>$message</p>";
    }
}
?>
            <div class="titrenews">
                <label for="title" class="createtitle">Titre</label><br />
                <input type="text" id="title" name="title" />
            </div>
            <div class="contenunews">
                <label for="content" class="createcontent">Contenu</label><br />
                <textarea id="content" name="content" wrap="off" cols="30" rows="30" class="createarea"></textarea>
            </div>
            <div class="subbutton">
               <button type="submit">Poster</button>
            </div>
        </form>

        </div>


        

<?php
include './include/footer.php';
?>