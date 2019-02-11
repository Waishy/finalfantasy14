<?php 
include './include/header.php'
?>

<style>


</style>
<div id="main">
<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <div>
                <label for="title">Titre</label><br />
                <input type="text" id="title" name="title" />
            </div>
            <div>
                <label for="content">Contenu</label><br />
                <textarea id="content" name="content"></textarea>
            </div>
            <div>
               <button type="submit">envoyer</button>
            </div>
        </form>

        </div>


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
        
                $req = $db->prepare('INSERT INTO news SET content = ?, title = ?, creation_date = NOW()');
                $req->execute([$_POST['title'],$_POST['content']]);
            }
              }
              else{
                  $errors;
              }
        ?>