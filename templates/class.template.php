<?php

/**
 * CLASS création du Customizer de template pour personnaliser les templates d'email
 * 
 * @author Floflo
 * @since 0.9
 */
if( !class_exists( 'VOYNOTIF_template' ) ) {
    class VOYNOTIF_template {


        function __construct() {

            //Enregistrement des templates pour réexploitation
            add_filter( 'voynotif/get_templates', array( $this, 'register_template' ) );

            //Add filters to perform html render
            add_filter( 'voynotif/template/header/name='.$this->name, array( $this, 'get_header' ), 10, 2 ); 
            add_filter( 'voynotif/template/footer/name='.$this->name, array( $this, 'get_footer' ), 10, 2 );
            add_filter( 'voynotif/template/body/name='.$this->name, array( $this, 'get_body' ), 10, 4 );
            add_filter( 'voynotif/template/button/name='.$this->name, array( $this, 'get_button' ), 10, 3 );
            add_filter( 'voynotif/template/excerpt/name='.$this->name, array( $this, 'get_excerpt' ), 10, 3 );

        }

        function register_template($templates) {
            $template = array(
                'title'       => $this->title,
                'price'       => $this->price,
                'author'      => $this->author,
                'author_link' => $this->author_link,
                'description' => $this->description,
                'credit'      => $this->credit,
                'thumbnail'   => $this->thumbnail,            
            );
            $templates[$this->name] = $template;
            return $templates;
        }

    }
}