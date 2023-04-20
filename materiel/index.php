<?php $title = "Accueil Orange Tech"; ?>
<?php ob_start(); ?>
<?php require('./templates/header/header.php'); ?>

<main>

<div>
    <form action="index.php?action=login" method="post">
                    <div>
                        <input type="headen" class="peer" name="id_materiel" id="id_materiel" placeholder=" " required />
                        <label for="id_materiel" class="peer-placeholder-shown:scale-100 peer-focus:-translate-y-6">id_materiel</label>
                    </div>
                    <div>
                        <input type="text" class="peer" name="nom" placeholder=" " id="nom" required />
                        <label for="nom" class="peer-placeholder-shown:scale-100 peer-focus:-translate-y-6">Nom</label>
                    </div>
                    <div>
                        <select id="categorie" >
                            <option value="box" name="box"></option>         
                            <option value="fibre" name="fibre"></option>      
                            <option value="sim" name="sim"></option>      
                            <option value="ligne telephonique" name="ligne telephonique"></option>                 
                            <option value="usb 4gk" name="usb 4g"></option>  
                        </select>
                    </div>
                   
    </form>

</div>

</main>

