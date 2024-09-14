<?php
// Récupérer les données du formulaire de réservation
$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$phone = $_POST['phone'];
$people =$_POST['people'];
// Traiter les données de réservation (exemple simplifié)
// Ici, vous pouvez ajouter le code pour enregistrer la réservation dans une base de données, vérifier les disponibilités, etc.

// Afficher un message de confirmation
echo '<h2>Bienvenu '.$name.'</h2><br>';
echo '<h3>Votre réservation pour Le '.$date. ' à '. $time .' et nombre de personne : '.$people. ' est réservée avec succée !</h3>' ;


?>