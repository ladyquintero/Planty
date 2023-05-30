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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rXn;UAJ#B8et=+44}lC;67~C.eNa`a&ryKx{OP,-WuV_bf8leYjP9M#y~/q0l$X1' );
define( 'SECURE_AUTH_KEY',  '#:A.oIHz|Xu$0%5Q]+CjW_:/@$ 83-?hDoYI(mF2(1De$8:~|t)kXD8g?43sgsMl' );
define( 'LOGGED_IN_KEY',    '<{&.(gXH%U`vq8s< Go~hV5>4qNRW^>xw0 }h Qj`GM&s)34ITxo%F_9#IUb|]`q' );
define( 'NONCE_KEY',        'I0_U^VTE((g}Q,p {}|[<N)j8yp7O0nM2}(C&9HrtDYT ~$5%3z&$,c#sFD_WL]5' );
define( 'AUTH_SALT',        'ZiU%e1f e$~Secmc0yw !d5c59s{[64YyM*in%q[Ck|5V%pSzsQb2}eZiIID^A``' );
define( 'SECURE_AUTH_SALT', ':GZq0.AP=o,x3Gqy?k#%.H+DQ@TU`1LI<_Zi)Rc%roN.~z{ fva9l4,!e:y8>P1&' );
define( 'LOGGED_IN_SALT',   '/Otk17#<P2>/#M~-g8I[=5$nsxn;L!WOV#OBYXavD~D05.4kFF7#OLDn@lkXnH+I' );
define( 'NONCE_SALT',       'ruJL0]SoezggsTv}pN@c)+c}9*$9ZaVtf`#m<Hr_|b]&e3Hchk}DVo.b(X!S|>!h' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
