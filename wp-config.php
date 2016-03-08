<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'extoplus');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Tl*pB/%Z1(;0Y[=O)_EW^:m>36u$}an?UB$$@9pZ%J&V{<R#^7g@z4QFG q7`(YQ');
define('SECURE_AUTH_KEY',  'Ru4;V#@qpz-Xd.|NXF/ 24Jjtm|DKaGOFF7j3d8>kWC!p$o_1&`%d|FI5_3QS+7&');
define('LOGGED_IN_KEY',    'gNE+T? ?>YW}W/-H=pP!$G_ZFzui<_G(.EeL@ZjF1:p2>{Dv cm+?6]hZAUJe%M.');
define('NONCE_KEY',        '=Z.2T>6WBEEgEZgRjjo%Hq4F9qN).9p;%tbPggdN+oZuOS8R4<9[llut2$T|oG8i');
define('AUTH_SALT',        'tP9k89_(^Sa]K|o`qUt8E!BC>D/A8EFZ U*4nX!Gkk.E{776P+ =cO_5lq+`2iuS');
define('SECURE_AUTH_SALT', 'O>z4{*2kHrJ)SJqUp4%pmuBFct{+u%3Pn}{DCh]+_DrPgbN/&k7{kNP}C6Dt&$e=');
define('LOGGED_IN_SALT',   'nt :`ayn_g3&E-X-V&kI4^un<<M[2S$}U&fJdu!#y%z^!C(;k=]+U9br({tAzEQx');
define('NONCE_SALT',       '`CN#uzL4|pl4GW{ z+pt!6b#9Q|v^Xuh*%te_MAf^Zh02WHExc(nUN118gq(.D?=');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');