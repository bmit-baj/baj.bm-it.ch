<?php
//send_email.php
$sendermail_antwort = true;      //E-Mail Adresse des Besuchers als Absender. false= Nein ; true = Ja
$name_von_emailfeld = "Email";   //Feld in der die Absenderadresse steht

$empfaenger = "justin.bauer@espas.ch"; //Empfänger-Adresse
$betreff = "Neue Kontaktanfrage"; //Betreff der Email 
$url_ok = "https://baj.bm-it.ch"; //Zielseite, wenn E-Mail erfolgreich versendet wurde
$url_fehler = "https://baj.bm-it.ch"; //Zielseite, wenn E-Mail nicht gesendet werden konnte
 
 
//Diese Felder werden nicht in der Mail stehen
$ignore_fields = array('submit');

 
//Hier werden alle Eingabefelder abgefragt
foreach($_POST as $name => $value) {
   if (in_array($name, $ignore_fields)) {
        continue; //Ignore Felder wird nicht in die Mail eingefügt
   }
   $msg .= "::: $name :::\n$value\n\n";
}
 
//E-Mail Adresse des Besuchers als Absender
if ($sendermail_antwort and isset($_POST[$name_von_emailfeld]) and filter_var($_POST[$name_von_emailfeld], FILTER_VALIDATE_EMAIL)) {
   $email_from = $_POST[$name_von_emailfeld];
}
 
$header="From: $email_from";
 
//Email als UTF-8 senden
$header .= "\nContent-type: text/plain; charset=utf-8";
 
$mail_senden = mail($empfaenger,$betreff,$msg,$header);
 
 
//Weiterleitung, hier konnte jetzt per echo auch Ausgaben stehen
if($mail_senden){
  echo '<script type="text/javascript" language="Javascript"> alert("Vielen Dank! Ihre Daten wurden uns zugesandt.") </script> ';
  header("Location: ".$url_ok); //Mail wurde gesendet
  exit();
  
} else{
  echo '<script type="text/javascript" language="Javascript"> alert("Nein") </script> ';
  header("Location: ".$url_fehler); //Fehler beim Senden
  exit();
  
}
?>
