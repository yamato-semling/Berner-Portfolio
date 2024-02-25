<?php
require 'config.php';

?>
<head>
    <meta
            name="description"
            content="Auf dieser Webseite erfahren Sie mehr über David Berner, der Gymnasiast aus Kirchberg, welcher die Junge Mitte in Emmental-Oberaargau als Präsident vertritt."
    />
    <title>David Berner: Portfolio</title>
    <script src="js/main.js" defer></script>
</head>

<?php include 'header.php';?>

<section id="hero">
    <div class="right-circle"></div>
    <img
        id="hero-img"
        src="<?php get(DIR_PORTRAIT) ?>Berner_David-b.png"
        alt="David Berner Portrait"
    />
    <div id="hero-content">
        <div id="hero-right">
            <div id="logos">
                <a href="https://die-mitte.ch/" target="_blank">
                    <img
                        class="logo1"
                        src="<?php get(DIR_LOGOS) ?>die_mitte.png"
                        alt="die Mitte"
                    />
                </a>
                <a href="https://diejungemitte.ch/" target="_blank">
                    <img
                        class="logo2"
                        src="<?php get(DIR_LOGOS) ?>Die Junge Mitte_Bern-crop.png"
                        alt="die Junge Mitte Bern"
                    />
                </a>
            </div>
        </div>
        <div class="hero-text">
            <h1>David Berner</h1>
            <h2>Jung</h2>
            <h2>Ambitioniert</h2>
            <h2>Bodenständig</h2>
        </div>
    </div>
</section>

<section id="about">
    <div id="about-content">
        <div class="left-circle icon-circle">
            <img
                src="<?php get(DIR_ICON) ?>schweiz.avif"
                alt="Schweizer Nationalflagge"
                loading="lazy"
            />
        </div>
    </div>
    <div class="content" id="values">
        <h1 class="title">Meine Werte</h1>
        <h2 class="subtitle">Tradition & Fortschritt</h2>
        <h2 class="subtitle">Familie & Zusammenhalt</h2>
        <h2 class="subtitle">Freiheit & Verantwortung</h2>
    </div>
</section>

<section id="politics">
    <div class="politic-content">
        <h1 class="title">Politische Schwerpunkte</h1>
    </div>
    <div class="politic-content-box">
        <div class="politic-box">
            <h1>Liebe Helvetia, wie geht es dir?</h1>
            <h2>Ein Plädoyer für unsere Heimat.</h2>
            <p>
                Am Sonntag wählt die Schweiz wieder. Seit über 150 Jahren gibt es
                bei uns Wahlen, in einer Form oder der anderen. Eine
                ununterbrochene Zeitspanne funktionierender Demokratie, von der
                andere Länder träumen können.
                <br />
                <br />
                Doch wie steht es heute um unsere demokratischen Werte, wie steht
                es denn eigentlich um den Zusammenhalt der Alpenrepublik?
                <br />
                <br />
                Sicheres scheint unsicher geworden zu sein. Noch vor geraumer Zeit
                hat sich unsere...
                <a href="points">weiterlesen</a>
            </p>
        </div>
        <div class="politic-box">
            <h1></h1>
            <p></p>
        </div>
        <div class="politic-box">
            <h1></h1>
            <p></p>
        </div>
    </div>
</section>

<section id="news">
    <div class="content3">
        <h1 class="title">Aktuell</h1>
    </div>
    <div class="blogs">
        <div class="blog-box">
            <h1>Prämien senken</h1>
            <h3>26. 09. 2023</h3>
            <div class="div-testimonials">
                <a
                    target="_blank"
                    href="https://kostenbremse-jetzt.ch/"
                    class="more"
                ><img
                        class="testimonials"
                        src="<?php get(DIR_TESTEMONIAL) ?>prämien1.jpg"
                        alt="testemonial"
                    /></a>
            </div>
        </div>

        <div class="blog-box">
            <h1>Nationalratswahlen 2023</h1>
            <h3>19. 09. 2023</h3>
            <p>
                Ich freue mich Sie informieren zu dürfen, dass ich mich für die
                Nationalratswahlen 2023 im Wahlkreis Bern kandidiere.
            </p>
            <a href="page/construction/" class="more">mehr...</a>
        </div>

        <div class="blog-box">
            <h1>Bertholdia Reise</h1>
            <h3>19. 09. 2023</h3>
            <p>Reise mit der Bertholdia.</p>
            <a href="page/construction/" class="more">mehr...</a>
        </div>
    </div>
</section>

<section id="me">
    <div class="content2">
        <h1 class="title">Ich bin...</h1>
    </div>
    <div class="contents">
        <div class="content-box">
            <div class="box">
                <h1>Vorstand Mitte Kirchberg</h1>
                <h3>2022 - Heute</h3>
                <p>Ich bin seit 2022 Vorstandsmitglied der Mitte Kirchberg.</p>
                <a target="_blank" href="https://kirchberg.die-mitte.ch/"
                ><img
                        class="box-border"
                        src="<?php get(DIR_LOGOX) ?>Die_Mitte_Kirchberg-BE.png"
                        alt="Vorstand Mitte Kirchberg"
                    /></a>
            </div>
            <div class="box">
                <h1>Präsident der Jungen Mitte Emmental-Oberaargau</h1>
                <h3>2022 - Heute</h3>
                <p>
                    Seit 2022 habe ich die Ehre als Präsident der Junge Mitte
                    Emmental-Oberaargau zu agieren.
                </p>
                <a target="_blank" href="https://diejungemitte.ch/"
                ><img
                        class="box-border"
                        src="<?php get(DIR_LOGOS) ?>Die Junge Mitte_Bern-crop.png"
                        alt="Präsident Junge Mitte Emmental-Oberaargau"
                    /></a>
            </div>
            <div class="box">
                <h1>Gymnasiast</h1>
                <h3>2019 - Heute</h3>
                <p>
                    Seit 2019 besuche ich den Gymnasium Burgdorf und habe das
                    Schwerpunktfach Wirschaft und Recht.
                </p>
                <a target="_blank" href="https://www.gymburgdorf.ch/"
                ><img
                        src="<?php get(DIR_LOGOX) ?>gymburgdorf.png"
                        alt="Gymnasium Burgdorf"
                    /></a>
            </div>
            <div class="box">
                <h1>Bertholdia</h1>
                <h3>2021 - Heute</h3>
                <p>
                    Aktives Mitglied der Mittelschulverbindung des Gymnasium
                    Burgdorf, der Bertholdia.
                </p>
                <a
                    target="_blank"
                    href="https://www.bertholdia.ch/aktuelles/index.html"
                ><img
                        class="box-border"
                        src="<?php get(DIR_LOGOX) ?>bertholdia.png"
                        alt="Bertholdia"
                    /></a>
            </div>
            <div class="box">
                <h1>Jungschütze Schützenclub Kirchberg</h1>
                <h3>2023 - Heute</h3>
                <p>Jungschütze beim Schützenclub Kirchberg.</p>
            </div>
            <div class="box">
                <h1>Vorstand Jugendforum Ämmitau</h1>
                <h3>2021 - Heute</h3>
                <p>
                    Ich setze mich für die Förderung und die Bildung der
                    Jugendlichen im Emmental ein.
                </p>
                <a target="_blank" href="https://www.jugendforum-aemmitau.ch/"
                ><img
                        class="box-border"
                        src="<?php get(DIR_LOGOX) ?>Jugendforum.webp"
                        alt="Vorstand Mitte Kirchberg"
                    /></a>
            </div>
            <div class="box">
                <h1>ProFamilia Mitglied</h1>
                <h3>2021 - Heute</h3>
                <p>Mitglied bei ProFamilia.</p>
                <a target="_blank" href="https://www.profamilia.ch/"
                ><img
                        class="box-border"
                        src="<?php get(DIR_LOGOX) ?>profamilia.svg"
                        alt="Vorstand Mitte Kirchberg"
                    /></a>
            </div>
        </div>
    </div>
</section>

<section id="posters">
    <div class="content3"><h1 class="title">Plakate</h1></div>
    <div class="posters-content">
        <div class="poster">
            <div class="poster-img">
                <img
                    src="<?php get(DIR_POSTER); ?>poster4-1.png"
                    alt="David Berner Poster Familie"
                    loading="lazy"
                />
            </div>
            <a href="/assets/img/poster/poster4-1.png" download="David_Berner-Familie"
            >Download</a
            >
        </div>
        <div class="poster">
            <div class="poster-img">
                <img
                    src="<?php get(DIR_POSTER); ?>poster5-1.png"
                    alt="David Berner Poster Prämien"
                    loading="lazy"
                />
            </div>
            <a href="/assets/img/poster/poster5-1.png" download="David_Berner-Prämien"
            >Download</a
            >
        </div>
        <div class="poster">
            <div class="poster-img">
                <img
                    src="<?php get(DIR_POSTER); ?>poster1-1.png"
                    alt="David Berner Poster Prämien"
                    loading="lazy"
                />
            </div>
            <a href="/assets/img/poster/poster1-1.png" download="David_Berner-Prämien"
            >Download</a
            >
        </div>
        <div class="poster">
            <div class="poster-img">
                <img
                    src="<?php get(DIR_POSTER); ?>poster2-1.png"
                    alt="David Berner Poster Prämien"
                    loading="lazy"
                />
            </div>
            <a href="/assets/img/poster/poster2-1.png" download="David_Berner-Prämien"
            >Download</a
            >
        </div>
        <div class="poster">
            <div class="poster-img">
                <img
                    src="<?php get(DIR_POSTER); ?>poster3-1.png"
                    alt="David Berner Poster Prämien"
                    loading="lazy"
                />
            </div>
            <a href="/assets/img/poster/poster3-1.png" download="David_Berner-Prämien"
            >Download</a
            >
        </div>
    </div>
</section>
<?php include 'footer.php';?>
