<?php


class voynotif_template_antwork Extends VOYNOTIF_template {

    
    /**
     * Constructor
     * 
     * @author Floflo
     * @since 0.9
     * @update 2016-06-22
     */
    function __construct() {
        
        //Set template info
        $this->name = 'antwork';
        $this->title = 'Antwork';
        $this->price = 'free';
        $this->author = 'Julie Ng';
        $this->author_link = 'https://twitter.com/jng5';
        $this->description = __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet pulvinar purus, non sagittis neque. Fusce vitae condimentum nunc. Ut in elementum mi, ac lacinia lacus.', 'notifications-center' );
        $this->credit = 'MIT License';
        $this->thumbnail = VOYNOTIF_URL . '/assets/img/antwork.jpg';

        parent::__construct();
    }

    /*
     * -------------------------------------------------------------------------
     * ALL HTML RENDER METHODS
     * ------------------------------------------------------------------------- 
     */
    
    
    /**
     * Get HTML Header
     * 
     * @author Floflo
     * @since 0.9
     * @update 216-06-22
     * 
     * @param string $html
     * @param oject $template
     * @return string HTML header
     */
    function get_header($html, $template) {
        //return $template;
        $html = '
            <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
            <html lang="en">
            <head>
              <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
              <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
              <meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS -->
              <title>Single Column</title>

              <style type="text/css">
            body {
              margin: 0;
              padding: 0;
              -ms-text-size-adjust: 100%;
              -webkit-text-size-adjust: 100%;
            }

            table {
              border-spacing: 0;
            }

            table td {
              border-collapse: collapse;
            }

            .ExternalClass {
              width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
              line-height: 100%;
            }

            .ReadMsgBody {
              width: 100%;
              background-color: #ebebeb;
            }

            table {
              mso-table-lspace: 0pt;
              mso-table-rspace: 0pt;
            }

            img {
              -ms-interpolation-mode: bicubic;
            }

            .yshortcuts a {
              border-bottom: none !important;
            }

            @media screen and (max-width: 599px) {
              .force-row,
              .container {
                width: 100% !important;
                max-width: 100% !important;
              }
            }
            @media screen and (max-width: 400px) {
              .container-padding {
                padding-left: 12px !important;
                padding-right: 12px !important;
              }
            }
            .ios-footer a {
              color: #aaaaaa !important;
              text-decoration: underline;
            }
            </style>
            </head>

            <body style="margin:0; padding:0;" bgcolor="'.$template->background_color.'" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

            <!-- 100% background wrapper (grey background) -->
            <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="'.$template->background_color.'">
              <tr>
                <td align="center" valign="top" bgcolor="'.$template->background_color.'" style="background-color: '.$template->background_color.';">

                  <br>

                  <!-- 600px container (white background) -->
                  <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width:600px;max-width:600px">
                    <tr>
                      <td class="container-padding header" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;color:#DF4726;padding-left:24px;padding-right:24px">
                        <img alt="Logo" src="'.$template->logo_url.'" style="display: block; font-family: Helvetica, Arial, sans-serif; color: #666666; font-size: 16px;" border="0">
                      </td>
                    </tr>  
        ';
        return $html;
    }
  
    
    /**
     * Get HTML Footer
     * 
     * @author Floflo
     * @since 0.9
     * @update 216-06-22
     * 
     * @param string $html
     * @param oject $template
     * @return string HTML footer
     */
    function get_footer($html, $template) {
        $html = '
                    <tr>
                      <td class="container-padding footer-text" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px">
                        <br><br>
                        '.$template->footer.'
                        <br><br>

                      </td>
                    </tr>
                  </table>
            <!--/600px container -->


                </td>
              </tr>
            </table>
            <!--/100% background wrapper-->

            </body>
            </html>  
        ';
        return $html;
    }
  
    
    /**
     * Get HTML button
     * 
     * @author Floflo
     * @since 0.9
     * @update 216-06-22
     * 
     * @param string $html
     * @param oject $template
     * @param array $button_info Buutton info to render html
     * 
     * @return string HTML button
     */
    function get_button($html, $template, $button_info) {
        $html = '
          <table>  
          <tr>                                
            <td>                                    
              <!-- BULLETPROOF BUTTON -->                                    
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">                                        
                <tr>                                            
                  <td align="center" style="padding: 25px 0 0 0;" class="padding-copy">                                                
                    <table border="0" cellspacing="0" cellpadding="0" class="responsive-table">                                                    
                      <tr>                                                        
                        <td align="center">                                                          
                          <a href="'.$button_info['url'].'" target="_blank" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #ffffff; text-decoration: none; background-color: '.$template->button_color.'; border-top: 15px solid '.$template->button_color.'; border-bottom: 15px solid '.$template->button_color.'; border-left: 25px solid '.$template->button_color.'; border-right: 25px solid '.$template->button_color.'; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; display: inline-block;" class="mobile-button">                                                            '
                            . ''.$button_info['label'].'                                                           
                          </a>                                                                                                                
                        </td>                                                    
                      </tr>                                                
                    </table>                                            
                  </td>                                        
                </tr>                                    
              </table>                                
            </td>                            
          </tr> 
          </table>
        ';
        return $html;
    }
  
    
    /**
     * Get HTML body
     * 
     * @author Floflo
     * @since 0.9
     * @update 2016-06-22
     * 
     * @param string $html
     * @param object $template
     * @param string $button
     * @param string $excerpt
     * 
     * @return string
     */
    function get_body($html, $template, $button, $excerpt) {
        $html = '
            <tr>
              <td class="container-padding content" align="left" style="padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:'.$template->backgroundcontent_color.'">
                <br>

                <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:'.$template->title_color.'">Single Column Fluid Layout</div>
                <br>

                <div class="body-text" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333">
                  This is an example of a single column fluid layout. There are no columns. Because the container table width is set to 100%, it automatically resizes itself to all devices. The magic of good old fashioned HTML.
                  <br><br>

                  The media query change we make is to decrease the content margin from 24px to 12px for devices up to max width of 400px.
                  <br>
                  '.$button.'
                  <br>
                </div>

              </td>
            </tr>  
        ';
        return $html;
    }
  
    /**
     * Get HTML Excerpt
     * 
     * @author Floflo
     * @since 0.9
     * @update 2016-06-22
     * 
     * @param string $html
     * @param type $template
     * @param type $excerpt_info
     * 
     * @return string
     */
    function get_excerpt($html, $template, $excerpt_info) {
        
        $post_id = $excerpt_info['post_id'];
        if( has_post_thumbnail($post_id) ) {
            $thumb_id = get_post_thumbnail_id($post_id);
            $thumb_url_array = wp_get_attachment_image_src($thumb_id,'thumbnail', true);
            $thumb_url = $thumb_url_array[0];
        } else {
            $thumb_url = '';  
        }  

        $post = get_post($post_id); setup_postdata($post);

        $html = '                            
          <tr>                                
            <table>                                    
              <tr>                                        
                <td valign="top" style="padding: 40px 0 0 0;" class="mobile-hide">
                  <a href="'.get_site_url().'/wp-admin/post.php?post='.$post_id.'&action=edit" target="_blank">
                    <img src="'.$thumb_url.'" alt="Litmus" width="105" height="105" border="0" style="display: block; font-family: Arial; color: #666666; font-size: 14px; width: 105px; height: 105px;"></a></td>                                        
                <td style="padding: 40px 0 0 0;" class="no-padding">                                            
                  <!-- ARTICLE -->                                            
                  <table border="0" cellspacing="0" cellpadding="0" width="100%">                                                
                    <tr>                                                    
                      <td align="left" style="padding: 0 0 5px 25px; font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #aaaaaa;" class="padding-meta">Le '.get_the_date('d/m/Y', $post_id).', par '.get_the_author().'</td>                                                
                    </tr>                                                
                    <tr>                                                    
                      <td align="left" style="padding: 0 0 5px 25px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #333333;" class="padding-copy">'.get_the_title($post_id).'</td>                                                
                    </tr>                                                
                    <tr>                                                     
                      <td align="left" style="padding: 10px 0 15px 25px; font-size: 16px; line-height: 24px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">'.voynotif_get_excerpt_by_id($post_id, 100).'</td>                                                
                    </tr>                                            
                  </table>                                        
                </td>                                    
              </tr>                                                               
            </table>                            
          </tr>    
        ';
        wp_reset_postdata();
        return $html;
    }
  
    
    /*
     * -------------------------------------------------------------------------
     * CUSTOMIZER METHODS
     * ------------------------------------------------------------------------- 
     */
    
    
    /**
     * @todo Build customizer filter to add fields
     */
    function customizer_settings() { 
        //nothing
    }
    
    
    /**
     * @todo Build customizer filter to add fields
     */    
    function customizer_controls() {
        //nothing
    }

}
new voynotif_template_antwork();



?>