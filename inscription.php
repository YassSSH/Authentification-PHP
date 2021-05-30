
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet " href="https://bootswatch.com/4/lux/bootstrap.min.css ">
    <title>Inscription</title>
</head>
        <body>
        <div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'already':
                        ?>
                        <div class="alert alert-primary" role="alert">
                        Vous avez deja un compte
                        </div>

                        
                        <?php
                    }
                }
                ?>
                <div class="container ">
                     <div class="row mt-5 ">
                        <div class="col-md-6 m-auto ">
                            <div class="card card-body ">
                             <h1 class="text-center mb-3 ">
                             <i class="fas fa-user-plus "></i> Inscription</h1>
            <form action="inscription_traitement.php" method="post">     
                <div class="form-group">
                <label for="name">Pseudo</label>
                    <input type="text" name="pseudo" class="form-control" placeholder="Entrez votre Pseudo" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                <label for="name ">E-Mail</label>
                    <input for="name" name="email" class="form-control" placeholder="Entrez votre E-mail" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                <label for="name ">Numéro de Téléphone</label>
                    <input type="text" name="tel" class="form-control" placeholder="Entrez votre Numéro de Téléphone" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                <label for="name ">Adresse</label>
                    <input type="text" name="adresse" class="form-control" placeholder="Entrez votre Adresse" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                <label for="name ">Date de naissance</label>
                    <input type="text" name="naissance" class="form-control" placeholder="Entrez votre Date de naissance" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                <label for="name ">Mot de Passe</label>
                    <input type="password" name="password" class="form-control" placeholder="Entrez Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                <label for="name">Confirmez votre Mot de Passe</label>
                    <input type="password" name="password_retype" class="form-control" placeholder="Confirmez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                <button type="submit " class="btn btn-primary btn-block ">Inscription</button>
                </div>   
            </form>
            <p class="lead mt-4 ">Vous avez deja un compte ?<a href="index.php"> Connexion</a></p>
        </div>
        <style>
        </style>
        </body>
</html>