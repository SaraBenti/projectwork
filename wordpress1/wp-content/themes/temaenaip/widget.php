<?php
/*
 * Questo è un widget
 */

 class My_Widget extends WP_Widget//classe predifinita su wp content 
 {
     public function __construct()//opzioni del nostro widget
     {
        $widget_ops = array(
            $widget_ops = array(
                'classname' => 'custom-widget',
                'description' => __('Questo è un widget di prova',LANG_DOMAIN)
                //dove abbiamo la necessità di scrivere qualcosa il sistema è
                //__('','')
                //__('stringa che compare da tradurre','quello che che c'è nel text domain,cioè temaenaip')
                //esiste un altro modo che stampa direttamente la traduzione
                //_e('',LANG_DOMAIN) che è = echo __('','')
            );
        //classname e description sono classi di un div che si crea dal widget

        parent::__construct( 'custom-widget', __( 'Il mio widget', LANG_DOMAIN), $widget_ops );
        public function widget( $args, $instance ) {//obbligatorio affinchè il widget funzioni
            
        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] :'';
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

        echo $args['before_widget'];
		
		if ( $title ) :
			echo $args['before_title'].$title.$args['after_title'];
		endif;
        echo file_get_contents('http://loripsum.net/api');//esempio di chiamata al database di wp
        //oppure di file esterni

//interrogare il db di wp per inserire all'interno del widget l'elenco delle pagine del sito
 //classe wp_query
 //elenco delle pagine del sito di wp
        $query = new WP_Query(array(
            'post_type'=>'page' //posso anche mettere più elementi e quindi un array
         'post_status'=>'published'//per non mostrare cose non ancora pubblicate
        ));

//ciclo while per ciclare l'elenco che mi restituisce la query al db
while ($query->have_posts() ) {
    $query->the_post();
    echo get_the_title();//funzione per leggere il titolo
    //loop di wp in questo caso perchè non ho impostato nessun parametro nella funzione
    //$query->the_post(); serve per evitare il loop
}


        echo $args['after_widget'];
        }
     }
 }


 //funzioni per far impostare il titolo 
 public function update( $new_instance, $old_instance ) {//salvataggio
    $instance = $old_instance;
    $instance['title'] = sanitize_text_field( $new_instance['title'] );
    return $instance;
}

public function form( $instance ) {//creazione del campo
    $title= isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : __( 'Contattaci', LANG_DOMAIN);
?>

    <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

<?php
}

}