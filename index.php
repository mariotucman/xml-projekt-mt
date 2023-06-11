<?php

    $xml = simplexml_load_file('znamenitosti.xml');

?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Početna</title>
</head>
<body>
    <header>
        <div class="container header">
            <nav class="navbar">
                <a href="index.php">Početna</a>
                <a href="kategorija.php?kategorija=dvorci">Dvorci</a>
                <a href="kategorija.php?kategorija=utvrde">Utvrde</a>
                <a href="kategorija.php?kategorija=prirodne_znamenitosti">Prirodne znamenitosti</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="container main">
            <h1 class="naslov">ISTRAŽI ZNAMENITOSTI</h1>
            <section class="kategorija">
                <aside class="naziv_kategorije">
                    <h1>Dvorci</h1>
                </aside>
                <?php
                    foreach ($xml->dvorci->dvorac as $dvorac) {
                        $id_xml = (string)$dvorac['id'];
                        $naziv = (string)$dvorac->naziv;
                        $lokacija = (string)$dvorac->lokacija;
                        echo '<article class="znamenitost_kategorije">';
                            echo '<a href="znamenitost.php?kategorija=dvorci&naziv=' . $naziv . '">';
                            echo '<img src="slike/' . $naziv . '.png">';
                            echo '<h2>Dvorac ' . $naziv . '</h2>';
                            echo '<h3><span class="material-icons">place</span>' . $lokacija . '</h3>';
                            echo '</a>';
                        echo '</article>';
                    }
                ?>
            </section>

            <section class="kategorija">
                <aside class="naziv_kategorije">
                    <h1>Utvrde</h1>
                </aside>
                <?php
                    foreach ($xml->utvrde->utvrda as $utvrda) {
                        $naziv_xml = (string)$utvrda->naziv;
                        $lokacija_xml = (string)$utvrda->lokacija;
                        echo '<article class="znamenitost_kategorije">';
                            echo '<a href="znamenitost.php?kategorija=utvrde&naziv=' . $naziv_xml . '">';
                            echo '<img src="slike/' . $naziv_xml . '.png">';
                            echo '<h2>' . $naziv_xml . '</h2>';
                            echo '<h3><span class="material-icons">place</span>' . $lokacija_xml . '</h3>';
                            echo '</a>';
                        echo '</article>';
                    }
                ?>
            </section>

            <section class="kategorija">
                <aside class="naziv_kategorije">
                    <h1>Prirodne znamenitosti</h1>
                </aside>
                <?php
                    foreach ($xml->prirodne_znamenitosti->prirodna_znamenitost as $prirodna_znamenitost) {
                        $naziv_xml = (string)$prirodna_znamenitost->naziv;
                        echo '<article class="znamenitost_kategorije">';
                            echo '<a href="znamenitost.php?kategorija=prirodne_znamenitosti&naziv=' . $naziv_xml . '">';
                            echo '<img src="slike/' . $naziv_xml . '.png">';
                            echo '<h2>' . $naziv_xml . '</h2>';
                            echo '</a>';
                        echo '</article>';
                    }
                ?>
            </section>
        </div>
    </main>

    <footer>
        <div class="container footer">
            <p class="credits">© 2023 Mario Tucman (mtucman@tvz.hr)</p>
        </div>
    </footer>
</body>
</html>