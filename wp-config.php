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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '3Hx,r9ogP5{{33J5St[$Z^rWSY xFR&*_:y/NMTq|v#WHEk+op1e<8+4-0}/Y`@X' );
define( 'SECURE_AUTH_KEY',  'J?F0F.O:qp<?h%xhUL^~-)+:*0OV` ~1-R`DyLK-,4Y+ VqQHh`=j=[K`@!mzC+G' );
define( 'LOGGED_IN_KEY',    'nq{NCysWd_[fz4z,8/C>)LYWYYyX%;0nTSVabp4_j,BXBx#ue#4E;SqpH$%Ne^<2' );
define( 'NONCE_KEY',        'mHLJu,URn]6a{]U){#NyL~ u17nM5)wYDSp=d7zzjnMFp?2EhZwl%.;I]529cL,}' );
define( 'AUTH_SALT',        '2K-^+6aKj%4PvbedOkRpqK;P<d~}yqQL9Pt0F;]?b>*PgGmz?+nAh=~fhg3HZq4x' );
define( 'SECURE_AUTH_SALT', 'Ft r*eljehQk,|8.LNXlOnJ=!ZqBGn4`e1XLS>Rs9rBa`A*se;S8D7|y,Q_EGV7!' );
define( 'LOGGED_IN_SALT',   '+mf+B+$|@+NAf9oQ>J_-~pO }>R3V2=QORq^XQq[>;QDV;Jtx{tEudQ#r6qKx.j{' );
define( 'NONCE_SALT',       '#!PK6zy5=vR`d@mJ1?e9&5S]osF3ZEjq6@Dq}{{xHR_VJSw#20*W? c@2mj&gA;z' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'mywp_';

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
