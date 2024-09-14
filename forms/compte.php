<?php
// Récupérer les données du formulaire d'inscription
$name = $_POST['nom'];
$email = $_POST['email'];
$password = $_POST['pwd'];
$prenom = $_POST['prenom'];
$phone = $_POST['phone'];
$adress = $_POST['adresse'];

// Vérifier les informations de connexion (exemple simplifié)
if ($email === 'exemple@gmail.com') {
  echo '<h3>Echec d/inscription !<h3>';
} else {
  echo '<h3>Inscription réussie ! Bienvenu chez nous </h3>';
}
?>
