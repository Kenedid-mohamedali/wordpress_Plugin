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
define( 'DB_NAME', 'wordpress_plugin' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';:;kqTn_kJz{@(d(5[O|%wI$RQMWW8NHF_lVk3O-?A,!kk1hrD!v,e%<d6qb3hkK' );
define( 'SECURE_AUTH_KEY',  'c^2rxJtM@v:Hl{T^Z*kz6X,#o6}hl!o@nO[mCIMfqg5@_p/}igti<}xTWX FFQ0}' );
define( 'LOGGED_IN_KEY',    'P7.5wgDDeP<ovCsyi+Y5z%h86t9=$ghh>$:vY#hWiVg-GePJK?OrU.e2r<tKgI1z' );
define( 'NONCE_KEY',        '9^ ]A=tx#VT1zu7MIFB>Z;d+F{Dl>#1l3Fo^%`anq)~&wnZ%PDIv=)`R@2}5POg?' );
define( 'AUTH_SALT',        '@g0)Yj|NXteFSCQhEXQ0ExGqtfX7~sFYJ-e3&$I}|y| 7WVr0b$z|,[xnFykttf[' );
define( 'SECURE_AUTH_SALT', 'KbJ)t+0cM>lp0d( lK|>W&sVmF)_SVIw>cSW}Bf]EXU$Lqcs|i_(ElQ/eQR|zS+$' );
define( 'LOGGED_IN_SALT',   'Ejz|EC=QZ+LfO8M-;)._dk%(;N7=GHXQmN)P[T)5=@BFE)c(a9L0;b|]tRO_>p&@' );
define( 'NONCE_SALT',       '(/`n<!FnU8=LN${(OI`K]G9=DRXf-SP~!`.lC#zYw=0D3z](-dJq;i6b~I*T@cw6' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'xs_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
