<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'projet_planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'EI5bHpd1[;CuQSyTYy)~r^j)MmRiK91<Xs9VigG{6Nt@*YuO58Kn-k; Rs0#2huZ' );
define( 'SECURE_AUTH_KEY',  'FY0~nU3+x}Hek?(k-uvpT@Z-Y<!<=sVAXL%vVkk::/DZMwGKgMh1eT*Ta<$UXs*2' );
define( 'LOGGED_IN_KEY',    '%9w_l:MOik|<[oL^i]NGonv8$f3OZ02z$b:K3l6;GxWbcVyND$Xv3UY{qX.!HKiq' );
define( 'NONCE_KEY',        '$6?t?j+~N0/Dew;QWJ5gf!c_+:uA;{Vkge}&%x.v[oms^z=z=oY$K=hEX];:d.Z_' );
define( 'AUTH_SALT',        'm[aL_6k^)w3$8l+fV<#heX;cB;Jy:p~Tm~s4p;Csa+dNb):v_lN]}|eNIhWh}LPo' );
define( 'SECURE_AUTH_SALT', 'Hq-&Yv0vOXP3hodb3m}}`F2WH$=I__;%$}1rt?.-jz%I74?ww5m!(/C3D]|x/T1S' );
define( 'LOGGED_IN_SALT',   '3ev`!E,arxN+E46l7f4)]p~{LlePo8IgO|?(VOUQ}]T}!]zR}qxV#AXF^ZuNl@FP' );
define( 'NONCE_SALT',       '7/De|iO* SK (:I9ep%vHNd5Cy5IEKe1--DjAH`?3<x=hC)n%&a}PyHZL/TCrV@k' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
