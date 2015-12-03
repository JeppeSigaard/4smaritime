<?php 

class smamo_subscribe_widget extends WP_Widget {

    function __construct() {
    parent::__construct(
    // Base ID of your widget
    'smamo_subscribe_widget', 

    // Widget name will appear in UI
    __('Mailchimp subscribe widget', 'smamo'), 

    // Widget description
    array( 'description' => __( 'Widget, der viser en tilmelding til nyhedsbrev', 'smamo' ), ) 
    );
    }

    // FRONT END
    public function widget( $args, $instance ) {
        
		$api_key = (isset($instance['api_key']) && $instance['api_key'] !== '') ? $instance['api_key'] : get_theme_mod('mailchimp_api_key');
		$list_id = (isset($instance['list_id']) && $instance['list_id'] !== '') ? $instance['list_id'] : get_theme_mod('mailchimp_list_id');
		if ($api_key && $list_id) :

        echo $args['before_widget']; ?>

        <form action="<?php echo admin_url('admin-ajax.php'); ?>" method="post">
			<input type="hidden" name="action" value="smamo_mailchimp_subscribe">
			<input type="hidden" name="api_key" value="<?php echo $api_key; ?>">
			<input type="hidden" name="list_ID" value="<?php echo $list_id; ?>">
			<?php if (isset($instance['description'])) :  ?>
			<div>
				<p><?php echo apply_filters('the_content',$instance['description']); ?></p>
			</div>
			<?php endif; ?>
			<div>
				<input required type="email" name="email">
				<label for="email">Your email</label>
			</div>
			<div>
				<a class="button submit" href="#">Sign up</a>
			</div>
		</form>
        
        <?php echo $args['after_widget']; endif;
    }

    // BACKEND
    public function form( $instance ) {

        $description = (isset($instance['description'])) ? $instance['description'] : '';
        $label = (isset($instance['label'])) ? $instance['label'] : '';
        $api_key = (isset($instance['api_key'])) ? $instance['api_key'] : '';
        $list_id = (isset($instance['list_id'])) ? $instance['list_id'] : '';
        
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e( 'Indledende tekst' ); ?></label> 
            <textarea placeholder="Subscribe to our newsletter" rows="4" class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>"><?php echo esc_attr( $description ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'label' ); ?>"><?php _e( 'Label (placeholder)' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'label' ); ?>" name="<?php echo $this->get_field_name( 'label' ); ?>" type="text" value="<?php echo esc_attr( $label ); ?>"  placeholder="Your email"/>
        </p>
        <br/><hr>
        <p class="howto">
            Api nøgle og Liste ID findes i kontrolpanelet på mailchimp.com
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'api_key' ); ?>"><?php _e( 'Api nøgle' ); ?></label> 
            <input placeholder="<?php echo get_theme_mod('mailchimp_api_key') ?>" class="widefat" id="<?php echo $this->get_field_id( 'api_key' ); ?>" name="<?php echo $this->get_field_name( 'api_key' ); ?>" type="text" value="<?php echo esc_attr( $api_key ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'list_id' ); ?>"><?php _e( 'Liste ID' ); ?></label> 
            <input placeholder="<?php echo get_theme_mod('mailchimp_list_id') ?>" class="widefat" id="<?php echo $this->get_field_id( 'list_id' ); ?>" name="<?php echo $this->get_field_name( 'list_id' ); ?>" type="text" value="<?php echo esc_attr( $list_id ); ?>" />
        </p>
        <?php 
    }

    // OPDATER
    public function update( $new_instance, $old_instance ) {

        $instance = array();

        $instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';
        $instance['label'] = ( ! empty( $new_instance['label'] ) ) ? strip_tags( $new_instance['label'] ) : '';
        $instance['api_key'] = ( ! empty( $new_instance['api_key'] ) ) ? strip_tags( $new_instance['api_key'] ) : '';
        $instance['list_id'] = ( ! empty( $new_instance['list_id'] ) ) ? strip_tags( $new_instance['list_id'] ) : '';

        return $instance;

    }

} // SLUT GUL KASSE WIDGET









// Registrer ekstra widgets
add_action( 'widgets_init', 'smamo_load_widgets' );
function smamo_load_widgets() {
	register_widget( 'smamo_subscribe_widget' );
}
