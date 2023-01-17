<?php
require '../src/translate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Personnal and responsive curriculum vitae of Sébastien Cartoux">
    <meta name="keywords" content="curriculum vitae web developper native responsive HTML CSS Bulma PHP JavaScript">
    <meta name="author" content="Sebastien Cartoux">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebastien Cartoux</title>
    <link rel="stylesheet" href="../design/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../pictures/favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <nav id="navbar" class="navbar is-info has-text-centered" aria-label="main navigation">
        <div class="navbar-brand">
            <input id="portrait-navbar" class="js-modal-trigger" type="image" data-target="picture-modal" src="../pictures/portrait-navbar.png" alt="<?php echo _('picture of me'); ?>" />

            <div id="picture-modal" class="modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <p class="image">
                        <img src="../pictures/portrait-modal.png" alt="<?php echo _('picture of me'); ?>">
                    </p>
                </div>
                <button class="modal-close is-large" aria-label="close"></button>
            </div>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a href="../index.php" class="navbar-item">
                    <?php echo _('About'); ?>
                </a>

                <a href="skills.php" class="navbar-item">
                    <?php echo _('Skills'); ?>
                </a>

                <a href="experience.php" class="navbar-item">
                    <?php echo _('Experience'); ?>
                </a>

                <a href="portfolio.php" class="navbar-item">
                    <?php echo _('Portfolio'); ?>
                </a>

                <a href="training.php" class="navbar-item">
                    <?php echo _('Training'); ?>
                </a>

                <a href="contact.php" class="navbar-item">
                    <?php echo _('Contact'); ?>
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons is-centered">

                        <a id="flag-fr" href="../index.php?locale=fr_FR" class="button is-white is-rounded">
                            🇫🇷
                        </a>

                        <a id="flag-en" href="../index.php?locale=en_GB" class="button is-white is-rounded">
                            🇬🇧
                        </a>

                    </div>
                </div>

                <div class="navbar-item">
                    <div class="buttons is-centered">

                        <a href="../download/CV-dev-web-seb-cartoux.pdf" class="button is-danger is-rounded" target="_blank">
                            <strong>
                                <?php echo _('Download CV'); ?>
                            </strong>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<section class="section has-text-centered">
    <div class="card">
        <div class="card-content">
            <div class="box has-background-info">
                <h1 class="title has-text-white">
                    <?php echo _('Training'); ?>
                </h1>
            </div>

            <div class="columns">

                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="box has-background-info">
                                <h2 class="subtitle has-text-white">
                                    <?php echo _('Software architect, application developer | BAC +5'); ?>
                                </h2>
                            </div>

                            <img src="../pictures/training/epitech.png" alt="<?php echo ('learning icon') ?>">
                            <h3 class="subtitle">Epitech</h3>
                            <h4 class="subtitle">10/2022 - 08/2024</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">

                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="box has-background-info">
                                <h2 class="subtitle has-text-white">
                                    <?php echo _('Web and mobile project manager | BAC +3'); ?>
                                </h2>
                            </div>

                            <img src="../pictures/training/epitech.png" alt="<?php echo _('learning icon') ?>">
                            <h3 class="subtitle">Epitech</h3>
                            <h4 class="subtitle">09/2021 - 08/2022</h4>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <a href="https://freecodecamp.org/certification/lmpwybb/javascript-algorithms-and-data-structures" target="_blank">
                        <div class="card">
                            <div class="card-content">
                                <div class="box has-background-info">
                                    <h2 class="subtitle has-text-white">Javascript Algorithms And Data Structures</h2>
                                </div>

                                <img src="../pictures/training/certificate.png" alt="<?php echo _('certificate icon') ?>">
                                <h3 class="subtitle">FreeCodeCamp</h3>
                                <h4 class="subtitle">10/2020</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="column">
                    <a href="https://freecodecamp.org/certification/lmpwybb/responsive-web-design" target="_blank">
                        <div class="card">
                            <div class="card-content">
                                <div class="box has-background-info">
                                    <h2 class="subtitle has-text-white">Responsive Web Design</h2>
                                </div>

                                <img src="../pictures/training/certificate.png" alt="<?php echo _('certificate icon') ?>">
                                <h3 class="subtitle">FreeCodeCamp</h3>
                                <h4 class="subtitle">06/2020</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="columns">

                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="box has-background-info">
                                <h2 class="subtitle has-text-white">
                                    <?php echo _('Web And Mobile Developer | BAC +2'); ?>
                                </h2>
                            </div>

                            <img src="../pictures/training/utoplab.png" alt="<?php echo _('graduation icon') ?>">
                            <h3 class="subtitle">Utoplab / Simplon / <?php echo _('Great School Of Digital') ?></h3>
                            <h4 class="subtitle">07/2019 - 05/2020</h4>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="box has-background-info">
                                <h2 class="subtitle has-text-white">
                                    <?php echo _('Electrotechnics | Profesional BAC'); ?>
                                </h2>
                            </div>

                            <img src="../pictures/training/high_school.png" alt="<?php echo _('high school icon') ?>">
                            <h3 class="subtitle">
                                <?php echo _('Charles Privat High School'); ?>
                            </h3>
                            <h4 class="subtitle">2004 - 2006</h4>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="box has-background-info">
                                <h2 class="subtitle has-text-white">
                                    <?php echo _('Electrotechnics | CAP + BEP'); ?>
                                </h2>
                            </div>

                            <img src="../pictures/training/high_school.png" alt="<?php echo _('high school icon') ?>">
                            <h3 class="subtitle">
                                <?php echo _('Charles Privat High School'); ?>
                            </h3>
                            <h4 class="subtitle">2002 - 2004</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../script/navbar.js"></script>
<script src="../script/modal.js"></script>
</body>
</html>
