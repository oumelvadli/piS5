<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'stage' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j5%A A&g8Bp:7g@$&/6;?WZr.&_dN<kHJu{}U}ju&(ukYlBeS}Bf8Q=O8 coK]~l' );
define( 'SECURE_AUTH_KEY',  '7rgTNxeP,<_S[9vk78vGH=ft*ucaGjgU-AX3yy=1B.U~ISNz/Uy01Q]i$y#2gJ9I' );
define( 'LOGGED_IN_KEY',    '**F+A}%4}LSSoV.g{&P~263u_;6#9S$_Tx;atf 85lH`.]sNE#x4O3u.<AEKh4a,' );
define( 'NONCE_KEY',        '~G=&emL| ts(B~8#d.d-@o&m6UOd.#yEv0(A~,C_^>6>Qckp[#JEn lDmB>`J^RZ' );
define( 'AUTH_SALT',        'U7HV&S;,K2m_AI.SQBP8.Su(jB{q:t}|TpKLF/4$1b/HCI5p}aMZhk$hvXI7pZI6' );
define( 'SECURE_AUTH_SALT', 'Yg~>$-C3:P>{2=ohR _xQ*|<BjmrRD#o^S@+[dLDaZ#tIh`%x+f>!<m:[Kq!@MM<' );
define( 'LOGGED_IN_SALT',   'KdP2xO]qTR,7sxpG%!Fu~_:{wpuY./8yk>#6L@]c96MQmZ$8!ZB9QD`Wo5hludG?' );
define( 'NONCE_SALT',       '2F +1XdV;3%-AC31a7V$KyqTr#<^M=u}yzf<b83RvYe8nFCqgae!T|E5(7[P!>SJ' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
