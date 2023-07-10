<?php

session_start();

$con = new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', '');

if(isset($_POST['envoyer'])) {
  if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['motdepasse'])) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mdp = $_POST['motdepasse'];

    $sql = "INSERT INTO utilisateurs (Id, prenom, nom, email, password) VALUES ('','$prenom', '$nom', '$email', '$mdp');";
    $con->query($sql);}
    header('Location: connexion.php'); // Redirection vers la page de connection une fois l'inscription réalisée.
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="script-in.js"></script>
  <title>Inscription</title>
  <link rel="stylesheet" type="text/css" href="..//css/Inscription.css">
  <body>
    <div class="center">
      <h1>Inscrits toi <br> maintenant !</h1>
      <form action="<?php echo($_SERVER['REQUEST_URI']); ?>" method="post" id="formId">
          <div class="inputbox">
              <input type="text" required="required" name="prenom" id="prn" value="" />
              <span>Prenom</span>
          </div>

          <div class="inputbox">
              <input type="text" required="required" name="nom" id="nm" value="" />
              <span>Nom</span>
          </div>

          <div class="inputbox">
              <input type="text" required="required" name="email" id="eml" value="" />
              <span>Email</span>
          </div>
          
          <div class="inputbox">
              <input type="text" required="required" name="motdepasse" id="mdp" value="" />
              <span>Mot de passe</span>
          </div>
          
          <div class="inputbox">
              <input type="submit" value="Rejoindre" id="btn" name= "envoyer">
          </div>
      </form>
    </div>
  </body>
</html>