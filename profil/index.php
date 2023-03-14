<?php $title = "Profil"; ?>
<?php ob_start(); ?>
<?php require('../templates/header/header.php'); ?>
<main>
    <div class="main__container">

        <h1>Mon Profil</h1>
        <picture>

            <img id="image-preview">
            <h1>PHOTO DE PROFIL</h1>
            <form id="form">
                <label for="image">Choisir une image :</label>
                <input type="file" id="pdp" name="pdp">
                <br>
                <img id="preview" src="#" alt="Aperçu de l'image" style="display:none; max-width: 400px;">
                <br>
                <button type="button" id="delete" style="display:none;">Supprimer l'image</button>
            </form>



        </picture>


        <p>Ajoutez votre Photo de Profil</p>


        <form id="inscription-form">
            <label for="nom">Nom :</label>
            <br>
            <input type="text" id="nom" name="nom" required>
            <br>
            <label for="prenom">Prénom :</label>
            <br>
            <input type="text" id="prenom" name="prenom" required>
            <br>
            <label for="email">Adresse e-mail :</label>
            <br>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="numero">Numéro de téléphone :</label>
            <br>
            <input type="numero" id="numero" name="numero" required>

        </form>

    </div>
</main>
<?php require('../templates/footer/footer.php'); ?>
<script src="./index.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('../templates/layout.php') ?>