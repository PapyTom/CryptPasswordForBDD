<html>

<head>
    <meta charset="UTF-8">
    <title>SérieVidéo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    if (isset($_POST['mdpACrypter'])) {
        $mdp = $_POST['mdpACrypter'];
        $mdpChiffre = password_hash($mdp, PASSWORD_DEFAULT);
    }

    ?>
    <div class="container">
        <header class="page-header">
            <h1>Mes séries vidéo</h1>

            <p class="well">Répertoire des séries vidéo vues ou à voir</p>
        </header>
        <section class="well">
            <legend>Cryptage de mot de passe</legend>

            <h3> Entrez le mot de passe a crypter </h3>
            <form method="POST" action="">
                <div class="input-group form-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                    <input type="text" name="mdpACrypter" class="form-control" placeholder="mdp a crypter" required>
                </div>
                <?php 
                if (isset($mdp)){ ?>
                    <h4> Le mot de passe " <?php echo $mdp; ?> "crypté devient : </h4>
                <?php }else { ?>
                    <h4> mot de passe crypté </h4>
                <?php } ?>
                <div class="input-group form-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
                    <input type="text" class="form-control" aria-label="No de la série" readonly value=<?php if (isset($mdpChiffre)) {
                                                                                                            echo $mdpChiffre;
                                                                                                        } ?>>
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-danger" value="Validez" />
                </div>
            </form>

        </section>

    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>