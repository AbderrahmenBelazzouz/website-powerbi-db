<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>Dashboard :</p>
    <center>   <form>  
        <div class="container">   
            <iframe title="Rapport Clusters 1" width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=0e708ac2-7e00-4e82-8a7b-0ab60acf6221&autoAuth=true&ctid=0647a9f0-dc60-45e7-8827-3f87df22e512" frameborder="0" allowFullScreen="true"></iframe>

        </div>   
    </form>   </center>   
    <!-- <input type="submit" value="Déconnexion " name="submit" class="box-button"> -->
    <button type="button"><a href="logout.php">Déconnexion</a></button>
    <!-- <a href="logout.php">Déconnexion</a> -->
    </div>
  </body>
</html>