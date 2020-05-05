<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="stylesheet/login.css" />
    <title>LOGIN</title>
</head>


<body>
    <form action="models/traitement_admin.php" method="POST" class="formB">
        <div id="div-general-admin"><br>
        <div class="label-input-admin clas"> <img class="icons8_admin" src="vue/images/icons8_Add_User_Male_50px.png" alt="logoAdmin"> <br>
        <span class="labeladmin admine"><b>Admin </b> </span>
        </div>
        <div class="label-input-admin"><label class="labeladmin" for="username">Nom d'utilisateur</label> <br>
        <input type="text" class="inputadmin" name="nomAdmin" id="username" required><br></div>
        <div class="label-input-admin"><label class="labeladmin" for="password">Mot de passe</label><br>
        
        <input type="password" id="password" name="password" class="inputadmin" required><br></div><br>
        <div class="label-input-admin"><input class="labeladmin labelsubmitadmin" type="submit" value="S'enregistrer"><br><br>
        <a href="#" class="labeladmin alien">Mot de passe oublié ?</a></div>
        <div class="label-input-admin"><br>
        <a href="#" class="labeladmin alien">Créer un compte ?</a></div>
    
        </div>
    </form>
</body>

</html>