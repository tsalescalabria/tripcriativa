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
define( 'DB_NAME', 'tripcriativa' );

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
define( 'AUTH_KEY',         '5C{d5QN%01qOwfw0eno;MoH!P{**6KOYBWNtV;psoKcvr @u~uCU_gBwkt^V#p}0' );
define( 'SECURE_AUTH_KEY',  'P_v(AC_|kfB&Y+W_gud(o`LH>4U@$^<h-U71$;{u~Eu^.>kV`-K^HNC03a@1!pIj' );
define( 'LOGGED_IN_KEY',    '&L6>q!T5RG<72 >ff2~2j|m%)bu.2Pra#+AY$`R{F{r:5)9/mxg/G!u7_@y[|Ub9' );
define( 'NONCE_KEY',        'TwYwOq,k:AEbj3YeS+;zalVgbq4LTK<>#e}VkNL{i{H_MZk6>M;tp9Eg*soG:a^W' );
define( 'AUTH_SALT',        'AhlF)WO!^z,l;44<S+/Dw9<!ZHmW<iJung{&<WKMXDru9nE&&hcUt.CAo@,2fIUz' );
define( 'SECURE_AUTH_SALT', '&vcZL1{1 c$poacEZITNd_WvLAZUyx81B}kiML(&Zl#*uwuL{8 gLtpRt]$({Txg' );
define( 'LOGGED_IN_SALT',   '(<bb1,n9mp=H0E2`]YpXD>$Yb(?z$oJ(^Rd80N=f:Hh+bm7DQzq6Y--(p3p:dDZH' );
define( 'NONCE_SALT',       'kFbnYn9AXCA$fI~S=4xRQTQ!,ncb}`WtMo8;TQ|QO<-3m~qSL,+9Gu?hGjBGBZ;3' );

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

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );