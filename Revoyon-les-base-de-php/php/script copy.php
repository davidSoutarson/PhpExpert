<?php

echo "<p>MDR_____________________putin de chimin___!!______________________________</p>";

echo 'Helo worde Scripte 2 <br>';

/* mes variable*/
$myAge = 38;
$fullname = "David Soutarson";
$myEmail = 'monSuperMail@exemple.com';

/* Attention, petit piège : 
si vous voulez insérer un guillemet simple alors que le texte est entouré de guillemets simples,
il faut l'échapper en insérant un antislash devant. Il en va de même pour les guillemets doubles. */

$demoPiège1 = "Mon \"prenom\" est David ";
$demoPiège2 = 'je m\'apelle David';

/* aficher des varable  type string */

echo $myAge . '<br>' . $fullname . '<br>' . $myEmail . '<br>' .

    /*Le type Float */

    $mombreDecimale = 1.50;
echo $mombreDecimale;

#La concatenation

$devise = "F franc";
$prix = 12.90;

echo '<br>' . $prix . $devise . '<br>';
