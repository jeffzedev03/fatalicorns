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
define('DB_NAME', 'fatalicorns');

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
define('AUTH_KEY',         'M{tjKHApS]y6!%Uf,m]OcoieVjLOyb8Gz(ly@f}v_cen1;0X5|*45zpmBa{}XZj ');
define('SECURE_AUTH_KEY',  '!nq&0RbC)]94_O2g` wV4}hcX&k?51-PfkH&DD2z.[wH7[#@A)?A_!Cjka^09yIi');
define('LOGGED_IN_KEY',    'ztbTCb)MrkK0>H]8-qoN#d`-As&WrexojZ<:.vi.#e%~::)OnDxY->M}V*L(@c^/');
define('NONCE_KEY',        'P_[c?x_KG@E?Q;pr3HgEs:uNu(|^hXX-RTMlAD#b?3g7%E.L.m*ry3E[/_<`@d,4');
define('AUTH_SALT',        'Fx5{tqm%k!v6gHsS[,r_imYe1&vU>dwOD=Buu`C>|/)X[>9l)-g1)~4f_FkVYvm?');
define('SECURE_AUTH_SALT', 'L!ipk#Lg!Bl9|w(,3K-_WVi1}oU&;YKv2izg_hMo (g8Iy.V$!Ikq_?5_P@SQ.GW');
define('LOGGED_IN_SALT',   'aKR_WbK2W`x{654{F Wp,)e;x_lt~I.y-gW!*svzUo#F&-ceS9imX]0kIsU{&^_6');
define('NONCE_SALT',       '):oT*6<n?k1?WoLdxF KR5>WhQ97h4d/Jn]?C^(k,SyZLJHo~]Uy*FU$IOF`@q}q');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'saying_';

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