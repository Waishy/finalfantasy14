<?php 
include './include/header.php'
?>
<style>
.formulaire{
    text-align: center;
    margin-top: 20%;
    background: rgba(235, 221, 221, 0.5);
    border-radius:10px;
    display: flex;
    justify-content:center;
    align-items:center;
    width:20%;
    margin-left:40%;
    padding:2.5%;
    margin-top:2%;
    position: fixed;
}
input{
    margin:1.5%;
}
p{
    margin 2.5%;
}
</style>
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
    <textarea name="" id="" cols="30" rows="10"></textarea><br/>  
    <button type="submit">Envoyé</button>
     
    </form>
</div>
</div>

<?php 
include './include/footer.php'
?>