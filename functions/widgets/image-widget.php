<?php 

if( !defined( 'IS_ADMIN' ) )
    define( 'IS_ADMIN',  is_admin() );


class WidgetImageField
{
    private $image_id;
    private $src;
    private $width;
    private $height;
    private $widget_field;
    private $widget = null;

    function __construct( $widget = null, $image_id = 0 )
    {
        $uri        = isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : NULL ;
        $file       = basename( parse_url( $uri, PHP_URL_PATH ) );

        // if we're on the Widgets page
        if( $uri && in_array( $file, array( 'widgets.php' ) ) && IS_ADMIN )
        {
            wp_enqueue_script( 'jquery-ui-core' );
            wp_enqueue_script( 'thickbox' );
            wp_enqueue_script( 'media-upload' );
            wp_enqueue_script( 'widgetimagefield', get_template_directory_uri() . '/functions/widgets/script.js', array( 'jquery', 'jquery-ui-core', 'thickbox', 'media-upload' ), false, true );

            wp_enqueue_style( 'thickbox' );
            wp_enqueue_style( 'widgetimagefield', get_template_directory_uri() . '/functions/widgets/style.css' );
        }

        // set our properties
        $this->widget = $widget;
        if( $image_id )
        {
            $this->image_id         = intval( $image_id );
            $this->src              = $this->get_image_src( $this->image_id );
            $this->width            = $this->get_image_width( $this->image_id );
            $this->height           = $this->get_image_height( $this->image_id );
            $this->widget_field     = $this->get_widget_field( $widget, $this->image_id );
        }
    }

    function get_image( $size = 'full' )
    {
        $image = false;

        if( $this->image_id )
        {
            $image = wp_get_attachment_image_src( $this->image_id, $size );
        }

        return $image;
    }

    function get_image_src( $size = 'full' )
    {
        $src = false;

        if( $this->image_id )
        {
            $image      = $this->get_image( $size );
            $src        = $image[0];
        }

        return $src;
    }

    function get_image_dimensions( $size = 'full' )
    {
        $dimensions = array( null, null );

        if( $this->image_id )
        {
            $image          = $this->get_image( $size );
            $dimensions     = array( $image[1], $image[2] );
        }

        return $dimensions;
    }

    function get_image_width( $size = 'full' )
    {
        $width = false;

        if( $this->image_id )
        {
            $dimensions     = $this->get_image_dimensions( $size );
            $width          = $dimensions[0];
        }

        return $width;
    }

    function get_image_height( $size = 'full' )
    {
        $height = false;

        if( $this->image_id )
        {
            $dimensions     = $this->get_image_dimensions( $size );
            $height         = $dimensions[1];
        }

        return $height;
    }

    function get_widget_field( $field_name = null )
    {
        $field = false;
        if( $this->widget && ( isset( $this->widget->image_field ) || $field_name ) )
        {
            $field  = "<div class='iti-image-widget-field'><div class='iti-image-widget-image' id='" . $this->widget->id . "'>";
            $field .= "<input type='hidden' style='display:none;' id='" . $this->widget->get_field_id( $this->widget->image_field ) . "' name='" . $this->widget->get_field_name( $this->widget->image_field ) . "' value='" . $this->image_id . "' />";

            if( $this->image_id )
            {
                $field .= "<img src='" . $this->src . "' width='" . $this->width . "' height='" . $this->height . "' />";
            }

            $field .= "</div>";

            $field .= "<a class='button iti-image-widget-trigger' href='media-upload.php?TB_iframe=1&amp;width=640&amp;height=1500' title='" . __( 'Vælg billede' ) . "'>";
            $field .= __( 'Vælg billede' );
            $field .= "</a></div>";
        }
        return $field;
    }
}


if( class_exists( 'WidgetImageField' ) )
    add_action( 'widgets_init', create_function( '', "register_widget( 'smamo_img_widget' );" ) );
 
 
class smamo_img_widget extends WP_Widget
{
    var $image_field = 'image';  // the image field ID
 
    function __construct()
    {
        $widget_ops = array(
                'classname'     => 'smamo_img_widget',
                'description'   => __( "Widget, der viser billede og en eventuelt overliggende tekst")
            );
        parent::__construct( 'smamo_img_widget', __('Billede med link'), $widget_ops );
    }
 
    function form( $instance )
    {
        $image_id   = esc_attr( isset( $instance[$this->image_field] ) ? $instance[$this->image_field] : 0 );
        $blurb      = esc_attr( isset( $instance['blurb'] ) ? $instance['blurb'] : '' );
        $url      = esc_attr( isset( $instance['url'] ) ? $instance['url'] : '' );
        $new      = esc_attr(  isset($instance['new']) ? 'true' : 'false' );
 
        $image      = new WidgetImageField( $this, $image_id );
        ?>
            <div>
                <label><?php _e( 'Billede' ); ?></label>
                <?php echo $image->get_widget_field(); ?>
            </div>
            <p>
                <label for="<?php echo $this->get_field_id( 'blurb' ); ?>"><?php _e( 'Tekst:' ); ?>
                    <input class="widefat" id="<?php echo $this->get_field_id( 'blurb' ); ?>" name="<?php echo $this->get_field_name( 'blurb' ); ?>" type="text" value="<?php echo $blurb; ?>" />
                </label>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'url' ); ?>"><?php _e( 'Link:' ); ?>
                    <input class="widefat" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" type="text" value="<?php echo $url; ?>" />
                </label>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'new' ); ?>"><?php _e( 'Åben i nyt vindue:' ); ?>
                    <input id="<?php echo $this->get_field_id( 'new' ); ?>" name="<?php echo $this->get_field_name( 'new' ); ?>" type="checkbox" <?php checked(isset($instance['new']) ? $instance['new'] : 'off', 'on'); ?>/>
                </label>
            </p>
        <?php
    }
 
    function widget( $args, $instance )
    {
        extract($args);
 
        $image_id   = $instance[$this->image_field];
        $blurb      = $instance['blurb'];
        $url      = $instance['url'];
        $new      = $instance['new'] ? 'true' : 'false';
 
        $image      = new WidgetImageField( $this, $image_id );
 
        echo $before_widget;
 
        ?>
            <a <?php if (!empty($url)){echo 'href="'.$url.'"'; if ('on' == $instance['new']){echo ' target="_blank"';}}?>/>
            <?php if( !empty( $image_id ) ) : ?>
                <img src="<?php echo $image->get_image_src( 'full' ); ?>"/>
            <?php endif; ?>
            <?php if( !empty( $blurb ) ) : ?>
                <div><span><?php echo $blurb; ?></span></div>
            <?php endif; ?>
            </a>
            <?php
 
        echo $after_widget;
    }
 
    function update( $new_instance, $old_instance )
    {
        $instance = $old_instance;
        $instance[$this->image_field]    = intval( strip_tags( $new_instance[$this->image_field] ) );
        $instance['blurb']               = strip_tags( $new_instance['blurb'] );
        $instance['url']                 = strip_tags( $new_instance['url'] );
        $instance['new']                 = strip_tags( $new_instance['new'] );
 
        return $instance;
    }
}