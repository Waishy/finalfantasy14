<?php 
include './include/header.php'
?>
<?php
if(isset($_COOKIE['accept_cookie'])) {
   $showcookie = false;
} else {
   $showcookie = true;
}
require_once('index.php');
?>

<div id="main">
    <div class="marquee">
        <p>Une bonne année et de joyeuses fêtes les copains</p>
    </div>
    <div class="page">
        <div class="header_art">Bienvenue chez Drunken Chocobo</div>
        <br>
        <hr class="sep_title">
        <div class="article">
        <h3 class="title">Ouverture du site</h3>
            <img class="art-img" src="./images/mael.png" alt="">
            <p>Petit news rapide pour vous annoncer la sortie prochaine de la deuxième partie du patch 4.5 avec de nombreuses nouveautés <br><br>
        Fin de la relique, fin de l'épopée de Stormblood et nombreuses nouveautés pour finir en beauté cette extension et commencer a entammer la nouvelle <br><br>
    Pour plus d'infos : <a href="https://fr.finalfantasyxiv.com/lodestone/">Le site officiel du jeu</a> </p>
            <img src="./images/back.png" alt="" class="art-ilu">
        </div>
        <div class='morenews'><a href="news.php">Plus de news --></a></div>
    </div>
    <iframe class="api" src="https://discordapp.com/widget?id=305349187669590017&theme=dark" width="225" height="400"
        allowtransparency="true" frameborder="0"></iframe>

    <div class="img_serv"><a href="./membre.php"><img src="./images/moogle.png" alt="serveur"></a></div>
    <?php if($showcookie) { ?>
    <div class="cookie-alert">
   En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies pour vous proposer des contenus et services adaptés à vos centres d’intérêts.<br /><a href="include/cookie.php">OK</a>
</div>
<?php } ?>
</div>
<?php 
include './include/footer.php'
?>