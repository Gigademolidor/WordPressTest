<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpresstest_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4.hEDAta6K9-:)~)&]3_Xi,=Jk1J0SZi0UuNBNTQs.X-w!H<)2Rjv<k.@%VjKZ7-' );
define( 'SECURE_AUTH_KEY',  ' N|I]!ksfehwp9D<FjtR`q!|36I!]N[+,os<si{*%4]XU5%06H.-1cR61V7NBUW9' );
define( 'LOGGED_IN_KEY',    'u.Fv@.k)2&E? ph8vTUOiZv 6OGXE0<{4_ O[3jgX0 hn#M AlDeb{];!R;( rR3' );
define( 'NONCE_KEY',        'Ju3xHuVky?FTslRx/SP6-RLs`6+kSnv8r=Y1F[-jK?;;{*kYio+D>Lv{>hVxNe/m' );
define( 'AUTH_SALT',        'TY59]O-b?oH?w $##5:a=84xC5(o42GQW,RhikkXg{_JvLA]2B5eL}`K^g:a@]X]' );
define( 'SECURE_AUTH_SALT', 'nWn(+byX9u35E`0Fhl`-XoZ:YFPnJ]vr$K By8 yfjX7qAIu9XQm,!12?x%}Jc1M' );
define( 'LOGGED_IN_SALT',   'Hb.}zohWWwZY/CmQFd6ln<[u?41y:,[=v19gSkpw(EE;`->] Y0HDjz[g0/2TdXc' );
define( 'NONCE_SALT',       '/$:s2w`!5G}g,^C;l|gWAHU1gW%303DJ#*6%]`n6UQM{-[-i<tWK8&<e*}Jw)9xd' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
