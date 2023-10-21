<html>
<?php get_header(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $valeur_input = $_POST["cu"];
      echo "La valeur saisie est : " . htmlspecialchars($valeur_input); }
      ?>


<?php get_footer(); ?>
