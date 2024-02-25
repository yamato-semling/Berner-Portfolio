<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php get(URL_ROOT);?>root.css" />
    <link rel="stylesheet" href="<?php get(URL_ROOT);?>header.css" />
    <link rel="stylesheet" href="<?php get(URL_ROOT);?>footer.css" />
    <?php load_css(); ?>

</head>
<body>
<div id="loading">
    <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div id="root">
<header>
    <nav>
        <div class="navbar">
            <div class="container nav-container">
                <input class="checkbox" type="checkbox" name="" id="check" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <ul class="menu-items">
                    <li>
                        <a href="#hero" class="menu-links">Home</a>
                    </li>
                    <li>
                        <a href="#about" class="menu-links">Meine Werte</a>
                    </li>
                    <li>
                        <a href="#politics" class="menu-links"
                        >Politische Schwerpunkte</a
                        >
                    </li>
                    <li>
                        <a href="#news" class="menu-links">Aktuell</a>
                    </li>
                    <li>
                        <a href="#me" class="menu-links">Über mich</a>
                    </li>
                    <li>
                        <a href="#posters" class="menu-links">Plakate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>