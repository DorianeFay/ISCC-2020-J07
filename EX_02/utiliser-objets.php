<?php
    $date1 = new DateTime ();
    echo "<p>" . $date1->format('Y/m/d à H:i:s') . "</p>";

    $date = "2020-06-22 00:09:00";
    $date2 = new DateTime ($date);
    echo "<p>" . $date2->format('Y/m/d à H:i:s') . "</p>";

    $interval = $date1->diff($date2);
    echo "<p>" . $interval -> format('%a jours') . ", " . $interval -> format ('%h heures') .
    ", " . $interval -> format ('%i minutes') . " depuis le début de la piscine. </p>";
?>