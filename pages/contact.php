<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require "../module/head.php"; ?>

    <title>Contact</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php require "../module/header.php"; ?>
    <section id="1">
        <form class="formulaire" id="form">
            <label for="Topic">Topic :</label>
            <input id="Topic" type="text" name="topic" required>

            <label for="email">E-mail :</label>
            <input id="email" type="email" name="email" required></input>
            <script src="../js/emailClick.js"></script>

            <fieldset>
                <legend>Identité</legend>
                <label for="nom">Nom</label>
                <input id="nom" type="text" name="nom" required></input>
                <label for="prenom">Prenom</label>
                <input id="prenom" type="text" name="prenom" required></input>
            </fieldset>

            <label id="contentLabel" for="content">Message :</label>
            <textarea id="content" name="content" required></textarea>

            <button id="sendContact" type=”submit” disabled="true">Envoyer</button>
            <script src="../js/handleClick.js">

            </script>
            <button type=”reset”>Effacer</button>
        </form>
    </section>
    <?php require "../module/footer.php"; ?>
</body>

</html>