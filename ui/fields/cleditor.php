<?php
wp_enqueue_script( 'pods-cleditor' );
wp_enqueue_style( 'pods-cleditor' );

$type = 'textarea';
$attributes = array();
$attributes[ 'tabindex' ] = 2;
$attributes = PodsForm::merge_attributes( $attributes, $name, $form_field_type, $options, 'pods-ui-field-cleditor' );
?>
<textarea<?php PodsForm::attributes( $attributes, $name, $form_field_type, $options ); ?>><?php echo esc_textarea( $value ); ?></textarea>
<script>
    jQuery( function ( $ ) {
        //$( '#<?php echo esc_js( $css_id ); ?>' ).PodsForm( 'cleditor' );

        var $textarea = $( 'textarea#<?php echo $attributes[ 'id' ]; ?>' );
        var editorWidth = $textarea.outerWidth();
        $textarea.cleditor( {
            width : editorWidth<?php
				$rows = (int) pods_v( 'wysiwyg_rows', $options, 0 );

				if ( 0 < $rows ) {
			?>,
			height: <?php echo ( $rows * 20 ); ?>
			<?php
				}

			?>
        } );
    } );
</script>
