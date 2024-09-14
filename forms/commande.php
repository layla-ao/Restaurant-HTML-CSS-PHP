<?php
// Récupérer les données du formulaire de réservation
$name = $_POST['nom'];
$nbpers = $_POST['nb'];
$tel = $_POST['phone'];
$prenom = $_POST['prenom'];

// Traiter les données de réservation (exemple simplifié)
// Ici, vous pouvez ajouter le code pour enregistrer la réservation dans une base de données, vérifier les disponibilités, etc.

// Afficher un message de confirmation
echo '<h2>Bienvenu '.$prenom.' '.$name.'</h2><br>';
echo '<h3>Votre commande à été passé avec succée !</h3>' ;


?>