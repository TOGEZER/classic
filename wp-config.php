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
define('DB_NAME', 'group_classic');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'group_admin');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'r6WMiie548D6B9YUKmQx');

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
define('AUTH_KEY',         ' i4JHsk|bkXz<X>yP|cqDQgotiYY%mF<*XL%o#ZU!gZ:6yUV}GyG^5/h.2vB4$6S');
define('SECURE_AUTH_KEY',  '>xRONNs JdzYNv-|5~!(=>P[|T]&+J)N5Wi1xL9G$N26%zk&hYXa%Oabu`N8o ~Q');
define('LOGGED_IN_KEY',    'p=^I;<D|~A8pz=hg`)zR)H;8{co8z_Br:4,MzO$=suN&+XlDg(S_EWd@wMyhUe)=');
define('NONCE_KEY',        'kx=k9$806?/?fp.}m|XA^nScvdM5EZm1>WS`UuVY*sz.b+GZ#>a]eJHbh6#RLj <');
define('AUTH_SALT',        'X[qv;{-dn,_Q}wk/,|N[pHAgF)}GRN9SSBExU4E(RxU?R%*qJAn~EUTh*WDZ]J|k');
define('SECURE_AUTH_SALT', 'U|{U8]2Fh&s@3mC&h%vF $MWHiW^`1AJFWP3I+hj.?DS o}P[wTAy>=nOU,u/yUa');
define('LOGGED_IN_SALT',   '#]zmrpUG7x:(X!p?;VW_ja.{EA[v`Q*}.zaZ+4PeAxLSOuOfdeTFxZn++g-;VcEX');
define('NONCE_SALT',       'R=WB1V:M<Ns/)NZ/k+j|AZ_iAz*v]#@^04]Y?atD`y-rD47(wxi|Im+e/ SjGn0G');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
