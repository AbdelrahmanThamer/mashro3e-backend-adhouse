<script>

	<?php if ( $this->config->item( 'client_side_validation' ) == true ): ?>

	function jqvalidate() {

		$('#currency-form').validate({
			rules:{
				currency_short_form:{
					blankCheck : "",
					minlength: 3,
					remote: "<?php echo $module_site_url .'/ajx_exists/'.@$currency->id; ?>"
				},
				currency_symbol:{
					blankCheck : ""
 				}
			},
			messages:{
				currency_short_form:{
					blankCheck : "<?php echo get_msg( 'err_currency_name' ) ;?>",
					minlength: "<?php echo get_msg( 'err_currency_len' ) ;?>",
					remote: "<?php echo get_msg( 'err_currency_exist' ) ;?>."
				},
				currency_symbol:{
					blankCheck : "<?php echo get_msg( 'err_currency_symbol' ) ;?>"
 				}
			}
		});
		// custom validation
		jQuery.validator.addMethod("blankCheck",function( value, element ) {
			
			   if(value == "") {
			    	return false;
			   } else {
			    	return true;
			   }
		})
	}

	<?php endif; ?>

	function runAfterJQ() {

		$('.delete-img').click(function(e){
			e.preventDefault();

			// get id and image
			var id = $(this).attr('id');

			// do action
			var action = '<?php echo $module_site_url .'/delete_cover_photo/'; ?>' + id + '/<?php echo @$currency->id; ?>';
			console.log( action );
			$('.btn-delete-image').attr('href', action);
		});
	}
</script>

<?php 
	// replace cover photo modal
	$data = array(
		'title' => get_msg('upload_photo'),
		'img_type' => 'currency',
		'img_parent_id' => @$currency->id
	);

	$this->load->view( $template_path .'/components/photo_upload_modal', $data );

	// delete cover photo modal
	$this->load->view( $template_path .'/components/delete_cover_photo_modal' ); 

	// replace cover icon modal
	$data = array(
		'title' => get_msg('upload_icon'),
		'img_type' => 'currency-icon',
		'img_parent_id' => @$currency->id
	);
		$this->load->view( $template_path .'/components/icon_upload_modal', $data );

	// delete cover photo modal
	$this->load->view( $template_path .'/components/delete_cover_photo_modal' ); 
?>