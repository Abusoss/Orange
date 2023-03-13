<?php $title = "Cours E-Enseignement"; ?>
<?php ob_start(); ?>
<?php require(__DIR__ . '/../templates/header/header.php'); ?>

<main>
    <div class="container">
        <div class="content">
            <div class="onTheSide">
                <div class="menu sideBar">
                    <ul>
                        <li class="item active" id="item1">
                            <a href="" onclick="doSomething(this.parentNode); event.preventDefault();" class="btn"><i
                                    class="fa fa-user"></i>Algo/PHP/C</a>
                            <div class="smenu">
                                <a href="" class="cours active" date-type="algo" data-cours="cours1" onclick="doSomeOtherthing(this); event.preventDefault();">Cours 1</a>
                                <a href="" class="cours" date-type="algo" data-cours="cours2" onclick="doSomeOtherthing(this); event.preventDefault();">Cours 2</a>
                                <a href="" class="cours" date-type="algo" data-cours="cours3" onclick="doSomeOtherthing(this); event.preventDefault();">Cours 3</a>
                                <a href="" class="cours" date-type="algo" data-cours="cours4" onclick="doSomeOtherthing(this); event.preventDefault();">Cours 4</a>
                            </div>
                        </li>

                        <li class="item" id="item2">
                            <a href="" onclick="doSomething(this.parentNode); event.preventDefault();" class="btn"><i
                                    class="fa fa-envelope"></i>Modelisation SQL</a>
                            <div class="smenu">
                                <a href="" class="cours" date-type="model" data-cours="cours1" onclick="doSomeOtherthing(this); event.preventDefault();">Cours 1</a>
                                <a href="" class="cours" date-type="model" data-cours="cours2" onclick="doSomeOtherthing(this); event.preventDefault();">Cours 2</a>
                                <a href="" class="cours" date-type="model" data-cours="cours3" onclick="doSomeOtherthing(this); event.preventDefault();">Cours 3</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="playground">
            </div>
        </div>
    </div>
</main>
<script src="./index.js" strategy="lazyOnload"></script>
<?php require(__DIR__ . '/../templates/footer/footer.php'); ?>
<?php $content = ob_get_clean(); ?>
<?php require('../templates/layout.php') ?>