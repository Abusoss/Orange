<?php $title = "Exercices E-Enseignement"; ?>
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
                                    class="fa fa-user"></i> Bases 1</a>
                            <div class="smenu">
                                <a href="" class="exo active" data-exo="exo1" onclick="doSomeOtherthing(this); event.preventDefault();">Exo1</a>
                                <a href="" class="exo" data-exo="exo2" onclick="doSomeOtherthing(this); event.preventDefault();">Exo2</a>
                            </div>
                        </li>

                        <li class="item" id="item2">
                            <a href="" onclick="doSomething(this.parentNode); event.preventDefault();" class="btn"><i
                                    class="fa fa-envelope"></i> Bases 2</a>
                            <div class="smenu">
                                <a href="" class="exo" data-exo="exo3" onclick="doSomeOtherthing(this); event.preventDefault();">Exo1</a>
                                <a href="" class="exo" data-exo="exo4" onclick="doSomeOtherthing(this); event.preventDefault();">Exo2</a>
                                <a href="" class="exo" data-exo="exo5" onclick="doSomeOtherthing(this); event.preventDefault();">Exo3</a>
                            </div>
                        </li>

                        <li class="item" id="item3">
                            <a href="" onclick="doSomething(this.parentNode); event.preventDefault();" class="btn"><i
                                    class="fa fa-cog"></i> Bases 3</a>
                            <div class="smenu">
                                <a href="" class="exo" data-exo="exo6" onclick="doSomeOtherthing(this); event.preventDefault();">Exo1</a>
                                <a href="" class="exo" data-exo="exo7" onclick="doSomeOtherthing(this); event.preventDefault();">Exo2</a>
                            </div>
                        </li>

                        <li class="item" id="item4">
                            <a href="" onclick="doSomething(this.parentNode); event.preventDefault();" class="btn"><i
                                    class="fa fa-sign-out-alt"></i> Bases 4</a>
                            <div class="smenu">
                                <a href="" class="exo" data-exo="exo8" onclick="doSomeOtherthing(this); event.preventDefault();">Exo1</a>
                                <a href="" class="exo" data-exo="exo9" onclick="doSomeOtherthing(this); event.preventDefault();">Exo2</a>
                                <a href="" class="exo" data-exo="exo10" onclick="doSomeOtherthing(this); event.preventDefault();">Exo2</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="enoncer">
                </div>
            </div>
            <div class="topBar">
                <ul>
                    <li class="type active" data-type="algo">
                        <a href="" onclick="doSomethingElse(this.parentNode); event.preventDefault();">ALGO</a>
                    </li>
                    <li class="type" data-type="php">
                        <a href="" onclick="doSomethingElse(this.parentNode); event.preventDefault();">PHP</a>
                    </li>
                    <li class="type" data-type="c">
                        <a href="" onclick="doSomethingElse(this.parentNode); event.preventDefault();">C</a>
                    </li>
                </ul>
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