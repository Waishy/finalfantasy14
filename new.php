<?php
require './include/db.php';
$req = $pdo->query('SELECT * FROM news');
while ($data = $req->fetch()):
?>
<div class="article" onclick="scaleArt()">
  <h3 class="title">
                <?= utf8_encode($data->title)?>
</h3>      
            <img class="art-img" src="./images/mael.png" alt="">
        
                <?= utf8_encode($data->content) ?> <a href="https://fr.finalfantasyxiv.com/lodestone/">Le site officiel du jeu</a>
            
           <img src="./images/back.png" alt="" class="art-ilu">
        </div>
<?php endwhile;?>