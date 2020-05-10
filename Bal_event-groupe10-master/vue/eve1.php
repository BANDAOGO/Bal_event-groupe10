<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BAL EVENT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../stylesheet/css/eve.css">
    <link rel="stylesheet" href="../stylesheet/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href= "../stylesheet/css/responsive.css">
    <script src="main.js"></script>
</head>

<body>
<?php include("entete_footer/entete.php"); ?>
  <div class="divg">
        <form >
          <br>
          <h2 class="h2">Creer un nouvel compte</h2>
          <br>
                <div class="form-group row">
                  
                  <div class="col-sm-10">
                      <label for="inputName" class="ecrit">Nom d'utilisateur</label>
                    <input type="name" class="form-control" id="inputName">
                  </div>
                </div>
                <div class="form-group row">
                 
                  <div class="col-sm-10">
                      <label for="inputPassword3"class="ecrit">Mot de passe</label>
                    <input type="password" class="form-control" id="inputPassword3">
                  </div>
                </div>

                <div class="form-group row">
                        
                        <div class="col-sm-10">
                            <label for="inputPassword3" class="ecrit">Confirmer son mot de passse</label>
                          <input type="password" class="form-control" id="inputPassword3">
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
                
            <?php include("entete_footer/footerB.php"); ?>
</body>
</html>