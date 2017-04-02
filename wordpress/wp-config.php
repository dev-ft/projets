<?php
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
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'la_flambee');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'M9h`}e3h!M@[Q|2^D*;F(&N#--<Q3gHwct%N02&EP[&EdL;WdVS_WO%Uf^H7;Ko,');
define('SECURE_AUTH_KEY',  '7&zt TB%Ai>@EugD#<1neK>612Q{A<8Snl(q)zQ)ecUcc,46yG,3J:f}}WJ(]$Ie');
define('LOGGED_IN_KEY',    '~is D>1Y(N?mP~`}_p_/@1(gf#G0g88@a)8^kR(FPzeA*-4vq%G?A81hY>3C|zi ');
define('NONCE_KEY',        'S%e/(62^cB{^<U!mZdAM:dQ,xiizf;#l1i3k4S/BQSY=0i+4;#H_gZO/:i-PWUMM');
define('AUTH_SALT',        '<?ug_RwOb7cV`{)`)!bGVCl!nENPH?bs(E@d{uI4E6Lxq~kxseIM[Pu):R@q|0ON');
define('SECURE_AUTH_SALT', 'a*&><@*g:5!cr?Aeqv&Ro1zftoy>&KAAx*^d1A=`0|W.Y;Tlln5N/dV&^i-Z2ebG');
define('LOGGED_IN_SALT',   '&|=-9&<]}C@OSPY9jxSJG:jMW+mAU4 #6ePwo)OsMYI79f]V)zHeSgPouR0~t12m');
define('NONCE_SALT',       'k7Mi7nN|w%nn<*:1mr+Wg=?`(rn;CiXmkU4{S)}pe~.=y7:.<*8,VE&BwmpK/k,F');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

/*
define('WP_HOME','http://localhost/projets/wordpress/');
define('WP_SITEURL','http://localhost/projets/wordpress/');
*/
