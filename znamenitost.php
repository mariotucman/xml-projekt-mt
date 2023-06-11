<?php

    $xml = simplexml_load_file('znamenitosti.xml');
    $kategorija = $_GET["kategorija"];
    $naziv = $_GET["naziv"];

?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>
        <?php
            if($kategorija == "dvorci") {
                foreach ($xml->dvorci->dvorac as $dvorac) {
                    $naziv_xml = (string)$dvorac->naziv;
                    if ($naziv_xml == $naziv) {
                        echo 'Dvorac ' . $naziv_xml;
                        break;
                    }
                }
            }
            if($kategorija == "utvrde") {
                foreach ($xml->utvrde->utvrda as $utvrda) {
                    $naziv_xml = (string)$utvrda->naziv;
                    if ($naziv_xml == $naziv) {
                        echo $naziv_xml;
                        break;
                    }
                }
            }
            if($kategorija == "prirodne_znamenitosti") {
                foreach ($xml->prirodne_znamenitosti->prirodna_znamenitost as $prirodna_znamenitost) {
                    $naziv_xml = (string)$prirodna_znamenitost->naziv;
                    if ($naziv_xml == $naziv) {
                        echo $naziv_xml;
                        break;
                    }
                }
            }
        ?>
    </title>
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
        <?php
            if($kategorija == "dvorci") {
                foreach ($xml->dvorci->dvorac as $dvorac) {
                    $naziv_xml = (string)$dvorac->naziv;
                    $opis_xml = (string)$dvorac->opis;
                    if ($naziv_xml == $naziv) {
                        echo '<section class="znamenitost">';
                            echo '<section class="znamenitost_slika">';
                                echo '<img src="slike/' . $naziv_xml . '.png">';
                            echo '</section>';
                            echo '<section class="znamenitost_naslov">';
                                echo '<h2 class="clanak-naslov">Dvorac '. $naziv_xml . '</h2>';
                            echo '</section>';
                            echo '<section class="znamenitost_opis">';
                                echo '<p class="p-tekst">' . $opis_xml . '</p>';
                            echo '</section>';
                        echo '</section>';
                        break;
                    }
                }
            }
            if($kategorija == "utvrde") {
                foreach ($xml->utvrde->utvrda as $utvrda) {
                    $naziv_xml = (string)$utvrda->naziv;
                    $opis_xml = (string)$utvrda->opis;
                    if ($naziv_xml == $naziv) {
                        echo '<section class="znamenitost">';
                            echo '<section class="znamenitost_slika">';
                                echo '<img src="slike/' . $naziv_xml . '.png">';
                            echo '</section>';
                            echo '<section class="znamenitost_naslov">';
                                echo '<h2 class="clanak-naslov">'. $naziv_xml . '</h2>';
                            echo '</section>';
                            echo '<section class="znamenitost_opis">';
                                echo '<p class="p-tekst">' . $opis_xml . '</p>';
                            echo '</section>';
                        echo '</section>';
                        break;
                    }
                }
            }
            if($kategorija == "prirodne_znamenitosti") {
                foreach ($xml->prirodne_znamenitosti->prirodna_znamenitost as $prirodna_znamenitost) {
                    $naziv_xml = (string)$prirodna_znamenitost->naziv;
                    $opis_xml = (string)$prirodna_znamenitost->opis;
                    if ($naziv_xml == $naziv) {
                        echo '<section class="znamenitost">';
                            echo '<section class="znamenitost_slika">';
                                echo '<img src="slike/' . $naziv_xml . '.png">';
                            echo '</section>';
                            echo '<section class="znamenitost_naslov">';
                                echo '<h2 class="clanak-naslov">'. $naziv_xml . '</h2>';
                            echo '</section>';
                            echo '<section class="znamenitost_opis">';
                                echo '<p class="p-tekst">' . $opis_xml . '</p>';
                            echo '</section>';
                        echo '</section>';
                        break;
                    }
                }
            }
        ?>
        </div>
    </main>

    <footer>
        <div class="container footer">
            <p class="credits">© 2023 Mario Tucman (mtucman@tvz.hr)</p>
        </div>
    </footer>
</body>
</html>