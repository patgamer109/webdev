<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'mywp1' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';ig!yD*y~s`.uf=IeLmWiI|SBbLw-aR/cN:$g {y=xU}]<Zk4Eskb[:>o=s,T4BU' );
define( 'SECURE_AUTH_KEY',  'x;[f:&i(k#lObGL7>x,q j,tDy4NSR5La~NDT24Z;(^q6Ze<b-<92;??xJ5[OwE>' );
define( 'LOGGED_IN_KEY',    'jFB)F#K0z}Cm!7Nuvip4?W6s&CW7z%/d[[z)At`&dNcrbRzg$`Mk[rI[Yd/h6Li>' );
define( 'NONCE_KEY',        'x+wbX)F)5dYX2aJhSx~7w oFVTdy(uJAU(IJ=BWU@K^5iBUt-[f>+G:s$AoYJLci' );
define( 'AUTH_SALT',        'Udr,~KH1 {,1P:Dn#hSBYoa(=P[d^o |fPV4rU(rY8 S:yZTS>aeMBJAi[n5ClWl' );
define( 'SECURE_AUTH_SALT', '9_P{QD_E_LE<W=y}k S$M;}QxO;UoD{Dz,;Fxq&pQ6P~^6#x^3;q)@Ec YkjZbV<' );
define( 'LOGGED_IN_SALT',   'HMuv-/mRV%2>]~<AEx=98h{av;TbvyzgpM#~17.#64aimxAl/RxzgjfH-BQ~x=z`' );
define( 'NONCE_SALT',       '/x>N$NJpt5]O1[[M(#Wmb>$ib,h4u-X&|^5u<<MX#D2CO5I.C4I5Dtxh@EgM8uG=' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
