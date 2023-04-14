<?php

function custom_style()
{
    wp_enqueue_style("wpcf7-custom", get_stylesheet_directory_uri() . "/assets/css/wpcf7.css", array(), null);
    wp_enqueue_script("custom", get_stylesheet_directory_uri() . "/assets/js/script.js", array('jquery'), null);

}
add_action('wp_enqueue_scripts', 'custom_style');

include_once("shortcode.php");
include('paragrafo.php');

function theme_setup()
{
    if (!defined('LANG_DOMAIN')) {
        define('LANG_DOMAIN', 'temaenaip');
    }

    load_theme_textdomain(LANG_DOMAIN, get_template_directory() . '/languages');

    register_taxonomy('project-category',
		array( 'project' ), 
		array(
			'hierarchical'      => true,
			'labels'            => array(
				'name'              => 'Categorie',
				'singular_name'     => 'Categoria',
				'search_items'      => 'Cerca categoria',
				'all_items'         => 'Tutte le categorie',
				'parent_item'       => 'Categoria genitore',
				'parent_item_colon' => 'Categoria genitore:',
				'edit_item'         => 'Modifica categoria',
				'update_item'       => 'Aggiorna categoria',
				'add_new_item'      => 'Aggiungi nuova categoria',
				'new_item_name'     => 'Nome nuova categoria',
				'menu_name'         => 'Categorie'
			),
			'show_ui'           => true,
			'show_admin_column' => true,
            'show_in_rest'=>true,
			'query_var'         => true,
			'rewrite'           => array( 
                'slug' => 'progetti/categoria', 
                'with_front' => false
            ),
		)
	);

    register_post_type('project',array(
        'label'=>__('Progetti',LANG_DOMAIN),//nome che compare nel menu (articoli,pagine...)
        'labels'=>array(
            'singular_name'=>'Progetto',//nome al singolare che compare all'interno del menu e in alcuni filtri
            //(aggiungi pagina ad esempio)
            'add_new'=>'Aggiungi progetto'),
        'description'=>'Progetti del portfolio',
        'public'=>true,
        'show_in_menu'=>true,
        'show_in_rest'=>true, //questo va messo per contattare le api e per far si che guthenber possa lavorare
        //con questo tipo di post        
        'menu_position'=>1,
        'menu_icon'=>'dashicons-paperclip',
        'supports'=> array(
            'title',
            'editor',
            'revisions',//revisions serve per tenere traccia delle modifiche dopo ogni salvataggio
            'author',
            'thumbnail',//immagine in evidenza
            //'custom-fields' //meglio scaricare il plugin acf advanced custom fields
            //wpml plugin per la gestione del multilingua
        ),
        'taxonomies'=>array('project-category'),
        'has_archive' => true, //crea archivio tipo il modello blog
        'rewrite' => array(
            'slug' => __('progetti', LANG_DOMAIN)
        )
    ));
}

add_action('after_setup_theme', 'theme_setup');
include_once("blocks/blocks.php");