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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\MAMP\htdocs\cindychery\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'ccdb' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ',]HD62YRTVVfc81t{Ud)s] ,a1zXJcQf#slfSqs@Ye?f2y^jV)vht)}` q3|MWK>' );
define( 'SECURE_AUTH_KEY',  '!Qs/fxe{*qZM8B28i7U;1vy=G*k;Gj-Ie4_&hVJ8SJW^3sdUq6ReN~8Bu_f}B=e_' );
define( 'LOGGED_IN_KEY',    'QwwtFja1n2 7;aDzn!U=m6 GN=9X7M_iG;W-$4ox<3J&-39 cx|VVSWKiy9`@;$l' );
define( 'NONCE_KEY',        'VZvShCm1_JF^u&6g^qWhYvc#d1PI8BRejuRP&)yEE7oOE:z6hF,%5QP8ZkV3w]{8' );
define( 'AUTH_SALT',        '^V|g)fB*f6//NAdCye03zvt*tk5@}p7E1bpgzHf]jY-Vikhww]1F_,_(A.Q7V/u2' );
define( 'SECURE_AUTH_SALT', 'J`Zb!>7RUH`$;=Csdl[7ddn(W7_0_S<.0i@`pwq)s[`^RDF8Oa;n=ha5`}}[]Qr&' );
define( 'LOGGED_IN_SALT',   '4^vu>l0n#2iJy:tSn+oanhe*u;?ro6)<i@Hg<nGd0X1Bnct!PPWITW-mf$6`u|QE' );
define( 'NONCE_SALT',       '^:?FLi.S`.#LDWI@Dsw6Q_VD6f6E+5&]btLMzE7%1+;D!f$mM] Rf[Z?&nkk|Ij$' );
/**#@-*/
define('WP_MEMORY_LIMIT', '128M');
/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'ac_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
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
