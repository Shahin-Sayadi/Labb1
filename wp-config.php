<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'root' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', 'root' );

/** MySQL-server */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'er*a)bd^@X/-6M)(g4xiQ8%Z*@>Gw.x>3BI%)&?A.BKnsvyng#L~@}eh*u),@M}h' );
define( 'SECURE_AUTH_KEY',  'H+@y,G[LBLO*mutkri(c_i<ZbO4O5{N(m(.x&nnXi3FQ00OBnT<2ThoI{C(9VoMb' );
define( 'LOGGED_IN_KEY',    '^`R)<hav/OZQ%y2hU>W>}6Sa99x0@~W,yp`,nq:+B;/Sf3TV,!$- %`a~x=g_aN1' );
define( 'NONCE_KEY',        'sfAPU@u6IW K NwXYH<-D4DNV*mgc&VHlqFf@]oedc3+?yCA3yk4f6a,St=VbQ3B' );
define( 'AUTH_SALT',        'cU_<}N#4?2_2,+GO$Gh :~iC{zI7|w0pKMX0*C}N$D/&l%QUoA-++>)!95p8~e?D' );
define( 'SECURE_AUTH_SALT', 'j(5:/{grs#EbGK]^w-#{<m,Ws.C{0I[C/:o.LL?eRdTDlgi)_-j/R= )$X+GUD53' );
define( 'LOGGED_IN_SALT',   '<jg}wGPW1dzpUnm,)fSU8OPYt>`QvsZu^?N]%2](S>1X|?N}CrY2{,v>3J6D2ia8' );
define( 'NONCE_SALT',       'QhSAopNG)-@*H1r 58w/X}<Vn#}(]n$La{6?|>vY%n8eutwDMfEhpdI.)>3CBSZY' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');