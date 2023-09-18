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
define( 'DB_NAME', 'HM' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '#8]Y?w{^7Lp%|h^iLX>,0ElIG~N_6ZKmAD#s(:UrlM^qg[A&sbe9_SCA^^d4,nfs' );
define( 'SECURE_AUTH_KEY',  'gVbfOwj;5?n,R34T6hw1f>rX=j{fywY{[z~rFIVX[^jn;R1F5L&oS7`t[}?U6P&)' );
define( 'LOGGED_IN_KEY',    '-oXkMzwDPQ93,5$R%`Tr;4kf1kL{}(Z`RiqWav84  c,8mFUobnG&9{F?(Y7z1$m' );
define( 'NONCE_KEY',        '{;u*7G`5Z?>mJf$#F-%>2):,3xf>[k.PrnB7}4>&k)-H^-}PTd>%MVV&HCp8ca}F' );
define( 'AUTH_SALT',        '&?*7,`(j:;/U}zoFsJ/d[<HV<V[wJOw?3sy`sh|B@)P,zK#^[&8_|#)Bw-]X1_h1' );
define( 'SECURE_AUTH_SALT', ' )5ujd<{~ri}Gl*_sh~bvIMZl^H+*Gn0nUf`{B;1B%~TU_K&brq9gT64})d$vMB$' );
define( 'LOGGED_IN_SALT',   '<x7!gX*OqGo1J!3[vWOfp{#g60vvZ.5h41}&`<?.<l*%QRU^6::y5Yjoj%&6Ktje' );
define( 'NONCE_SALT',       'Bi1tC@p1uoA(%,bD5.Y`!:;G(-FG?NAGnoavzY_Ts)HH[EE<UUR`7|u]}Ef`xGLy' );
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
