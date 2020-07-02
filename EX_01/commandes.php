<?php 
    $historique_commandes = array (5.49, 9.99, 5.49, 15.99, 25);

    foreach ($historique_commandes as $afficher_commandes) {
        echo "Une commande de $afficher_commandes euros a été reçus. <br>";
    }
       { echo "Le total des commandes est de ";
        echo array_sum($historique_commandes) ;
        echo " euros." ;
    }

?> 