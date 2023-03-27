<?php
define( 'WP_AUTO_UPDATE_CORE', 'minor' );// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
/**
* La configuration de base de votre installation WordPress.
*
* Ce fichier contient les réglages de configuration suivants : réglages MySQL,
* préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
* Vous pouvez en savoir plus à leur sujet en allant sur
* {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
* wp-config.php}. C’est votre hébergeur qui doit vous donner vos
* codes MySQL.
*
* Ce fichier est utilisé par le script de création de wp-config.php pendant
* le processus d’installation. Vous n’avez pas à utiliser le site web, vous
* pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
* valeurs.
*
* @package WordPress
*/
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
// determine the current environment
define('APPLICATION_ENV', (getenv('ENVIRONMENT') ? getenv('ENVIRONMENT') : 'staging'));
// set specific global database variables depending on your environment
if (APPLICATION_ENV != 'production') {
// turn on error reporting
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 1);
// set your database credentials for each of your environments
if (APPLICATION_ENV == 'local') {
define( 'DB_NAME', 'wirthrail_2022' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
} else if (APPLICATION_ENV == 'staging') {
define( 'DB_NAME', 'wirthtrail_1uw8f' );
define( 'DB_USER', 'wt_fr6e0' );
define( 'DB_PASSWORD', 'f#6O0Ar9Wg' );
define( 'DB_HOST', 'localhost' );
}
} else {
// turn off error reporting in production
error_reporting(0);
@ini_set('display_errors', 0);
define('DB_NAME', "wirthtrail_1uw8f");
define('DB_USER', "wt_fr6e0");
define('DB_PASSWORD', "f#6O0Ar9Wg");
define('DB_HOST', "localhost");
}
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** Type de collation de la base de données.
* N’y touchez que si vous savez ce que vous faites.
*/
define('DB_COLLATE', '');
/**#@+
* Clés uniques d’authentification et salage.
*
* Remplacez les valeurs par défaut par des phrases uniques !
* Vous pouvez générer des phrases aléatoires en utilisant
* {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
* Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
* Cela forcera également tous les utilisateurs à se reconnecter.
*
* @since 2.6.0
*/
define('AUTH_KEY',         '}tM#}-dYU-:1Bql6hs3%<{z{Lcm|5At3-eRV|6p3 -HtY7.4XQFvE_UyXQDB&SF)');
define('SECURE_AUTH_KEY',  'Zz{605)&J@H7(|FGI5INu$JYWF-RnyQbWb`4-{6lH[vYfIr~^==z}%DIpF!N|DDd');
define('LOGGED_IN_KEY',    '4)qXIl|9gxn*rVjHT[g%/}:/7^s+k-b{J8buKcH|<]wQ)J4+AH<F`>gpP +#=Loh');
define('NONCE_KEY',        '[4Y84h-AoEI!`rMd~|jW@:_5z2=]vu*5NaBX<BG(}*+kOU.XQLd~#CM1x>X,8#.T');
define('AUTH_SALT',        '#i=|WFeh]-b(?s/e |E-!5/|Xh.@U+YO*4Pa<3~n7gE>({s~?Lnaa)H-m#VD<Vdj');
define('SECURE_AUTH_SALT', '|-F,Zv$4-5hKqw|#^TwebKCWKF+m*_[_smR%;0cs+MfqNA9asbvHSc+&2Gy_LV<A');
define('LOGGED_IN_SALT',   'GA(K2cp+B_5$le$PfFL:Q`Z@pi;~7T+@kiV@g7uC-.vB{(Y=OT~cU]3p~k*v>iUM');
define('NONCE_SALT',       'w}Up(ceb=.e O6%Sr@TD6$BzKl>f{Luv[N--GJQh@L{XYk=oKaNBhTVy~^2Nc<~B');
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
* Langue de localisation de WordPress, par défaut en Anglais.
*
* Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
* au langage choisi doit être installé dans le dossier wp-content/languages.
* Par exemple, pour mettre en place une traduction française, mettez le fichier
* fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
*/
define ('WPLANG', 'fr_CA');
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
* @link https://codex.wordpress.org/Debugging_in_WordPress
*/
define( 'WP_DEBUG', false );
define('ALLOW_UNFILTERED_UPLOADS', true);
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */
/** Chemin absolu vers le dossier de WordPress. */
define( 'DUPLICATOR_AUTH_KEY', 'tE]R-8AnPL`)oIwP<byY{E.*;l&%uhpZ;cwN7T<t)2vuIoUX79$n;vB;Z:rNvFbn' );
define( 'WP_PLUGIN_DIR', '/var/www/vhosts/wirthrail.com/httpdocs/wp-content/plugins' );
define( 'WPMU_PLUGIN_DIR', '/var/www/vhosts/wirthrail.com/httpdocs/wp-content/mu-plugins' );
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');
/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
