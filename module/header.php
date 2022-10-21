<?php
$indexFile = "./";

require("../include/debug.php");
//debug($_SERVER, true);
?>

<header>
    <nav class="menu">
        <ul>
            <li><a href=<?php echo $indexFile . "home.php" ?>>Accueil</a></li>
            <li><a href="">Présentation</a></li>
            <li><a href=<?php echo $indexFile . "contact.php"; ?>>Contact</a></li>
            <li class="deroulant">
                <a href="">Blog</a>
                <ul class="sous">
                    <li><a href="">Article 1</a></li>
                    <li><a href="">Article 2</a></li>
                    <li><a href="">Article 3</a></li>
                    <li><a href="">Article 4</a></li>
                </ul>
            </li>
            <li><a href=<?php echo $indexFile . "abonnement.php"; ?>>Abonnez-vous</a></li>
            <li><a href="">Statistiques</a></li>
        </ul>
    </nav>
    <label for="burger">
        <input type="checkbox" name="burger" id="burger">
        <img src="img/burger.png" class="burger" alt="burger">
        <img src="img/close.png" class="close" alt="close">
        <div class="menuBurger">
            <nav class="hamburger">
                <ul>
                    <li><a href=<?php echo $indexFile . "home.php" ?>>Accueil</a></li>
                    <li><a href="">Présentation</a></li>
                    <li><a href=<?php echo $indexFile . "contact.php"; ?>>Contact</a></li>

                    <li><a href="">Article 1</a></li>
                    <li><a href="">Article 2</a></li>
                    <li><a href="">Article 3</a></li>
                    <li><a href="">Article 4</a></li>

                    <li><a href=<?php echo $indexFile . "abonnement.php"; ?>>Abonnez-vous</a></li>
                    <li><a href="">Statistiques</a></li>
                </ul>
            </nav>
        </div>
    </label>
</header>