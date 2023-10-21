<?php
/**
 * The main single item template file.
 *
 * @package kadence
 */

namespace Kadence;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


get_header();

kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
do_action( 'kadence_single' );

get_footer();



if (is_user_logged_in()) {
    echo do_shortcode('[contact-form-7 id="116" class="mon-formulaire" 5title="Formulaire de contact"]');
} else {
    echo "Ce formulaire est réservé aux utilisateurs inscrits. Veuillez vous connecter pour y accéder.";
}
?>



