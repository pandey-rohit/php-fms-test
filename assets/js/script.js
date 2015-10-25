jQuery(document).ready(function() {
	jQuery('#my_files').on('click', function() {
		jQuery('.files_listing').show();
		jQuery('.folder_creation').hide();
		jQuery('.file_creation').hide();			
	});	

	jQuery('#new_folder').on('click', function() {
		jQuery('.folder_creation').show();
		jQuery('.files_listing').hide();
		jQuery('.file_creation').hide();		
	});

	jQuery('#upload_file').on('click', function() {
		jQuery('.file_creation').show();		
		jQuery('.files_listing').hide();
		jQuery('.folder_creation').hide();	
	});
});