<?php 
include './include/header.php'
?>

<div id="main">
<div class="formulaire">


    <form method="post" action="./include/mail.php">
     <p>Pseudo :</p>
    <input type="text" name="Pseudo" required/><br/>
    <p>Monde :</p>
    <input type="text" name="Monde" required/><br/>
    <p>Activité recherchée :</p>
    <input type="text" name="activite" /><br/>
    <p>Age :</p>
    <input type="text" name="age" /><br/>
    <p>Bière favorite :</p>
    <input type="text" name="biere" /><br/>
    <p>Classe principale :</p>
    <input type="text" name="classe" /><br/>
    <p>Adresse Mail :</p>
    <input type="text" name="mail" required/><br/> 
    <p>Petite présentation :</p>
    <textarea name="presentation" id="" cols="50" rows="15"></textarea><br/>  
    <button type="submit">Envoyer</button>
     
    </form>
</div>
</div>

<?php 
include './include/footer.php'
?>