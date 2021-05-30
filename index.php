<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet " href="https://bootswatch.com/4/lux/bootstrap.min.css ">
    <title>Login</title>
</head>
        <body>
        <div class="container ">
        <div class="row mt-5 ">
            <div class="col-md-6 m-auto ">
                <div class="card card-body ">
                    <h1 class="text-center mb-3 "><i class="fas fa-sign-in-alt "></i> Connexion</h1>
            <form action="connexion.php" method="post">     
                <div class="form-group">
                <label for="name">E-Mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Entrez votre Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                <label for="name">Mot de Passe</label>
                    <input type="password" name="password" class="form-control" placeholder="Entrez votre Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
            <p class="lead mt-4 ">Pas de compte ? <a href="inscription.php">Inscrivez-vous</a></p>
        </div>
        </body>
</html>