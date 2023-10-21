<?php
/**
 * Kadence functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kadence
 */

define( 'KADENCE_VERSION', '1.1.39' );
define( 'KADENCE_MINIMUM_WP_VERSION', '5.4' );
define( 'KADENCE_MINIMUM_PHP_VERSION', '7.2' );

// Bail if requirements are not met.
if ( version_compare( $GLOBALS['wp_version'], KADENCE_MINIMUM_WP_VERSION, '<' ) || version_compare( phpversion(), KADENCE_MINIMUM_PHP_VERSION, '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}
// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Load the `kadence()` entry point function.
require get_template_directory() . '/inc/class-theme.php';

// Load the `kadence()` entry point function.
require get_template_directory() . '/inc/functions.php';

// Initialize the theme.
call_user_func( 'Kadence\kadence' );

function testcolonnelaterale() {
    register_sidebar( array(
        'name' => __( 'my colonne', 'textdomain' ),
        'id' => 'oumelvadhli',
        'description' => __( 'ceci est  colonne latérale', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 classwidgettitle">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'testcolonnelaterale' );

function kadence_load_textdomain() {
    load_theme_textdomain( 'kadence', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'kadence_load_textdomain' );





add_action( 'admin_post_nopriv_submit_form', 'handle_form_submission' );
add_action( 'admin_post_submit_form', 'handle_form_submission' );

function handle_form_submission() {
    $name = sanitize_text_field( $_POST['name'] );
    $email = sanitize_email( $_POST['email'] );

    // Faites ici le traitement que vous souhaitez effectuer avec les données du formulaire
    $subject = 'Nouveau formulaire soumis';
    $message = "Nom : $name \n";
    $message .= "Email : $email \n";


    // Adresse e-mail à laquelle envoyer le formulaire
    $to = 'votre@email.com';

    // Envoi de l'e-mail
    $result = wp_mail( $to, $subject, $message );

    if ( $result ) {
        // Succès de l'envoi de l'e-mail
        // Vous pouvez effectuer d'autres actions, comme afficher un message de confirmation à l'utilisateur
        echo 'suceeeeeeeeeeeeeeeeeeeees';
       
  
         wp_redirect( home_url() ); // Redirige vers la page d'accueil après soumission du formulaire
         exit;}
            else{
                echo  'echeeeeeeeeeeeeeeeeeeeec';
            }
         }












add_action('admin_post_my_form_action', 'my_form_action_handler');
add_action('admin_post_nopriv_my_form_action', 'my_form_action_handler');

function my_form_action_handler() {
    // Vérifiez le nonce
    if (!isset($_POST['my_form_nonce']) || !wp_verify_nonce($_POST['my_form_nonce'], 'my_form_action')) {
        wp_die('Erreur de sécurité');
    }

    // Récupérez les données du formulaire
    $nom = sanitize_text_field($_POST['nom']);
    $prenom = sanitize_text_field($_POST['prenom']);
    $email = sanitize_email($_POST['email']);
    // Récupérez les autres données du formulaire ici

    // Enregistrez les données dans la session
    session_start();
    $_SESSION['my_form_data'] = array(
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        // Ajoutez d'autres champs ici
    );

    // Redirigez l'utilisateur vers la page précédente
    wp_redirect($_SERVER['HTTP_REFERER']);
    exit;
}


















add_action('admin_menu', 'my_form_admin_menu');

function my_form_admin_menu() {
    add_menu_page(
        'Mes données de formulaire',
        'Mes données de formulaire',
        'manage_options',
        'my-form-data',
        'my_form_data_page'
    );
}

function my_form_data_page() {
    session_start();
    $data = isset($_SESSION['my_form_data']) ? $_SESSION['my_form_data'] : array();
    ?>
    <div class="wrap">
        <h1>Mes données de formulaire</h1>
        <table class="wp-list-table widefat striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <!-- Ajoutez d'autres champs ici -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo isset($data['nom']) ? $data['nom'] : ''; ?></td>
                    <td><?php echo isset($data['prenom']) ? $data['prenom'] : ''; ?></td>
                    <td><?php echo isset($data['email']) ? $data['email'] : ''; ?></td>
                    <!-- Affichez d'autres champs ici -->
                </tr>
            </tbody>
        </table>
    </div>
    <?php
}
