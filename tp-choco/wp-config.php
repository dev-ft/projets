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
define('DB_NAME', 'choco_et_co');

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
define('AUTH_KEY',         'G8}[Di6ZNc}+3<0vxI%M@6amf`gi D7L &e>n~-Z@P9l@mhm4*EfV/]N&jM]`W(;');
define('SECURE_AUTH_KEY',  ')SxpFg:NmC>~+Hck{B-1GlklDtQ-%XRlxqB9}|q(]g^OTuEZuEa^~!x!0Qi;K<pS');
define('LOGGED_IN_KEY',    'v%Fx)WI6?gAdk9.:$?hDuXV)$>UJx/QBa^LeIi%37A%`?1DGkeo}yPIrS&A`9uR@');
define('NONCE_KEY',        '@7yEVe:Hj)mOKS&`6H}kZ|nPk&S{7$v;aFT($kww*Yc.k%[^M)aG$BR1yLk_r.j>');
define('AUTH_SALT',        'l&0$()%oq>Npxcjifi8^:{#5DI HA_C0!(1$xn$yEYF54Ak:]9yT/ELi[B;DTNq%');
define('SECURE_AUTH_SALT', ':uM<B[JJXY[,YlQ{ui<iq;RNef!xwurlJk4NZ*&VCXG/Y$302A<l,LpW:4AAVlH-');
define('LOGGED_IN_SALT',   'I.q)M8Gp!-Vo2pUn&aQey~.(EL4D:!TGkh8#sDvzsMVfn~;44$;Ik>DU?vT,OI=$');
define('NONCE_SALT',       'E&{eL5-Km.)=t}+}G4&;KZ6>MlE8m[=7:oB?xfEdM47B%j=%A/4(,q!s(qxv|m#3');
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