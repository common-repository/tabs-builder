<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<script>
var i = 1000;
	function add_new_content(){
	var output = 	'<li class="wpsm_ac-panel single_color_box" >'+
		'<span class="ac_label"><?php _e("Tab Title",wpsm_tabs_b_text_domain); ?></span>'+
		'<input type="text" id="tabs_title[]" name="tabs_title[]" value="" placeholder="Enter Tab Title Here" class="wpsm_ac_label_text">'+
		'<span class="ac_label"l><?php _e("Tab Description",wpsm_tabs_b_text_domain); ?></span>'+
		'<textarea  id="tabs_desc[]" name="tabs_desc[]"  placeholder="Enter Tab Description Here" class="wpsm_ac_label_text"></textarea>'+
		'<button type="button" class="btn btn-primary btn-block html_editor_button" data-toggle="modal" data-target=".bs-example-modal-lg" id="'+i+'" onclick="open_editor('+i+')">Use WYSIWYG Editor </button>'+
		
		'<a class="remove_button" href="#delete" id="remove_bt"><i class="fa fa-trash-o"></i></a>'+
		'</li>';
	jQuery(output).hide().appendTo("#colorbox_panel").slideDown("slow");
	i++;
	call_icon();
	}
	jQuery(document).ready(function(){

	  jQuery('#colorbox_panel').sortable({
	  
	   revert: true,
	     
	  });
	});
	
	
</script>
<script>
	jQuery(function(jQuery)
		{
			var colorbox = 
			{
				colorbox_ul: '',
				init: function() 
				{
					this.colorbox_ul = jQuery('#colorbox_panel');

					this.colorbox_ul.on('click', '.remove_button', function() {
					if (confirm('Are you sure you want to delete this?')) {
						jQuery(this).parent().slideUp(600, function() {
							jQuery(this).remove();
						});
					}
					return false;
					});
					 jQuery('#delete_all_colorbox').on('click', function() {
						if (confirm('Are you sure you want to delete all the Colorbox?')) {
							jQuery(".single_color_box").slideUp(600, function() {
								jQuery(".single_color_box").remove();
							});
							jQuery('html, body').animate({ scrollTop: 0 }, 'fast');
							
						}
						return false;
					});
					
			   }
			};
		colorbox.init();
	});
</script>


<script>
	
	
	function open_editor(id){
		

		var value = jQuery("#"+id).closest('li').find('textarea').val();
		jQuery("#get_text-html").click();
		jQuery("#get_text").val(value);
		jQuery("#get_id").val(jQuery("#"+id).attr('id'));
	 }
	
	
	function insert_html(){
		jQuery("#get_text-html").click();
		var html_text = jQuery("#get_text").val();
		var id = jQuery("#get_id").val();
		jQuery("#"+id).closest('li').find('textarea').val(html_text);
			
	}
	
	
</script>