<?php $title = "Qui nous somme? E-Enseignement"; ?>
<?php ob_start(); ?>
<?php require(__DIR__ . '/../templates/header/header.php'); ?>

<main>
    <div class="container">
        <div class="content">
            <ul>
                <li>
                    <img src="/e-enseignement/src/images/ervino.jpg" />
                    <div class="presentation">
                        <p>Dabylall Ervino</p>
                        <p>Le bon</p>
                        <a href="/e-enseignement/src/pdf/Curriculum_Vitae.pdf" class="buttonPrimary" target="_blank" type="application/pdf" rel="alternate" media="print">En savoir plus ?</a>
                    </div>
                </li>
                <li>
                    <img src="/e-enseignement/src/images/rayan.jpg" />
                    <div class="presentation">
                        <p>Missoum Rayan</p>
                        <p>Le brute</p>
                        <a href="/e-enseignement/src/pdf/CV_Missoum_Rayan.pdf" class="buttonPrimary" target="_blank" type="application/pdf" rel="alternate" media="print">En savoir plus ?</a>
                    </div>
                </li>
                <li>
                    <img src="/e-enseignement/src/images/anare.png" />
                    <div class="presentation">
                        <p>Matondo Anare</p>
                        <p>Le truand</p>
                        <a href="/e-enseignement/src/pdf/CV_Anare_Matondo_dev.pdf" class="buttonPrimary" target="_blank" type="application/pdf" rel="alternate" media="print">En savoir plus ?</a>
                    </div>
                </li>
                <li>
                    <img src="/e-enseignement/src/images/loulou.jpg" />
                    <div class="presentation">
                        <p>Loulou Mohamed Nadjib</p>
                        <p>Le BG</p>
                        <a href="http://www.i-code.xyz" class="buttonPrimary" target="_blank">En savoir plus ?</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</main>
<!-- <script src="./index.js" strategy="lazyOnload"></script> -->
<?php require(__DIR__ . '/../templates/footer/footer.php'); ?>
<?php $content = ob_get_clean(); ?>
<?php require('../templates/layout.php') ?>