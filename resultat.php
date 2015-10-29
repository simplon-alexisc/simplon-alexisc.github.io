<?php
echo "Titre de civilité : ".$_POST['titre']."<br />";



echo "Nom : ".$_POST['nom']."<br />";



echo "Prénom : ".$_POST['prenom']."<br />";



echo "Adresse : ".$_POST['adresse']."<br />";



echo "Ville : ".$_POST['ville']."<br />";



echo "Code postal : ".$_POST['cp']."<br />";



echo "Site : ".$_POST['site']."<br />";



echo "Mail : ".$_POST['mail']."<br />";



echo "Téléphone : ".$_POST['tel']."<br />";



echo "Intitulé : ".$_POST['sujet']."<br />";



echo "Message : ".$_POST['msg'];

?>

<?php

$fp = fopen('Donnees/Données.txt', 'a+');

fputs($fp, 'Nom : ');
fputs($fp, $_POST['nom']."\r\n");
 
fputs($fp, 'Prenom : ');
fputs($fp, $_POST['prenom']."\r\n");

fputs($fp, 'Adresse : ');
fputs($fp, $_POST['adresse']."\r\n");

fputs($fp, 'Ville : ');
fputs($fp, $_POST['ville']."\r\n");

fputs($fp, 'Code postal : ');
fputs($fp, $_POST['cp']."\r\n");

fputs($fp, 'Site web : ');
fputs($fp, $_POST['site']."\r\n");

fputs($fp, 'Mail : ');
fputs($fp, $_POST['mail']."\r\n");

fputs($fp, 'Téléphone : ');
fputs($fp, $_POST['tel']."\r\n");

fputs($fp, 'Intitulé : ');
fputs($fp, $_POST['sujet']."\r\n");

fputs($fp, 'Message : ');
fputs($fp, $_POST['msg']."\r\n");

fputs($fp, '---------------'."\r\n");

fclose($fp);
    
    ?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=Test;charset=utf8', 'root', '01avril1996');
?>

