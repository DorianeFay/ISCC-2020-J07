<?php 
    $panier = array(
       array("T-shirt rouge", 15.50, 5),
       array ("T-shirt vert", 15.50, 6),
       array ("T-shirt argent", 15.50, 8),
       array ("Short bleu", 16.50, 5),
       array ("Short vert", 19.99, 5),
       array ("Veste argent", 19.99, 10),
       array ("Veste argent", 35, 3)
    );

    
    foreach ($panier as $ligne) {
        echo "<ul>";
        
        foreach ($ligne as $afficher_panier) {
            echo "<li> $afficher_panier </li>";
        }

       echo "</ul>";
    }

    function calculer_total_panier($panier) {
        $total = 0;
        foreach ($panier as $element => $value) {
            $total += $value[1] * $value[2];
        }
    
   echo '<p> Le prix total du panier est de ' . $total . ' euros </p>';
    }

   calculer_total_panier($panier);
    

?>