<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" media="screen" href="stylesheet/css/login.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="stylesheet/css/footerB.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="stylesheet/css/enteteB.css" />
    <title>LOGIN</title>
   
    <div id="div_general_entete_B">
        <div id="div_1B"> <img src="vue/images/logoB.jpg" class="logoB" alt="logoB"> </div>
        <div id="div_2B"> <a href="index.php" class="lien_accueilB"><b> Accueil</b></a></div>
        <div id="div_3B"><a href="evenementielle+.php" class="lien_evenementielB"><b>Evenementiel+</b></a></div>
        <div id="div_4B"><a href="login.php" class="lien_adminB"> <b> O Admin</b></a></div>
    </div>
</head>


<body>
    <form action="models/traitement_loginB.php" method="POST" class="formB">
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
 
    
        </div>
    </form>
</body>
<footer>
    <div id="div_general_entete_Bfooter">
        <div id="div_1Bfooter"> <img src="vue/images/logoB.jpg" class="logoBfooter" alt="logoB"> </div>
        <div id="div_2Bfooter"> <b class="blanc"> Nous contacter :<br>(+226) 72 11 5 88<br>(+226) 72 11 50 88</b></div>
        <div id="div_3Bfooter"><b class="blanc">Nos services ++ <br>Dinee Gala <br> Soiree </b></div>
        <div id="div_4Bfooter"> <b class="blanc"> Reseaux sociaux <br>
            <a href="#" class="lien_Bfooter">Facebook </a><br>
            <a href="#" class="lien_Bfooter">Linkedin</b></a>
        </div>
    </div>
    <h1 class="copyrightB">@  Copyright 2020, SIMPLON EVENT.</h1>
    </footer>
</html>