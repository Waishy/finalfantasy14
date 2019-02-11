<?php
include './include/header.php';
?>



<?php
require './include/db.php';
$req = $pdo->query('SELECT * FROM news');
while ($data = $req->fetch()):
    
?>
<div id="main">
    <div class="page">
        <div class="article" onclick="scaleArt()">
            <h3 class="title">
                <?= $data->title?>
            </h3>
            <img class="art-img" src="./images/mael.png" alt="">
            <p>
                <?= $data->content ?> <a href="https://fr.finalfantasyxiv.com/lodestone/">Le site officiel du jeu</a>
            </p>
            <img src="./images/back.png" alt="" class="art-ilu">
        </div>
        </div>
</div>



</div>
</div>

<?php

endwhile;
?>


<?php
include './include/footer.php';
?>