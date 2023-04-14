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
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', "wordpress1");

/** Nome utente del database */
define('DB_USER', "root");

/** Password del database */
define('DB_PASSWORD', "");

/** Hostname del database */
define('DB_HOST', "localhost");

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'v+kZ1s|2n}VZ!|EHJnZ8:>H}Oe^om_8_GH>H}S[<N}_(:c.EJ0vyg_3`4{>A=U{i');
define('SECURE_AUTH_KEY', 'iqXM<#}JSK~iZMe76a`1N}u@ZZ.<cLeS (>Q!NrV~(VC16vDA(OCFE-mvA7[sD>+');
define('LOGGED_IN_KEY', '>J@;u00V@oPrv>=!SVMPs`9huTw,I,4H*cvgi7!@m0 sp;oIeX7ZHtP^@l;]bjk`');
define('NONCE_KEY', 'gPYvmY*hCN8`vAGVL=(Dv+ BSH;2vixB6nEg}QGc9K+d<v.-AI0)/NPRn|X}=xTE');
define('AUTH_SALT', 'wTMJ:wd6KPL&#5yA|2GHtZ#B[92GZrIfbm =i47u{_D2V(Aj>~hw qAeXFza)# L');
define('SECURE_AUTH_SALT', '*Q@73jR|d!z?L%$9Ov<ebE#{WcPhvLHZ4S{7nGz=){uOn0~50bUi|qtn=*5FW5]H');
define('LOGGED_IN_SALT', 'oj#2~GxW~nY0]M0~O%Yf[R1[J>Jf?tQxTxi16451EgJt&*6(C#ue4)pT$G=V}O<&');
define('NONCE_SALT', '.q-cm{]*veQ3w||jdeY;[7=v7C.~Em3sn:ur(QGX^{hQ8gD Dx}(8jRwJt?Rd,i ');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Imposta le variabili di WordPress ed include i file. */
define( 'WP_SITEURL', 'http://127.0.0.1/wordpress1/' );
require_once ABSPATH . 'wp-settings.php';