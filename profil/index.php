<?php $title = "Profil"; ?>
<?php ob_start(); ?>
<?php require('../templates/header/header.php'); ?>
<main>
    <div class="main__container">

        <h1>Mon Profil</h1>
        <picture>
            <form action="" method="post">
                <label for="image">Choisir une image :</label>
                <input type="file" id="pdp" name="pdp">
                <p>Ajoutez votre Photo de Profil</p>


                <div class="avatar" id="avatar" >
            
                    <img id="preview" src="#" alt="Aperçu de l'image">
                </div>

                <button type="button" id="delete" style="display:none;">Supprimer l'image</button>
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
                <button type="submit" id="Envoyer" name="Envoyer">Envoyer</button>
            </div>
        </form>

        <form class="formulaire" action="" method="post">
            <div>
                <button type="submit" id="Supprimer" name="Supprimer">Supprimer mon compte</button>
            </div>


        </form>

    </div>
</main>
<?php require('../templates/footer/footer.php'); ?>
<script src="./index.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('../templates/layout.php') ?>