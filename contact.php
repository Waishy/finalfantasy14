<?php 
include './include/header.php'
?>

<div id="main">
<div class="formulaire">


    <form method="post" action="#">
     <p>Pseudo :</p>
    <input type="text" name="Pseudo" /><br/>
    <p>Monde :</p>
    <input type="text" name="Monde" /><br/>
    <p>Activité recherchée :</p>
    <input type="text" name="Activité rechercher" /><br/>
    <p>Age :</p>
    <input type="text" name="Age" /><br/>
    <p>Bière favorite :</p>
    <input type="text" name="bière" /><br/>
    <p>Classe principale :</p>
    <input type="text" name="classe" /><br/>
    <p>Addresse Mail :</p>
    <input type="text" name="mail" /><br/> 
    <p>Petite présentation :</p>
    <textarea name="" id="" cols="50" rows="15"></textarea><br/>  
    <button type="submit">Envoyer</button>
     
    </form>
</div>
</div>

<?php 
include './include/footer.php'
?>