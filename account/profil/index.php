<?php $title = "Profil"; ?>
<?php $h1="Mon Profil"; ?>
<?php $isSidebar="isSidebar"; ?>
<?php ob_start(); ?>
<picture>
    <form class="imageFormulaire" action="" method="post">
        <div class="avatar" id="avatar">
            <img id="preview" src="#" alt="Aperçu de l'image">
        </div>
        <div class="inputs">
            <label for="image">Choisir une image :</label>
            <input type="file" id="pdp" name="pdp">
            <p>Ajoutez votre Photo de Profil</p>
            <button type="button" id="delete" style="display:none;">Supprimer l'image</button>
        </div>
    </form>
</picture>

<form class="formulaire" action="" method="post">

    <div>
        <input type="text" id="nom" name="nom" class="peer" placeholder=" " required>
        <label for="nom" class="peer-placeholder-shown:scale-100 peer-focus:-translate-y-6">Nom </label>
    </div>
    <div>
        <input type="text" id="prenom" name="prenom" class="peer" placeholder=" " required>
        <label for="prenom" class="peer-placeholder-shown:scale-100 peer-focus:-translate-y-6">Prénom </label>
    </div>
    <div>
        <input type="email" id="email" name="email" class="peer" placeholder=" " required>
        <label for="email" class="peer-placeholder-shown:scale-100 peer-focus:-translate-y-6">Adresse e-mail
        </label>
    </div>
    <div>
        <input type="text" id="Tel" name="Tel" class="peer" placeholder=" " required>
        <label for="numero" class="peer-placeholder-shown:scale-100 peer-focus:-translate-y-6">Numéro de
            téléphone </label>
    </div>
    <div>
        <input type="text" id="Postal" name="Postal" class="peer" placeholder=" " required>
        <label for="Postal" class="peer-placeholder-shown:scale-100 peer-focus:-translate-y-6">Code Postal
        </label>
    </div>
    <div>
        <input type="text" id="Adresse" name="Adresse" class="peer" placeholder=" " required>
        <label for="Adresse" class="peer-placeholder-shown:scale-100 peer-focus:-translate-y-6">Adresse </label>
    </div>
    <div>
        <button type="submit" id="Modifier" name="Modifier">Modifier</button>
    </div>
</form>

<form class="formulaire" action="" method="post">
    <div>
        <button type="submit" id="Supprimer" name="Supprimer">Supprimer mon compte</button>
    </div>
</form>
<script src="./index.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('../../templates/layout.php') ?>