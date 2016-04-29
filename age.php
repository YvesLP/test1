<?php
/**
 * Created by PhpStorm.
 * User: yves
 * Date: 24/04/16
 * Time: 19:36
 */

$students1 = ["Emmanuel" => 42,"Thierry" => 52,"Pascal" => 45,"Eric" => 48,"Nicolas" => 19];
$REPONSE = ageStudents($students1)."<br />";
echo $REPONSE;



function ageStudents($students){

    $REP = "";
    $AGETOT = 0;
    $i = 0;


    // Affichage des couples clé / valeur
    foreach($students as $cle => $valeur) {
        //echo $cle ,' : ', $valeur ,'<br/>';
        $i++;
        //echo "Etudiant N.".$i."  Nom: ".$cle."  Age: ".$valeur." ans<br />";
        $REP=$REP."Etudiant N.".$i."  Nom: ".$cle."  Age: ".$valeur." ans<br />";
        $AGETOT=$AGETOT+$valeur;
    }

    $Moyenne=$AGETOT/$i;
    //echo "<br /> Age moyen: ".$Moyenne." ans<br />";
    $REP=$REP."<br /> Age moyen: ".$Moyenne." ans<br />";
    return $REP;
}
