<?php
/**
 * CLASS VOYNOTIF_email_template
 * 
 * @author Floflo
 * @since 0.9
 */
if( !class_exists( 'VOYNOTIF_email_template' ) ) {
    class VOYNOTIF_email_template {

        var $name,
            $logo_url,
            $logo_width,
            $logo_height,
            $button_color,
            $background_color,
            $backgroundcontent_color,
            $title_color,
            $title,
            $content,
            $footer,
            $button_info,
            $context;


        /**
         *  Constructor
         * 
         * @author Floflo
         * @since 0.9
         * 
         * @param string $title Titre du mail
         * @param string $content Contenu du mail
         * @param string $context Contexte dans lequel le template est sollicité
         **/
        function __construct($template_name = null, $title = null, $content = null, $context = null) {

            //name
            if( empty( $template_name ) ) {
                $this->name = voynotif_get_current_email_template();
            } else {
                $this->name = $template_name;
            }


            //logo
            $this->logo_url = get_option( VOYNOTIF_FIELD_PREFIXE . 'email_logo' );

            //Couleurs
            $this->button_color = get_option( VOYNOTIF_FIELD_PREFIXE . 'email_button_color' );
            $this->background_color = get_option( VOYNOTIF_FIELD_PREFIXE . 'email_background_color' );
            $this->backgroundcontent_color = get_option( VOYNOTIF_FIELD_PREFIXE . 'email_backgroundcontent_color' );
            $this->title_color = get_option( VOYNOTIF_FIELD_PREFIXE . 'email_title_color' );

            //Footer
            $this->footer = get_option( VOYNOTIF_FIELD_PREFIXE . 'email_footer_message' );

            //Contenu
            if( $title ) { $this->title = $title; }
            if( $content ) { $this->content = $content; }
            if( $context ) { $this->context = $context; }

        }


        /**
         * Spécifier le titre de l'email. Surcharge le titre défini dans le constructeur
         * 
         * @author Floflo
         * @since 0.9
         * 
         * @param string $title Titre de l(email
         */
        function set_title($title) {
            $this->title = $title;
        }


        /**
         * Spécifier le contenu de l'email. Surcharge le contenu défini dans le constructeur
         * 
         * @author Floflo
         * @since 0.9
         * 
         * @param string $contenu Conntenu de l(email
         */
        function set_content($contenu) {
            $this->content = $contenu;
        }


        /**
        * Spécifier le contexte de l'email. Surcharge le contexte défini dans le constructeur
        * 
        * @author Floflo
        * @since 0.9
        * 
        * @param string $context contexte de l(email
        */
        function set_context($context) {
            $this->context = $context;
        }


        /**
        * Spécifier le CTA à intégrer en bas de mail
        * 
        * @author Floflo
        * @since 0.9
        * 
        * @param array $cta Array like ( url => http://... , label => Label Name )
        */
        function set_button_info($cta) {

            //Check if $cta is an array
            if( ! is_array($cta) ) {
                return false;
            }

            //Check if array contains all needed data
            if( ! isset($cta['url']) OR $cta['url'] == '' ) {
                $cta['url'] = '#';
            }   
            if( ! isset($cta['label']) OR $cta['label'] == '' ) {
                $cta['label'] = __('Click here', 'notifications-center');
            }

            //set cta
            $this->button_info = $cta;
            return true;

        }


        function set_excerpt_info( $excerpt_info ) {

            //Check if Excerpt info is an array
            if( ! is_array( $excerpt_info ) ) {
                return false;
            }

            //Save excerpt info
            $this->excerpt_info = $excerpt_info;
            return true;

        }


        /**
         * Get HTML header
         * 
         * @author Floflo
         * @since 0.9
         * @update 2016-06-26
         * 
         * @return string HTML header
         */
        function get_header() {
            $header = apply_filters( 'voynotif/template/header/name='.$this->name, '', $this );
            return $header;
        }


        /**
         * Get HTML footer
         * 
         * @author Floflo
         * @since 0.9
         * @update 2016-06-26
         * 
         * @return string HTML header
         */
        function get_footer() {
            $header = apply_filters( 'voynotif/template/footer/name='.$this->name, '', $this );
            return $header;
        }


       /**
         * Get HTML footer
         * 
         * @author Floflo
         * @since 0.9
         * @update 2016-06-26
         * 
         * @return string HTML header
         */
        function get_body() {
            $button = $this->get_html_button();
            $excerpt = $this->get_html_excerpt();
            $body = apply_filters( 'voynotif/template/body/name='.$this->name, '', $this, $button, $excerpt );
            return $body;
        }


        /**
         * Get HTML button
         * 
         * @author Floflo
         * @since 0.9
         * @update 2016-06-26
         * 
         * @return string HTML header
         */
        function get_html_button() {
            if( empty( $this->button_info ) ) {
                return false;
            }
            $button = apply_filters( 'voynotif/template/button/name='.$this->name, '', $this, $this->button_info );
            return $button;
        }


        /**
         * Get HTML exerpt
         * 
         * @author Floflo
         * @since 0.9
         * @update 2016-06-26
         * 
         * @return string HTML header
         */
        function get_html_excerpt() {
            if( empty( $this->excerpt_info ) ) {
                return false;
            }
            $excerpt = apply_filters( 'voynotif/template/excerpt/name='.$this->name, '', $this, $this->excerpt_info );
            return $excerpt;
        }


        /**
         * Build all html template, with get_header, ge_body and get_footer methods from child class
         * 
         * @author Floflo
         * @since 0.9
         * @update 2016-06-05
         * 
         * @param array $cta
         * @param string $bottom_html
         * @return string Generated HTML
         */
        function get_html() {

            //Return HTML
            $html = $this->get_header().$this->get_body().$this->get_footer();
            return $html;

        }  

    }
}

?>