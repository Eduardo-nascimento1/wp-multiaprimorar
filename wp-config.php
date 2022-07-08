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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'aprimorar' );

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
define( 'AUTH_KEY',         'A2ffL!;D/sdn)PdKFu>_?w:?R^|meLGkO/EDWQ1aH`QU6.^ymC-|&E1#N{J-Q|x>' );
define( 'SECURE_AUTH_KEY',  'lzPe5Sew3VLUu+;X_lxd<T$aU+]7nqL^/0l5RB_AP[b+9r{<tJr.h(u<Mq:mKQrb' );
define( 'LOGGED_IN_KEY',    ':[JN{I>y8N?bDldxl]Ag<zrS=nH*=>DsALYEBN~hd3|nTC(|&8?IA?.l?:<9*[$9' );
define( 'NONCE_KEY',        ' vrf^&5OktljofTjxCrV Gs)LU@>D0oMvO*tXbw*([>h?}p|NW*P!Dyc,P8 m{si' );
define( 'AUTH_SALT',        'B.(pR)5mJ/m)fSmp?=Ipe#t]^tGWlo2,6f!wVk<_(2[zs`mRv[O9,3w<49NAYE2F' );
define( 'SECURE_AUTH_SALT', 'RQg8UDegZ~pn&76!$OqAkoVcRwldeNYh`-VV}vebY*k9 W?,W6,4W5$g::)ZMKzL' );
define( 'LOGGED_IN_SALT',   ')%<TSBi[xw?=*BTy0!rJT59f}@e_B;<l^f`Q;oYw(-PXtC|k.gX>~Lfn`*wUP}k9' );
define( 'NONCE_SALT',       'tc>#||BDpkjC0>Tu1@RV=^QZZo+)vb`|Bbt.-s?06.JV&{e)3jWfm$}6Fkt/^6tI' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
