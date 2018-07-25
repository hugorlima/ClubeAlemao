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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'clubealemao');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'OoWX:O/j%-{%< <>S,M4FF/p!P5~A~!&02xP{9z.)axZz^S6o^6bJ5 CuR^{G|m!');
define('SECURE_AUTH_KEY',  'Q;<_J|b>:9&KgB#/geXXw&t~82Djc1b9e!#5d`$8AJFH}`%353kb48.Jl,cyBg|?');
define('LOGGED_IN_KEY',    'V~$M M8B~)!W+#78m%#eTfr]i{R+oh^xew!*#=>@D8S`ebWuUuN!;%uvS ^i,C{5');
define('NONCE_KEY',        'HXtl;^o^W82;:)tQ54jK kW5:>JCZMYBYtZQa<d)(1&&Tal@x4GkI?Qomi]HN_2C');
define('AUTH_SALT',        'j#9| a`9y ev2!9or|D~BBLKPyB1KTU*,ru5lp#f #upox8,7ood*R=3_/Sq=*lb');
define('SECURE_AUTH_SALT', ']%im%@_hY!scmd)|=U!JD4<<Gr8TGi:#g%)>47@)H~iMZn)QP`bnuNf2UPJI5k]H');
define('LOGGED_IN_SALT',   'pK> Y;q*j*q9(bkCwWg+M=r.;nDhl2Em[dk` Se>+rvS;xEx.>M3x!1WEMnY7K@p');
define('NONCE_SALT',       'k}X?IJn_pN,m-0)8{p:3gBssP$F%{LBHm#`@FNcK{_%7HA24Kq(xW={?}<72&YPT');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

define( 'FS_METHOD', 'direct' );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
