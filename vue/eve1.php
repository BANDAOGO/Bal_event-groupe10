<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nouveau compte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../stylesheet/css/eve.css">
    <link rel="stylesheet" href="../stylesheet/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheet/bootstrap.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href= "../stylesheet/css/responsive.css">
    <script src="main.js"></script>
</head>

<body>
<link rel="stylesheet" type="text/css" media="screen" href="../stylesheet/css/Admin.css">
    <div id="div_general_entete_B">
        <div id="div_1B"> <img src="images/logoB.jpg" class="logoB" alt="logoB"> </div>
        <div id="div_2B"> <a href="../index.php" class="lien_accueilB"><b> Accueil</b></a></div>
        <div id="div_3B"><a href="evenementielle+.php" class="lien_evenementielB"><b>Evenementiel+</b></a></div>
        <div id="div_3B"><a href="eve2.php" class="lien_evenementielB"><b>liste des evenements</b></a></div>
        <div id="div_4B"><a href="eve1.php" class="lien_adminB"> <b> Nouveau compte</b></a></div>

    </div>
  <div class="divg">
        <form action="../models/eve1_traitementB.php" method="POST">
          <br>
          <h2 class="h2">Creer un nouvel compte</h2>
          <br>
                <div class="form-group row">
                  
                  <div class="col-sm-10">
                      <label for="inputName" class="ecrit">Nom d'utilisateur</label>
                    <input type="name" class="form-control" name="nomAdmin" id="inputName" require>
                  </div>
                </div>
                <div class="form-group row">
                 
                  <div class="col-sm-10">
                      <label for="inputPassword3"class="ecrit">Mot de passe</label>
                    <input type="password" name="password" class="form-control" id="inputPassword3" require>
                  </div>
                </div>

                <div class="form-group row">
                        
                        <div class="col-sm-10">
                            <label for="inputPassword3" class="ecrit">Confirmer son mot de passse</label>
                          <input type="password" name="repeat_password" class="form-control" id="inputPassword3" require>
                        </div>
                </div>
            
                      <div  id="but">
                        <div class="form-group row">         
                            <div class="col-sm-10">
                               <button type="submit" class="btn btn-primary">Se connecter</button>
                             </div>
                           </div>
                     </div>
              </form>
            </div>
                
            <?php include("footerB.php"); ?>
</body>
</html>