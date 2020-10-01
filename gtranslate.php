<?php 
// ////////////////////////////////////////////////////////////////////////// //
//                                                                            //
// Google Translator Script                                                   //
// Zum Übersetzen der aktuellen Webseite mit Google Translator ohne Plugin    //
//                                                                            //
// (c) Gerhard Kerner                                                         //
// technikblog.gerhard-kerner.at                                              //
// Version 1.0, Juni 2016                                                     //
//                                                                            //
// Script-Aufruf mit Parameter: ../gtranslate.php?lang=en                     //
// ------------------------------------------------------                     //
//                                                                            //
// This script is free software; you can redistribute it and/or modify        //
// it under the terms of the GNU General Public License as published by       //
// the Free Software Foundation, either version 3 of the License, or          //
// (at your option) any later version.                                        //
//                                                                            //
// This script is distributed in the hope that it will be useful,             //
// but WITHOUT ANY WARRANTY; without even the implied warranty of             //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the              //
// GNU General Public License for more details.                               //
//                                                                            //
// You should have received a copy of the GNU General Public License          //
// along with this script. If not, see <http://www.gnu.org/licenses/>.        //
//                                                                            //
// Dieses Script ist Freie Software: Sie können es unter den Bedingungen      //
// der GNU General Public License, wie von der Free Software Foundation,      //
// Version 3 der Lizenz oder (nach Ihrer Option) jeder späteren               //
// veröffentlichten Version, weiterverbreiten und/oder modifizieren.          //
//                                                                            //
// Dieses Script wird in der Hoffnung, dass es nützlich sein wird, aber       //
// OHNE JEDE GEWÄHRLEISTUNG, bereitgestellt; sogar ohne die implizite         //
// Gewährleistung der MARKTFÄHIGKEIT oder EIGNUNG FÜR EINEN BESTIMMTEN ZWECK. //
// Siehe die GNU General Public License für weitere Details.                  //
//                                                                            //
// Sie sollten eine Kopie der GNU General Public License zusammen mit diesem  //
// Script erhalten haben. Wenn nicht, siehe <http://www.gnu.org/licenses/>.   //
//                                                                            //
// ////////////////////////////////////////////////////////////////////////// //

error_reporting(0);

// Konfiguration (optional): Diese Webseite im Translator angezeigen,
// falls "Referer senden" im Browser des Besuchers deaktiviert ist.
// Beispiel: $noreferer = "http://www.meineseite.de";
$noreferer = "";
// ----

$referer = $_SERVER['HTTP_REFERER'];
$lang = $_GET['lang'];
  if (empty($referer)) {
    $referer = $noreferer;
  }
header("Location:https://translate.google.de/translate?sl=de&tl=$lang&js=y&prev=_t&hl=$lang&ie=UTF-8&u=$referer"); 
exit; 
?>
